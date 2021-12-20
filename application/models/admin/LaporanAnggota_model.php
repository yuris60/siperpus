<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class Laporananggota_model extends CI_Model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('anggota.id_kelas', 'ASC');
    $this->db->order_by('anggota.nm_anggota', 'ASC');
    return $this->db->get()->result_array();
  }
}
