<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('admin/beranda_model');
    // $this->load->model('admin/login_model');
    // $this->load->helper('formatrupiah_helper');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Beranda | SIPERPUS";
    $data['menu'] = "Beranda";
    $data['icon'] = "home";

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    // $this->load->view('templates/beranda', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/js');
  }
}
