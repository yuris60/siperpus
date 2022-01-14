<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class kategoribuku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/kategoribuku_model');
    $this->load->model('admin/login_model');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Kategori Buku | SIPERPUS";
    $data['menu'] = "Kategori Buku";
    $data['icon'] = "bi bi-bookmarks";

    $data['kategoribuku'] = $this->kategoribuku_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/kategoribuku/kategoribuku_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function create()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Tambah Kategori Buku | SIPERPUS";
    $data['menu'] = "Kategori Buku";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-bookmarks";

    $this->form_validation->set_rules('nm_kategoribuku', 'Nama Kategori Buku', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/kategoribuku/kategoribuku_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->kategoribuku_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('admin/kategoribuku');
    }
  }

  public function update($where)
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Perbarui Kategori Buku | SIPERPUS";
    $data['menu'] = "Kategori Buku";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-bookmarks";

    $this->form_validation->set_rules('nm_kategoribuku', 'Nama Kategori Buku', 'required|trim');

    $data['kategoribuku'] = $this->kategoribuku_model->getById($where);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/kategoribuku/kategoribuku_update', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->kategoribuku_model->update($where);
      $this->session->set_flashdata('success', 'Diperbarui');
      redirect('admin/kategoribuku');
    }
  }

  public function delete($where)
  {
    $where = ['id_kategoribuku' => $this->uri->segment(4)];
    $this->kategoribuku_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/kategoribuku');
  }
}
