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
    // Update tabel detail peminjaman (perbuku)
    $this->db->select('*');
    $this->db->from('detail_peminjaman');
    $this->db->where('id_detailpinjam', $id_detailpinjam);
    $query = $this->db->get()->row_array();
    $tgl_kembali_lama = $query['tgl_kembali'];
    $tgl_kembali_baru = date('Y-m-d H:i:s', strtotime('+7 days', strtotime($tgl_kembali_lama)));
    $this->db->set('tgl_kembali', $tgl_kembali_baru);
    $this->db->where('id_detailpinjam', $id_detailpinjam);
    $this->db->update('detail_peminjaman');

    //  Update tabel peminjaman (pertransaksi)
    $tgl_bataspinjam_baru = $tgl_kembali_baru;
    $this->db->set('tgl_bataspinjam', $tgl_bataspinjam_baru);
    $this->db->where('id_pinjam', $id_pinjam);
    $this->db->update('peminjaman');
  }

  public function kembalikanBuku($id_pinjam, $id_detailpinjam, $id_buku, $qty_pinjam, $keterlambatan)
  {

    // update tabel detail pengembalian
    $hariini = date('Y-m-d');
    $hariiniwaktu = date('Y-m-d H:i:s');
    $data = [
      'tgl_pengembalian' => $hariiniwaktu,
      'keterlambatan' => $keterlambatan,
      'status_buku' => 'Sudah Kembali',
    ];
    $this->db->where('id_detailpinjam', $id_detailpinjam);
    $this->db->update('detail_peminjaman', $data);

    // cek denda
    $dendaperhari = 3000;
    if ($keterlambatan > 0) {
      // cek table peminjaman dengan id_pinjam
      $this->db->select('*');
      $this->db->from('detail_peminjaman');
      $this->db->where('id_pinjam', $id_pinjam);
      $query = $this->db->get()->row_array();
      $denda = $query['total_denda'];

      // Hitung total denda
      $total_denda = ($dendaperhari * $keterlambatan) + $denda;
      $data = [
        'total_denda' => $total_denda,
      ];
      $this->db->where('id_pinjam', $id_pinjam);
      $this->db->update('peminjaman', $data);

      // Masukkan ke table kas
      $data = [
        'tgl_penerimaan' => $hariini,
        'sumber' => 'Denda Buku',
        'nominal' => $total_denda
      ];
      $this->db->insert('kas', $data);
    }

    // kembalikan qty buku sebelumnya
    $this->db->select('stok_buku');
    $this->db->from('buku');
    $this->db->where('id_buku', $id_buku);
    $query = $this->db->get()->row_array();
    $stoklama = $query['stok_buku'];
    $stokbaru = $stoklama + $qty_pinjam;
    $this->db->set('stok_buku', $stokbaru);
    $this->db->where('id_buku', $id_buku);
    $this->db->update('buku');

    $this->db->select('*');
    $this->db->from('detail_peminjaman');
    $this->db->where('id_pinjam', $id_pinjam);
    $this->db->where('status_buku', 'Belum Kembali');
    $query2 = $this->db->get();

    if ($query2->num_rows() == 0) { //jika buku sudah kembali semua
      $this->db->set('status', 'Lunas');
      $this->db->where('id_pinjam', $id_pinjam);
      $this->db->update('peminjaman');
    }
  }
}
