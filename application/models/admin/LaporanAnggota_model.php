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

  public function getAllByID($where)
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->where('anggota.nisn', $where);
    return $this->db->get()->result_array();
  }

  public function getAllByKelas($kelas)
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->where('kelas.id_kelas', $kelas);
    $this->db->order_by('anggota.nm_anggota', 'ASC');
    return $this->db->get()->result_array();
  }

  public function getAllByAngkatan($angkatan)
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->where('kelas.tingkatan_kelas', $angkatan);
    $this->db->order_by('anggota.id_kelas', 'ASC');
    $this->db->order_by('anggota.nm_anggota', 'ASC');
    return $this->db->get()->result_array();
  }

  public function getAllKelas()
  {
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('kelas.id_kelas', 'ASC');
    return $this->db->get()->result_array();
  }
}
