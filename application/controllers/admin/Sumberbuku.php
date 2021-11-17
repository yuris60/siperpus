<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sumberbuku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/sumberbuku_model');
    $this->load->helper('tglindo');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Sumber Buku | SIPERPUS";
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
    $data['title'] = "Tambah Sumber Buku | SIPERPUS";
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
      redirect('sumberbuku');
    }
  }

  public function update($where)
  {
    $data['title'] = "Perbarui Sumber Buku | SIPERPUS";
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
      redirect('sumberbuku');
    }
  }

  public function delete($where)
  {
    $where = ['id_sumberbuku' => $this->uri->segment(3)];
    $this->sumberbuku_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('sumberbuku');
  }

  public function scan()
  {
    $data['title'] = "Perbarui Sumber Buku | SIPERPUS";
    $data['menu'] = "Sumber Buku";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-journals";

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/sumberbuku/sumberbuku_scan', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js_scan');
  }

  public function getscan()
  {
    echo json_encode($this->sumberbuku_model->getById($_POST['id']));
    // echo $_POST['id'];
  }
}
