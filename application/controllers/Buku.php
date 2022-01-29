<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->helper('tglindo');
    $this->load->helper('waktulalu');
    $this->load->model('buku_model');
  }

  public function koleksi()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Koleksi Buku | SIPERPUS";
    $data['menu'] = "Koleksi Buku";
    $data['icon'] = "bi bi-bool-fill";

    $data['buku'] = $this->buku_model->getJoin();
    $data['bukuterbaru'] = $this->buku_model->getBukuTerbaru();

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/koleksi_buku', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function cari()
  {
    $data['title'] = "Koleksi Buku | SIPERPUS";
    $data['menu'] = "Koleksi Buku";
    $data['icon'] = "bi bi-bool-fill";

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

  public function loadRecord($rowno = 0)
  {

    $rowperpage = 5;

    if ($rowno != 0) {
      $rowno = ($rowno - 1) * $rowperpage;
    }

    $allcount = $this->db->count_all('buku');

    $this->db->limit($rowperpage, $rowno);
    $users_record = $this->db->get('buku')->result_array();

    $config['base_url'] = base_url() . 'post/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tag_close']  = '</span></li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tag_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tag_close']  = '</span></li>';

    $this->pagination->initialize($config);

    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
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
}
