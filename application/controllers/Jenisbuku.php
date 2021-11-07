<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenisbuku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('jenisbuku_model');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Jenis Buku | SIPERPUS";
    $data['menu'] = "Jenis Buku";
    $data['icon'] = "bookmark-fill";

    $data['jenisbuku'] = $this->jenisbuku_model->getAll();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('jenisbuku/jenisbuku_index', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/js');
  }

  public function create()
  {
    $data['title'] = "Tambah Jenis Buku | SIPERPUS";
    $data['menu'] = "Jenis Buku";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bookmark-fill";

    $this->form_validation->set_rules('kode_jenisbuku', 'Kode Jenis Buku', 'required|trim');
    $this->form_validation->set_rules('nm_jenisbuku', 'Nama Jenis Buku', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('jenisbuku/jenisbuku_create', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/js');
    } else {
      $this->jenisbuku_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('jenisbuku');
    }
  }

  public function update($where)
  {
    $data['title'] = "Perbarui Jenis Buku | SIPERPUS";
    $data['menu'] = "Jenis Buku";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bookmark-fill";

    $this->form_validation->set_rules('kode_jenisbuku', 'Kode Jenis Buku', 'required|trim');
    $this->form_validation->set_rules('nm_jenisbuku', 'Nama Jenis Buku', 'required|trim');

    $data['jenisbuku'] = $this->jenisbuku_model->getById($where);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('jenisbuku/jenisbuku_update', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/js');
    } else {
      $this->jenisbuku_model->update($where);
      $this->session->set_flashdata('success', 'Diperbarui');
      redirect('jenisbuku');
    }
  }

  public function delete($where)
  {
    $where = ['id_jenisbuku' => $this->uri->segment(3)];
    $this->jenisbuku_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('jenisbuku');
  }
}
