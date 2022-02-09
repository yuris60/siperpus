<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->library('Ajax_pagination');
    $this->load->helper('tglindo');
    $this->load->helper('waktulalu');
    $this->load->model('buku_model');

    // Per page limit 
    $this->perPage = 24;
  }

  public function koleksi()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Koleksi Buku | SIPERPUS";
    $data['menu'] = "Koleksi Buku";
    $data['icon'] = "bi bi-bool-fill";

    $data['buku'] = $this->buku_model->getJoin();
    $data['bukuterbaru'] = $this->buku_model->getBukuTerbaru();
    $data['bukuterfavorit'] = $this->buku_model->getBukuTerfavorit();

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/koleksi_buku', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function cari()
  {
    //ambil parameter pencarian
    $pilihan = $this->input->post('pilih_berdasarkan');
    $katakunci = $this->input->post('cari');

    $data['katakunci'] = $katakunci;
    $data['pilihan'] = $pilihan;

    $data['buku'] = $this->buku_model->getCari($katakunci, $pilihan);
    $data['bukuterbaru'] = $this->buku_model->getBukuTerbaru();

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/buku_cari', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function kategori($where)
  {
    // $data['user'] = $this->login_model->getSession();
    $where = $this->uri->segment(3);
    $data['title'] = "Koleksi Buku | SIPERPUS";
    $data['menu'] = "Koleksi Buku";
    $data['icon'] = "bi bi-bool-fill";

    // $data['buku'] = $this->buku_model->getBukuAll();
    $data['bukukategori'] = $this->buku_model->getBukuKategori($where);

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/buku_kategori', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function cek()
  {

    $this->load->library('pagination');

    $limit = 16;
    $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $config['base_url'] = site_url('buku/cek/');
    $config['total_rows'] = $this->buku_model->countAllBuku();
    $config['per_page'] = $limit;
    $config['uri_segment'] = 3;
    $config['num_links'] = 2;
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';

    // $config['num_tag_open'] = '<li class="page-item">';
    // $config['num_tag_close'] = '</li>';

    // $config['next_link'] = '&raquo';
    // $config['next_tag_open'] = '<li class="page-item">';
    // $config['next_tag_close'] = '</li>';

    // $config['prev_link'] = '&laquo';
    // $config['prev_tag_open'] = '<li class="page-item">';
    // $config['prev_tag_close'] = '</li>';

    // $config['first_link'] = 'First';
    // $config['first_tag_open'] = '<li class="page-item">';
    // $config['first_tag_close'] = '</li>';

    // $config['last_link'] = 'Last';
    // $config['last_tag_open'] = '<li class="page-item">';
    // $config['last_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    $config['attributes'] = array('class' => 'page-link');

    $this->pagination->initialize($config);

    $data['buku'] = $this->buku_model->getJoin2($limit, $offset);

    $data['pagelinks'] = $this->pagination->create_links();


    $data['title'] = "Cek | SIPERPUS";
    $data['menu'] = "Cek";
    $data['icon'] = "bi bi-bool-fill";

    // $data['buku'] = $this->buku_model->getJoin();

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/buku_cek', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  function ajaxPaginationData()
  {
    // Define offset 
    $page = $this->buku_model->post('page');
    if (!$page) {
      $offset = 0;
    } else {
      $offset = $page;
    }

    // Get record count 
    $conditions['returnType'] = 'count';
    $totalRec = $this->buku_model->getRows($conditions);

    // Pagination configuration 
    $config['target']      = '#dataList';
    $config['base_url']    = base_url('buku/cek');
    $config['total_rows']  = $totalRec;
    $config['per_page']    = $this->perPage;

    // Initialize pagination library 
    $this->ajax_pagination->initialize($config);

    // Get records 
    $conditions = array(
      'start' => $offset,
      'limit' => $this->perPage
    );
    $data['buku'] = $this->buku_model->getRows($conditions);

    // Load the data list view 
    $this->load->view('user/buku_data', $data, false);
  }
}
