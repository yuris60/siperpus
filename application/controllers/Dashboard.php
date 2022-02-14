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

    $data['jumlahanggota'] = $this->dashboard_model->getJumlahAnggota();
    $data['jumlahjudulbuku'] = $this->dashboard_model->getJumlahJudulBuku();
    $data['jumlaheksemplarbuku'] = $this->dashboard_model->getEksemplarBuku();
    $data['jumlahadmin'] = $this->dashboard_model->getJumlahAdmin();

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel');
    $this->load->view('user/dashboard', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function absenpengunjung()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Absen Pengunjung | SIPERPUS";
    $data['menu'] = "Absen Pengunjung";
    $data['icon'] = "home";

    $data['pengunjung'] = $this->dashboard_model->getPengunjung();
    $data['anggota'] = $this->dashboard_model->getAnggotaAll();

    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('user/templates/header', $data);
      $this->load->view('user/templates/navbar');
      $this->load->view('user/templates/carousel2');
      $this->load->view('user/absen_pengunjung', $data);
      $this->load->view('user/templates/footer');
      $this->load->view('user/templates/js_scan');
    } else {
      $this->dashboard_model->savePengunjung();
    }
  }

  public function absenPengunjungManual($where)
  {
    $where = $this->uri->segment(3);
    $this->dashboard_model->savePengunjungManual($where);
    $this->session->set_flashdata('success', 'Disimpan');
    redirect('dashboard/absenpengunjung');
  }
}
