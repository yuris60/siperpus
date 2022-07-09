<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class buku_model extends CI_Model
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

  public function getById($where)
  {
    return $this->db->get_where('buku', ["id_buku" => $where])->row_array();
  }

  public function getDdcAll()
  {
    $this->db->select('*');
    $this->db->from('klasifikasi_ddc');
    $this->db->order_by('kode_ddc', 'ASC');

    return $this->db->get()->result_array();
  }

  public function getSumberBukuAll()
  {
    return $this->db->get('sumber_buku')->result_array();
  }

  public function getJenisBukuAll()
  {
    return $this->db->get('jenis_buku')->result_array();
  }

  public function getKategoriBukuAll()
  {
    return $this->db->get('kategori_buku')->result_array();
  }

  public function save($filesimpan)
  {
    $data = [
      'id_buku' => htmlspecialchars($this->input->post('id_buku', true)),
      'id_ddc' => htmlspecialchars($this->input->post('id_ddc', true)),
      'id_jenisbuku' => htmlspecialchars($this->input->post('id_jenisbuku', true)),
      'id_sumberbuku' => htmlspecialchars($this->input->post('id_sumberbuku', true)),
      'id_kategoribuku' => htmlspecialchars($this->input->post('id_kategoribuku', true)),
      'judul_buku' => htmlspecialchars($this->input->post('judul_buku', true)),
      'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
      'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
      'isbn' => htmlspecialchars($this->input->post('isbn', true)),
      'thn_terbit' => htmlspecialchars($this->input->post('thn_terbit', true)),
      'tinggi_buku' => htmlspecialchars($this->input->post('tinggi_buku', true)),
      'tgl_penerimaan' => htmlspecialchars($this->input->post('tgl_penerimaan', true)),
      'buku_kelas' => htmlspecialchars($this->input->post('buku_kelas', true)),
      'jml_halaman' => htmlspecialchars($this->input->post('jml_halaman', true)),
      'jml_eksemplar' => htmlspecialchars($this->input->post('jml_eksemplar', true)),
      'stok_buku' => htmlspecialchars($this->input->post('stok_buku', true)),
      'rak_buku' => htmlspecialchars($this->input->post('rak_buku', true)),
      'gambar_buku' => $filesimpan
    ];

    $this->db->insert('buku', $data);
  }

  public function autonumber()
  {
    $this->db->select('RIGHT(id_buku,5) as id_buku', FALSE);
    $this->db->order_by('id_buku', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('buku');      //cek dulu apakah ada sudah ada kode di tabel.    
    if ($query->num_rows() <> 0) {
      //jika kode ternyata sudah ada.      
      $data = $query->row();
      $kode = intval($data->id_buku) + 1;
    } else {
      //jika kode belum ada      
      $kode = 1;
    }

    $kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
    $kodejadi = "B" . $kodemax;
    return $kodejadi;
  }

  public function update($where = null)
  {
    $data = [
      'id_ddc' => htmlspecialchars($this->input->post('id_ddc', true)),
      'id_jenisbuku' => htmlspecialchars($this->input->post('id_jenisbuku', true)),
      'id_sumberbuku' => htmlspecialchars($this->input->post('id_sumberbuku', true)),
      'judul_buku' => htmlspecialchars($this->input->post('judul_buku', true)),
      'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
      'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
      'isbn' => htmlspecialchars($this->input->post('isbn', true)),
      'thn_terbit' => htmlspecialchars($this->input->post('thn_terbit', true)),
      'tinggi_buku' => htmlspecialchars($this->input->post('tinggi_buku', true)),
      'tgl_penerimaan' => htmlspecialchars($this->input->post('tgl_penerimaan', true)),
      'jml_halaman' => htmlspecialchars($this->input->post('jml_halaman', true)),
      'jml_eksemplar' => htmlspecialchars($this->input->post('jml_eksemplar', true)),
      'stok_buku' => htmlspecialchars($this->input->post('stok_buku', true)),
      'rak_buku' => htmlspecialchars($this->input->post('rak_buku', true)),
    ];

    $this->db->where('id_buku', $where);
    $this->db->update('buku', $data);
  }

  public function delete($where)
  {
    $this->db->delete('buku', $where);
  }
}
