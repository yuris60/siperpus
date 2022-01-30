<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

date_default_timezone_set('Asia/Jakarta');

class Dashboard_model extends CI_Model
{
  // Icon Atas
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
  // End of 4 icon atas

  // Peminjaman Terakhir
  public function getPeminjamanSemua()
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('detail_peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->join('buku', 'detail_peminjaman.id_buku = buku.id_buku');
    $this->db->join('anggota', 'anggota.nisn = peminjaman.nisn');
    $this->db->group_by('peminjaman.id_pinjam');
    $this->db->limit(10);
    $this->db->order_by('peminjaman.id_pinjam', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getPeminjamanBelumLunas()
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('detail_peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->join('buku', 'detail_peminjaman.id_buku = buku.id_buku');
    $this->db->join('anggota', 'anggota.nisn = peminjaman.nisn');
    $this->db->where('peminjaman.status', 'Belum Lunas');
    $this->db->group_by('peminjaman.id_pinjam');
    $this->db->limit(10);
    $this->db->order_by('peminjaman.id_pinjam', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getPeminjamanLunas()
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('detail_peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->join('buku', 'detail_peminjaman.id_buku = buku.id_buku');
    $this->db->join('anggota', 'anggota.nisn = peminjaman.nisn');
    $this->db->where('peminjaman.status', 'Lunas');
    $this->db->group_by('peminjaman.id_pinjam');
    $this->db->limit(10);
    $this->db->order_by('peminjaman.id_pinjam', 'DESC');
    return $this->db->get()->result_array();
  }
  // End of Peminjaman Terakhir

  // Pengunjung
  public function getJumlahPengunjungHariIniLakiLaki()
  {
    $hariini = date('Y-m-d');
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'pengunjung.nisn = anggota.nisn');
    $this->db->where('anggota.jk_anggota', 'L');
    $this->db->like('pengunjung.jam_kunjungan', $hariini, 'after');
    return $this->db->get()->num_rows();
  }

  public function getJumlahPengunjungHariIniPerempuan()
  {
    $hariini = date('Y-m-d');
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'pengunjung.nisn = anggota.nisn');
    $this->db->where('anggota.jk_anggota', 'P');
    $this->db->like('pengunjung.jam_kunjungan', $hariini, 'after');
    return $this->db->get()->num_rows();
  }

  public function getJumlahPengunjungLakiLaki()
  {
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'pengunjung.nisn = anggota.nisn');
    $this->db->where('anggota.jk_anggota', 'L');
    return $this->db->get()->num_rows();
  }

  public function getJumlahPengunjungPerempuan()
  {
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'pengunjung.nisn = anggota.nisn');
    $this->db->where('anggota.jk_anggota', 'P');
    return $this->db->get()->num_rows();
  }

  public function getPengunjung()
  {
    $this->db->select('*');
    $this->db->from('pengunjung');
    $this->db->join('anggota', 'pengunjung.nisn = anggota.nisn');
    $this->db->limit(5);
    $this->db->order_by('pengunjung.id_pengunjung', 'DESC');
    return $this->db->get()->result_array();
  }

  // End of Pengunjung

  // Peminjaman Buku
  public function getJumlahPeminjamanJanuari()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=01');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanFebruari()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=02');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanMaret()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=03');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanApril()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=04');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanMei()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=05');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanJuni()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=06');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanJuli()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=07');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanAgustus()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=08');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanSeptember()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=09');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanOktober()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=10');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanNovember()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=11');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahPeminjamanDesember()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=12');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
}
