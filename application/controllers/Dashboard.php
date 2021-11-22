<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tglindo');
    $this->load->helper('waktulalu');
    $this->load->model('dashboard_model');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Beranda | SIPERPUS";
    $data['menu'] = "Beranda";
    $data['icon'] = "home";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/topbar');
    $this->load->view('templates/navbar');
    $this->load->view('dashboard', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/js');
  }

  public function absenpengunjung()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Absen Pengunjung | SIPERPUS";
    $data['menu'] = "Absen Pengunjung";
    $data['icon'] = "home";

    $data['pengunjung'] = $this->dashboard_model->getPengunjung();

    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/navbar');
      $this->load->view('absen_pengunjung', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/js');
    } else {
      $this->dashboard_model->save();
      $this->session->set_flashdata('success', 'Disimpan');
      redirect('dashboard/absenpengunjung');
    }
  }

  public function koleksibuku()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Koleksi Buku | SIPERPUS";
    $data['menu'] = "Koleksi Buku";
    $data['icon'] = "bi bi-bool-fill";

    $data['pengunjung'] = $this->dashboard_model->getPengunjung();

    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/topbar');
      $this->load->view('templates/navbar');
      $this->load->view('koleksi_buku', $data);
      $this->load->view('templates/footer');
      $this->load->view('templates/js');
    } else {
      $this->dashboard_model->savePengunjung();
      $this->session->set_flashdata('success', 'Disimpan');
      redirect('dashboard/absenpengunjung');
    }
  }
}
