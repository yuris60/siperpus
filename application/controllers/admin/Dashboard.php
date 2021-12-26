<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tglindo');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Dashboard | SIPERPUS";
    $data['menu'] = "Dashboard";
    $data['icon'] = "bi bi-house-door-fill";

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }
}
