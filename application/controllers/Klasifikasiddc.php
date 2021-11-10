<?php
defined('BASEPATH') or exit('No direct script access allowed');

class klasifikasiddc extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('klasifikasiddc_model');
    $this->load->helper('tglindo');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Klasifikasi DDC | SIPERPUS";
    $data['menu'] = "Klasifikasi DDC";
    $data['icon'] = "bi bi-list-ol";

    $data['klasifikasiddc'] = $this->klasifikasiddc_model->getAll();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('klasifikasiddc/klasifikasiddc_index', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/js');
  }

  public function create()
  {
    $data['title'] = "Tambah Klasifikasi DDC | SIPERPUS";
    $data['menu'] = "Klasifikasi DDC";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-list-ol";

    $this->form_validation->set_rules('kode_ddc', 'Kode Klasifikasi DDC', 'required|trim');
    $this->form_validation->set_rules('kategori_ddc', 'Kategori Klasifikasi DDC', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar');
      $this->load->view('klasifikasiddc/klasifikasiddc_create', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/js');
    } else {
      $this->klasifikasiddc_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('klasifikasiddc');
    }
  }

  public function update($where)
  {
    $data['title'] = "Perbarui Klasifikasi DDC | SIPERPUS";
    $data['menu'] = "Klasifikasi DDC";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-list-ol";

    $this->form_validation->set_rules('kode_ddc', 'Kode Klasifikasi DDC', 'required|trim');
    $this->form_validation->set_rules('kategori_ddc', 'Kategori Klasifikasi DDC', 'required|trim');

    $data['klasifikasiddc'] = $this->klasifikasiddc_model->getById($where);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar');
      $this->load->view('templates/topbar');
      $this->load->view('klasifikasiddc/klasifikasiddc_update', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/js');
    } else {
      $this->klasifikasiddc_model->update($where);
      $this->session->set_flashdata('success', 'Diperbarui');
      redirect('klasifikasiddc');
    }
  }

  public function delete($where)
  {
    $where = ['id_ddc' => $this->uri->segment(3)];
    $this->klasifikasiddc_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('klasifikasiddc');
  }
}
