<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class Admin_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('admin')->result_array();
  }
}
