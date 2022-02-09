<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sumberbuku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/sumberbuku_model');
    $this->load->model('admin/login_model');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Sumber Buku";
    $data['menu'] = "Sumber Buku";
    $data['icon'] = "bi bi-journals";

    $data['sumberbuku'] = $this->sumberbuku_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/sumberbuku/sumberbuku_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function create()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Tambah Sumber Buku";
    $data['menu'] = "Sumber Buku";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-journals";

    $this->form_validation->set_rules('kode_sumberbuku', 'Kode Sumber Buku', 'required|trim');
    $this->form_validation->set_rules('nm_sumberbuku', 'Nama Sumber Buku', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/sumberbuku/sumberbuku_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->sumberbuku_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('admin/sumberbuku');
    }
  }

  public function update($where)
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Perbarui Sumber Buku";
    $data['menu'] = "Sumber Buku";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-journals";

    $this->form_validation->set_rules('kode_sumberbuku', 'Kode Sumber Buku', 'required|trim');
    $this->form_validation->set_rules('nm_sumberbuku', 'Nama Sumber Buku', 'required|trim');

    $data['sumberbuku'] = $this->sumberbuku_model->getById($where);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/sumberbuku/sumberbuku_update', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->sumberbuku_model->update($where);
      $this->session->set_flashdata('success', 'Diperbarui');
      redirect('admin/sumberbuku');
    }
  }

  public function delete($where)
  {
    $where = ['id_sumberbuku' => $this->uri->segment(3)];
    $this->sumberbuku_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/sumberbuku');
  }
}
