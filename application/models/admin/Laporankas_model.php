<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class Laporankas_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('kas')->result_array();
  }

  public function laporanKasBulanan($data = null, $where = null)
  {
    $pilihan = $this->input->post('bulanan');
    $this->db->select('*');
    $this->db->from('kas');
    $this->db->like('tgl_penerimaan', $pilihan, 'after');
    return $this->db->get()->result_array();
  }

  public function laporanKasTahunan($data = null, $where = null)
  {
    $pilihan = $this->input->post('tahunan');
    $this->db->select('*');
    $this->db->from('kas');
    $this->db->like('tgl_penerimaan', $pilihan, 'after');
    return $this->db->get()->result_array();
  }

  public function laporanKasCustom($data = null, $where = null)
  {
    $custom_start = $this->input->post('custom_start');
    $custom_end = $this->input->post('custom_end');
    $this->db->select('*');
    $this->db->from('kas');
    $this->db->where('tgl_penerimaan >=', $custom_start);
    $this->db->where('tgl_penerimaan <=', $custom_end);
    // $this->db->like('jam_kunjungan', $custom_start);
    // $this->db->like('jam_kunjungan', $custom_end);
    return $this->db->get()->result_array();
  }
}
