<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

date_default_timezone_set('Asia/Jakarta');

class Pengembalian_model extends CI_Model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'peminjaman.nisn = anggota.nisn');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan');
    $this->db->order_by('peminjaman.tgl_pinjam', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getBukuAll()
  {
    return $this->db->get('buku')->result_array();
  }

  public function getAnggotaByID($where)
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'peminjaman.nisn = anggota.nisn');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan');
    $this->db->where('peminjaman.id_pinjam', $where);
    return $this->db->get()->row_array();
  }

  public function getDetailPeminjaman($where)
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('detail_peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->join('buku', 'detail_peminjaman.id_buku = buku.id_buku');
    $this->db->where('peminjaman.id_pinjam', $where);
    return $this->db->get()->result_array();
  }

  public function perpanjangPeminjaman($id_pinjam, $id_detailpinjam)
  {
    $this->db->select('*');
    $this->db->from('detail_peminjaman');
    $this->db->where('id_detailpinjam', $id_detailpinjam);
    $query = $this->db->get()->row_array();

    $tgl_kembali_lama = $query['tgl_kembali'];
    $tgl_kembali_baru = date('Y-m-d H:i:s', strtotime('+7 days', strtotime($tgl_kembali_lama)));

    $this->db->set('tgl_kembali', $tgl_kembali_baru);
    $this->db->where('id_detailpinjam', $id_detailpinjam);
    $this->db->update('detail_peminjaman');
  }

  public function kembalikanBuku($id_pinjam, $id_detailpinjam, $keterlambatan)
  {
    $hariini = date('Y-m-d H:i:s');
    $data = [
      'tgl_pengembalian' => $hariini,
      'keterlambatan' => $keterlambatan,
      'status_buku' => 'Sudah Kembali',
    ];
    $this->db->where('id_detailpinjam', $id_detailpinjam);
    $this->db->update('detail_peminjaman', $data);

    $this->db->select('*');
    $this->db->from('detail_peminjaman');
    $this->db->where('id_pinjam', $id_pinjam);
    $this->db->where('status_buku', 'Belum Kembali');
    $query = $this->db->get();

    if ($query->num_rows() == 0) { //jika terdaftar, maka simpan
      $this->db->set('status', 'Lunas');
      $this->db->where('id_pinjam', $id_pinjam);
      $this->db->update('peminjaman');
    }
  }
}
