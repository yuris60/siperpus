<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Jurusan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/jurusan_model');
    $this->load->model('admin/login_model');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Jurusan";
    $data['menu'] = "Jurusan";
    $data['icon'] = "bi bi-journal-bookmark";

    $data['jurusan'] = $this->jurusan_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/jurusan/jurusan_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }
}
