<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/admin_model');
    $this->load->model('admin/login_model');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Admin | SIPERPUS";
    $data['menu'] = "Admin";
    $data['icon'] = "bi bi-person-badge";

    $data['admin2'] = $this->admin_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/admin/admin_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }
}
