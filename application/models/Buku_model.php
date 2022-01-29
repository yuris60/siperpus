<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

date_default_timezone_set('Asia/Jakarta');

class Buku_model extends CI_Model
{

  public function getAll()
  {
    return $this->db->get('buku')->result_array();
  }

  public function getJoin()
  {
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
    $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
    $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
    $this->db->join('kategori_buku', 'buku.id_kategoribuku = kategori_buku.id_kategoribuku');
    $this->db->order_by('judul_buku', 'ASC');
    return $this->db->get()->result_array();
  }

  public function getCari($katakunci, $pilihan)
  {
    if ($katakunci == "") { //jika tidak pilih berdasarkan
      $this->db->select('*');
      $this->db->from('buku');
      $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
      $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
      $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
      $this->db->join('kategori_buku', 'buku.id_kategoribuku = kategori_buku.id_kategoribuku');
      $this->db->like($pilihan, $katakunci, 'both');
      $this->db->order_by('judul_buku', 'ASC');
      return $this->db->get()->result_array();
    } else {
      $this->db->select('*');
      $this->db->from('buku');
      $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
      $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
      $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
      $this->db->join('kategori_buku', 'buku.id_kategoribuku = kategori_buku.id_kategoribuku');
      $this->db->like('judul_buku', $katakunci, 'both');
      $this->db->or_like('pengarang', $katakunci, 'both');
      $this->db->or_like('penerbit', $katakunci, 'both');
      $this->db->order_by('judul_buku', 'ASC');
      return $this->db->get()->result_array();
    }
  }

  public function getBukuTerbaru()
  {
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
    $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
    $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
    $this->db->join('kategori_buku', 'buku.id_kategoribuku = kategori_buku.id_kategoribuku');
    $this->db->limit(15);
    $this->db->order_by('buku.id_buku', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getBukuKategori($where)
  {
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
    $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
    $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
    $this->db->join('kategori_buku', 'buku.id_kategoribuku = kategori_buku.id_kategoribuku');
    $this->db->where('buku.id_kategoribuku', $where);
    $this->db->order_by('judul_buku', 'ASC');
    return $this->db->get()->result_array();
  }

  public function count_all()
  {

    $query = $this->db->get('buku');
    return $query->num_rows();
  }

  public function getPagination($limit, $offset)
  {
    // $query = $this->db->get('buku', $limit, $start);
    // return $query;
    $this->db->select("*");
    $this->db->from('buku');
    $this->db->limit($limit, $offset);
    $query = $this->db->get();
    return $query->result();
  }
}
