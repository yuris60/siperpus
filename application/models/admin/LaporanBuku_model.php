<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class laporanbuku_model extends CI_Model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->order_by('id_buku', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getAllJoin()
  {
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
    // $this->db->limit(190);
    $this->db->order_by('id_buku', 'DESC');
    return $this->db->get()->result_array();
  }

  public function cetakLabelBukuByID()
  {
    $checkbox = $_POST['cid_buku'];
    foreach ($checkbox as $i) {
      // $query = $this->db->get_where('buku', ["id_buku" => $i]);
      $this->db->select('*');
      $this->db->from('buku');
      $this->db->where('id_buku', $i);
      $query = $this->db->get()->row_array();
      $data = array($query);
      echo $data;
    }
    return $data;
  }
}
