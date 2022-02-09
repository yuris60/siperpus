<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('pagination');
    $this->load->helper('waktulalu', 'tglindo');
    $this->load->model('buku_model');

    // Per page limit 
    $this->perPage = 24;
  }

  public function koleksi()
  {
    $limit = 16;
    $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $config['base_url'] = site_url('buku/koleksi/');
    $config['total_rows'] = $this->buku_model->countAllBuku();
    $config['per_page'] = $limit;
    $config['uri_segment'] = 3;

    // Kiri Kanan 2 Tombol
    $config['num_links'] = 2;

    // Custom with bootstrap
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    // Ubah class a href
    $config['attributes'] = array('class' => 'page-link');

    // Inisiasi
    $this->pagination->initialize($config);

    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Koleksi Buku | SIPERPUS";
    $data['menu'] = "Koleksi Buku";
    $data['icon'] = "bi bi-bool-fill";

    $data['bukuterbaru'] = $this->buku_model->getBukuTerbaru();
    $data['bukuterfavorit'] = $this->buku_model->getBukuTerfavorit();
    $data['buku'] = $this->buku_model->getJoin2($limit, $offset);
    $data['pagelinks'] = $this->pagination->create_links();
    $data['total_rows'] = $this->buku_model->countAllBuku();
    $data['limit'] = $limit;

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/buku_koleksi', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function cari()
  {
    //ambil parameter pencarian
    $pilihan = $this->input->post('pilih_berdasarkan');
    $katakunci = $this->input->post('cari');

    $limit = 16;
    $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $config['base_url'] = site_url('buku/cari');
    $config['total_rows'] = $this->buku_model->countBukuCari($katakunci, $pilihan);
    $config['per_page'] = $limit;
    $config['uri_segment'] = 4;

    // Kiri Kanan 2 Tombol
    $config['num_links'] = 2;

    // Custom with bootstrap
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    // Ubah class a href
    $config['attributes'] = array('class' => 'page-link');

    // Inisiasi
    $this->pagination->initialize($config);

    $data['title'] = "Cari Buku | SIPERPUS";
    $data['menu'] = "Cari Buku";
    $data['icon'] = "bi bi-bool-fill";

    $data['katakunci'] = $katakunci;
    $data['pilihan'] = $pilihan;
    $data['buku'] = $this->buku_model->getCari($katakunci, $pilihan, $limit, $offset);
    $data['bukuterbaru'] = $this->buku_model->getBukuTerbaru();
    $data['total_rows'] = $this->buku_model->countBukuCari($katakunci, $pilihan);
    $data['limit'] = $limit;
    $data['pagelinks'] = $this->pagination->create_links();

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/buku_cari', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function kategori($where)
  {
    $limit = 16;
    $where = $this->uri->segment(3);
    $offset = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

    $config['base_url'] = site_url('buku/kategori/' . $where . "/");
    $config['total_rows'] = $this->buku_model->countBukuKategori($where);
    $config['per_page'] = $limit;
    $config['uri_segment'] = 4;

    // Kiri Kanan 2 Tombol
    $config['num_links'] = 2;

    // Custom with bootstrap
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    // Ubah class a href
    $config['attributes'] = array('class' => 'page-link');

    // Inisiasi
    $this->pagination->initialize($config);

    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Koleksi Buku | SIPERPUS";
    $data['menu'] = "Koleksi Buku";
    $data['icon'] = "bi bi-bool-fill";

    // $data['buku'] = $this->buku_model->getBukuAll();
    $data['bukukategori'] = $this->buku_model->getBukuKategori($where, $limit, $offset);
    $data['pagelinks'] = $this->pagination->create_links();
    $data['total_rows'] = $this->buku_model->countBukuKategori($where);
    $data['limit'] = $limit;

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/buku_kategori', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function cek()
  {
    $limit = 16;
    $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $config['base_url'] = site_url('buku/cek/');
    $config['total_rows'] = $this->buku_model->countAllBuku();
    $config['per_page'] = $limit;
    $config['uri_segment'] = 3;

    // Kiri Kanan 2 Tombol
    $config['num_links'] = 2;

    // Custom with bootstrap
    $config['full_tag_open'] = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
    $config['full_tag_close'] = '</ul></nav>';
    $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = '</a></li>';

    // Ubah class a href
    $config['attributes'] = array('class' => 'page-link');

    // Inisiasi
    $this->pagination->initialize($config);

    $data['title'] = "Cek | SIPERPUS";
    $data['menu'] = "Cek";
    $data['icon'] = "bi bi-bool-fill";

    $data['buku'] = $this->buku_model->getJoin2($limit, $offset);
    $data['pagelinks'] = $this->pagination->create_links();

    // $data['buku'] = $this->buku_model->getJoin();

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/buku_cek', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }
}
