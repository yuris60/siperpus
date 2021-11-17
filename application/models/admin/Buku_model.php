<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class buku_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('buku')->result_array();
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

  public function save()
  {
    $data = [
      'kode_buku' => htmlspecialchars($this->input->post('kode_buku', true)),
      'nm_buku' => htmlspecialchars($this->input->post('nm_buku', true)),
    ];

    $this->db->insert('buku', $data);
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
