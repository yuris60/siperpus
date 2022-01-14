<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

class Jurusan_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('jurusan')->result_array();
  }
}
