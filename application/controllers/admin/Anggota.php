<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/anggota_model');
    $this->load->helper('tglindo');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Anggota | SIPERPUS";
    $data['menu'] = "Anggota";
    $data['icon'] = "bi bi-book-half";

    $data['anggota'] = $this->anggota_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/anggota/anggota_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function create()
  {
    $data['title'] = "Tambah Anggota | SIPERPUS";
    $data['menu'] = "Anggota";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-book-half";

    // $this->form_validation->set_rules('kode_anggota', 'Kode anggota', 'required|trim');
    // $this->form_validation->set_rules('nm_anggota', 'Nama anggota', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/anggota/anggota_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->anggota_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('anggota');
    }
  }

  public function update($where)
  {
    $data['title'] = "Perbarui Anggota | SIPERPUS";
    $data['menu'] = "Anggota";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-book-half";

    // $this->form_validation->set_rules('judul_anggota', 'Judul anggota', 'required|trim');
    // $this->form_validation->set_rules('penerbit', 'Penerbit', 'required|trim');
    // $this->form_validation->set_rules('pengarang', 'Pengarang', 'required|trim');
    // $this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/anggota/anggota_update', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->anggota_model->update($where);
      $this->session->set_flashdata('success', 'Diperbarui');
      redirect('anggota');
    }
  }

  public function delete($where)
  {
    $where = ['id_anggota' => $this->uri->segment(4)];
    $this->anggota_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('anggota');
  }
}
