<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class Laporanpengunjung_model extends CI_Model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'anggota.id_anggota = pengunjung.id_anggota');
    $this->db->join('kelas', 'kelas.id_kelas = anggota.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('pengunjung.id_pengunjung', 'DESC');
    return $this->db->get()->result_array();
  }

  public function laporanPengunjungBulanan($data = null, $where = null)
  {
    $pilihan = $this->input->post('bulanan');
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'anggota.id_anggota = pengunjung.id_anggota');
    $this->db->join('kelas', 'kelas.id_kelas = anggota.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('pengunjung.id_pengunjung', 'DESC');
    $this->db->like('jam_kunjungan', $pilihan, 'after');
    return $this->db->get()->result_array();
  }

  public function laporanPengunjungTahunan($data = null, $where = null)
  {
    $pilihan = $this->input->post('tahunan');
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'anggota.id_anggota = pengunjung.id_anggota');
    $this->db->join('kelas', 'kelas.id_kelas = anggota.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('pengunjung.id_pengunjung', 'DESC');
    $this->db->like('jam_kunjungan', $pilihan, 'after');
    return $this->db->get()->result_array();
  }

  public function laporanPengunjungCustom($data = null, $where = null)
  {
    $custom_start = $this->input->post('custom_start');
    $custom_end = $this->input->post('custom_end');
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'anggota.id_anggota = pengunjung.id_anggota');
    $this->db->join('kelas', 'kelas.id_kelas = anggota.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('pengunjung.id_pengunjung', 'DESC');
    $this->db->where('jam_kunjungan >=', $custom_start);
    $this->db->where('jam_kunjungan <=', $custom_end);
    // $this->db->like('jam_kunjungan', $custom_start);
    // $this->db->like('jam_kunjungan', $custom_end);
    return $this->db->get()->result_array();
  }
}
