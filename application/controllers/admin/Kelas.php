<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Kelas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/kelas_model');
    $this->load->model('admin/login_model');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Kelas";
    $data['menu'] = "Kelas";
    $data['icon'] = "bi bi-journal-check";

    $data['kelas'] = $this->kelas_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/kelas/kelas_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function create()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Kelas";
    $data['menu'] = "Kelas";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-journal-check";

    $data['jurusan'] = $this->kelas_model->getJurusan();

    $this->form_validation->set_rules('tingkatan_kelas', 'Tingkatan Kelas', 'required|trim');
    // $this->form_validation->set_rules('nm_jenisbuku', 'Nama Jenis Buku', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/kelas/kelas_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->kelas_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('admin/kelas');
    }
  }

  public function delete($where)
  {
    $where = ['id_kelas' => $this->uri->segment(4)];
    $this->kelas_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/kelas');
  }
}
