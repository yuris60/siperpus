<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

date_default_timezone_set('Asia/Jakarta');

class Dashboard_model extends CI_Model
{
  public function getPengunjung()
  {
    $hariini = date('Y-m-d');
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'pengunjung.nisn = anggota.nisn');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan');
    $this->db->like('pengunjung.jam_kunjungan', $hariini, 'after');
    $this->db->order_by('pengunjung.jam_kunjungan', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getBukuAll()
  {
    return $this->db->get('buku')->result_array();
  }

  public function savePengunjung()
  {
    $jam = date("Y-m-d H:i:s");
    $data = [
      'nisn' => htmlspecialchars($this->input->post('nisn', true)),
      'jam_kunjungan' => $jam
    ];

    $this->db->insert('pengunjung', $data);

    // echo $this->input->post('nisn', true);
  }

  public function getBuku()
  {
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
    $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
    $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
    $this->db->order_by('buku.id_buku', 'DESC');
    return $this->db->get()->result_array();
  }
}
