<?php

use FontLib\Table\Type\post;

defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class Admin_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('admin')->result_array();
  }

  public function save()
  {
    $username = htmlspecialchars($this->input->post('username', true));
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->where('username', $username);
    $query = $this->db->get()->row_array();
    if (empty($query['username'])) { //jika username unik
      $data = [
        'nm_admin' => htmlspecialchars($this->input->post('nm_admin', true)),
        'username' => $username,
        'password' => htmlspecialchars(password_hash($this->input->post('password', true), PASSWORD_DEFAULT)),
        'akses' => htmlspecialchars($this->input->post('akses', true)),
      ];

      $this->db->insert('admin', $data);
    } else {
      $this->session->set_flashdata('gagal', 'sebelumnya');
      redirect('admin/admin/create');
    }
  }
}
