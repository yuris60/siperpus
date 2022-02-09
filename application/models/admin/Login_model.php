<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

class Login_model extends CI_Model
{
  public function login()
  {
    //tangkap dan inisiasi form yg dikirim dari menu login
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    //panggil data admin
    $admin = $this->db->get_where('admin', ['username' => $username])->row_array(); //SELECT * FROM admin WHERE username=$username

    if ($admin) { //jika data admin ada maka
      if (password_verify($password, $admin['password'])) { //jika password benar maka
        $data = [
          'username' => $admin['username']
        ];
        $this->session->set_userdata($data); //simpan SESSION admin
        $this->session->set_flashdata('success', '!'); //membuat alert selamat datang
        redirect('admin/dashboard');
      }
    } else {
      $this->session->set_flashdata('gagallogin', 'Ditemukan');
      redirect('admin/login');
    }
  }

  public function getSession()
  {
    return $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
  }

  public function logout()
  {
    $this->session->unset_userdata('nm_admin');
    $this->session->unset_userdata('username');

    $this->session->set_flashdata('flash-logout', 'Terimakasih');
    redirect('admin/login');
  }
}
