<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

date_default_timezone_set('Asia/Jakarta');

class Buku_model extends CI_Model
{

  public function getAll()
  {
    return $this->db->get('buku')->result_array();
  }

  public function countAllBuku()
  {
    return $this->db->get('buku')->num_rows();
  }

  public function getJoin2($limit, $offset)
  {
    $this->db->select('*');
    $this->db->from('buku');
    $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
    $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
    $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
    $this->db->join('kategori_buku', 'buku.id_kategoribuku = kategori_buku.id_kategoribuku');
    $this->db->order_by('judul_buku', 'ASC');
    $this->db->limit($limit, $offset);
    return $this->db->get()->result_array();
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

  public function getBukuTerfavorit()
  {
    $sql = "SELECT buku.gambar_buku, buku.rak_buku, klasifikasi_ddc.kode_ddc, buku.thn_terbit, buku.isbn, buku.stok_buku, buku.penerbit, klasifikasi_ddc.kategori_ddc, kategori_buku.nm_kategoribuku, buku.id_buku, buku.judul_buku, buku.pengarang, (
      Select SUM(detail_peminjaman.qty_pinjam)
      FROM detail_peminjaman
      JOIN peminjaman ON detail_peminjaman.id_pinjam = peminjaman.id_pinjam
      WHERE detail_peminjaman.id_buku = buku.id_buku
      ) as qty_pinjam
        FROM buku
        JOIN klasifikasi_ddc ON buku.id_ddc = klasifikasi_ddc.id_ddc
        JOIN kategori_buku ON buku.id_kategoribuku = kategori_buku.id_kategoribuku
        LEFT JOIN detail_peminjaman USING(id_buku)
        GROUP BY id_buku
        ORDER BY qty_pinjam DESC
        LIMIT 10";
    return $topbuku = $this->db->query($sql)->result_array();
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

  function getRows($params = array())
  {
    $this->db->select('*');
    $this->db->from("buku");
    $this->db->join('sumber_buku', 'buku.id_sumberbuku = sumber_buku.id_sumberbuku');
    $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
    $this->db->join('jenis_buku', 'buku.id_jenisbuku = jenis_buku.id_jenisbuku');
    $this->db->join('kategori_buku', 'buku.id_kategoribuku = kategori_buku.id_kategoribuku');

    if (array_key_exists("where", $params)) {
      foreach ($params['where'] as $key => $val) {
        $this->db->where($key, $val);
      }
    }

    if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
      $result = $this->db->count_all_results();
    } else {
      if (array_key_exists("id_buku", $params) || (array_key_exists("returnType", $params) && $params['returnType'] == 'single')) {
        if (!empty($params['id_buku'])) {
          $this->db->where('id_buku', $params['id_buku']);
        }
        $query = $this->db->get();
        $result = $query->row_array();
      } else {
        $this->db->order_by('id_buku', 'desc');
        if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
          $this->db->limit($params['limit'], $params['start']);
        } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
          $this->db->limit($params['limit']);
        }

        $query = $this->db->get();
        $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
      }
    }

    // Return fetched data 
    return $result;
  }
}
