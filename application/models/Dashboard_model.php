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
    $this->db->join('anggota', 'pengunjung.id_anggota = anggota.id_anggota');
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

  public function getAnggotaAll()
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('anggota.id_kelas', 'ASC');
    $this->db->order_by('anggota.nm_anggota', 'ASC');
    return $this->db->get()->result_array();
  }

  public function savePengunjung()
  {
    $id_anggota = htmlspecialchars($this->input->post('id_anggota', true));
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->where('anggota.id_anggota', $id_anggota);
    $query = $this->db->get()->row_array();

    if ($query['id_anggota'] == $id_anggota) {
      $jam = date("Y-m-d H:i:s");
      $data = [
        'id_anggota' => $id_anggota,
        'jam_kunjungan' => $jam
      ];

      $this->db->insert('pengunjung', $data);
      $this->session->set_flashdata('success', 'Disimpan');
      redirect('dashboard/absenpengunjung');
    } else {
      $this->session->set_flashdata('gagallogin', 'Ditemukan');
      redirect('dashboard/absenpengunjung');
    }
  }

  public function savePengunjungManual($where)
  {
    $jam = date("Y-m-d H:i:s");
    $data = [
      'id_anggota' => $where,
      'jam_kunjungan' => $jam
    ];

    $this->db->insert('pengunjung', $data);

    // echo $this->input->post('id_anggota', true);
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

  public function getJumlahAnggota()
  {
    $this->db->select('*');
    $this->db->from('anggota');
    return $this->db->get()->num_rows();
  }

  public function getJumlahJudulBuku()
  {
    $this->db->select('*');
    $this->db->from('buku');
    return $this->db->get()->num_rows();
  }

  public function getEksemplarBuku()
  {
    $this->db->select_sum('jml_eksemplar');
    $result = $this->db->get('buku')->row();
    return $result->jml_eksemplar;
  }

  public function getJumlahAdmin()
  {
    $this->db->select('*');
    $this->db->from('admin');
    return $this->db->get()->num_rows();
  }
}
