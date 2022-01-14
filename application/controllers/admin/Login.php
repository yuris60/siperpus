<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/login_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('username')) { //jika sudah login (ada session) maka
      redirect('admin/dashboard');
    }

    //membuat rules di controller login
    $this->form_validation->set_rules('username', 'Username', 'trim|required', [ //ini rules untuk email
      'required' => 'Username harus diisi',
    ]);
    $this->form_validation->set_rules('password', 'Password', 'trim|required', [ //ini rules untuk password
      'required' => 'Password harus diisi'
    ]);

    if ($this->form_validation->run() == FALSE) { //jika form validation belum ada aksi dari admin, maka tampilkan menu login
      $this->load->view("admin/login/login_index");
      // $this->load->view("admin/login");
      // $this->load->view("admin/templates/login/footer");
    } else { //jika form_validation sudah dijalankan oleh admin, maka jalankan function login di model yg bernama login_model
      $this->login_model->login();
    }
  }

  public function logout()
  {
    $this->login_model->logout();
    $this->session->set_flashdata('flash', 'Terimakasih');
  }
}
