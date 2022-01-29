<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function saranaprasarana()
  {
    $data['title'] = "Sarana Prasarana | SIPERPUS";
    $data['menu'] = "Sarana Prasarana";
    $data['icon'] = "home";

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/tentang/tentang_saranaprasarana', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function visimisi()
  {
    $data['title'] = "Visi Misi | SIPERPUS";
    $data['menu'] = "Visi Misi";
    $data['icon'] = "home";

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/tentang/tentang_visimisi', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }

  public function sejarah()
  {
    $data['title'] = "Visi Misi | SIPERPUS";
    $data['menu'] = "Visi Misi";
    $data['icon'] = "home";

    $this->load->view('user/templates/header', $data);
    $this->load->view('user/templates/navbar');
    $this->load->view('user/templates/carousel2');
    $this->load->view('user/tentang/tentang_sejarah', $data);
    $this->load->view('user/templates/footer');
    $this->load->view('user/templates/js');
  }
}
