<?php
defined('BASEPATH') or exit('No direct script access allowed');

class buku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/buku_model');
    $this->load->helper('tglindo');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Buku | SIPERPUS";
    $data['menu'] = "Buku";
    $data['icon'] = "bi bi-book-half";

    $data['buku'] = $this->buku_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/buku/buku_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function create()
  {
    $data['title'] = "Tambah Buku | SIPERPUS";
    $data['menu'] = "Buku";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-book-half";

    $this->form_validation->set_rules('kode_buku', 'Kode Buku', 'required|trim');
    $this->form_validation->set_rules('nm_buku', 'Nama Buku', 'required|trim');

    $data['ddc'] = $this->buku_model->getDdcAll();
    $data['sumberbuku'] = $this->buku_model->getSumberBukuAll();
    $data['jenisbuku'] = $this->buku_model->getJenisBukuAll();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/buku/buku_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->buku_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('buku');
    }
  }

  public function update($where)
  {
    $data['title'] = "Perbarui Buku | SIPERPUS";
    $data['menu'] = "Buku";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-book-half";

    $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|trim');
    $this->form_validation->set_rules('penerbit', 'Penerbit', 'required|trim');
    $this->form_validation->set_rules('pengarang', 'Pengarang', 'required|trim');
    $this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|trim');

    $data['buku'] = $this->buku_model->getById($where);
    $data['ddc'] = $this->buku_model->getDdcAll();
    $data['sumberbuku'] = $this->buku_model->getSumberBukuAll();
    $data['jenisbuku'] = $this->buku_model->getJenisBukuAll();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/buku/buku_update', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->buku_model->update($where);
      $this->session->set_flashdata('success', 'Diperbarui');
      redirect('buku');
    }
  }

  public function delete($where)
  {
    $where = ['id_buku' => $this->uri->segment(4)];
    $this->buku_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('buku');
  }
}
