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
    $this->db->limit(5);
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
    $this->db->limit(5);
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
    $this->db->limit(5);
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
  // Qty
  public function getJumlahQtyJanuari()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=01');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyFebruari()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=02');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyMaret()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=03');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyApril()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=04');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyMei()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=05');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyJuni()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=06');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyJuli()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=07');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyAgustus()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=08');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtySeptember()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=09');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyOktober()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=10');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }
  public function getJumlahQtyNovember()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=11');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }

  public function getJumlahQtyDesember()
  {
    $tahun = date('Y');
    $this->db->select_sum('detail_peminjaman.qty_pinjam');
    $this->db->join('peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=12');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    $this->db->group_by('detail_peminjaman.id_detailpinjam');
    return $query = $this->db->get('detail_peminjaman')->row();
  }

  // Peminjaman
  public function getJumlahPeminjamanJanuari()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=01');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanFebruari()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=02');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanMaret()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=03');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanApril()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=04');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanMei()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=05');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanJuni()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=06');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanJuli()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=07');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanAgustus()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=08');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanSeptember()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=09');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanOktober()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=10');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanNovember()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=11');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  public function getJumlahPeminjamanDesember()
  {
    $tahun = date('Y');
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->where('MONTH(peminjaman.tgl_pinjam)=12');
    $this->db->where('YEAR(peminjaman.tgl_pinjam)=', $tahun);
    return $this->db->get()->num_rows();
  }

  // Kas
  public function getJumlahKasJanuari()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=01');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasFebruari()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=02');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasMaret()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=03');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasApril()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=04');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasMei()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=05');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasJuni()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=06');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasJuli()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=07');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasAgustus()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=08');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasSeptember()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=09');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasOktober()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=10');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasNovember()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=11');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  public function getJumlahKasDesember()
  {
    $tahun = date('Y');
    $this->db->select_sum('nominal');
    $this->db->where('MONTH(kas.tgl_penerimaan)=12');
    $this->db->where('YEAR(kas.tgl_penerimaan)=', $tahun);
    return $query = $this->db->get('kas')->row();
  }

  // Buku Terfavorit
  public function getBukuTerfavorit()
  {
    // $this->db->select('*');
    // $this->db->from('peminjaman');
    // $this->db->join('detail_peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    // $this->db->join('buku', 'detail_peminjaman.id_buku = buku.id_buku');
    // $this->db->group_by('detail_peminjaman.id_buku');
    // return $this->db->get()->result_array();

    $sql = "SELECT buku.gambar_buku, buku.id_buku, buku.judul_buku, buku.pengarang, (
      Select SUM(detail_peminjaman.qty_pinjam)
      FROM detail_peminjaman
      JOIN peminjaman ON detail_peminjaman.id_pinjam = peminjaman.id_pinjam
      WHERE detail_peminjaman.id_buku = buku.id_buku
      ) as qty_pinjam
        FROM buku
        LEFT JOIN detail_peminjaman USING(id_buku)
        GROUP BY id_buku
        ORDER BY qty_pinjam DESC
        LIMIT 5";
    return $topbuku = $this->db->query($sql)->result_array();
  }
}
