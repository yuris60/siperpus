<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotFound404 extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('errors/error-404');
    // $this->output->set_status_header('404');
    // $this->template->render('error-404', array());
  }
}
