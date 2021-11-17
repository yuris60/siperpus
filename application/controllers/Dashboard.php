<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
    $data['title'] = "Beranda | SIPERPUS";
    $data['menu'] = "Beranda";
    $data['icon'] = "home";

    $this->load->view('templates/header');
    $this->load->view('templates/topbar');
    $this->load->view('templates/navbar');
    $this->load->view('dashboard', $data);
    $this->load->view('templates/footer');
    $this->load->view('templates/js');
  }
}
