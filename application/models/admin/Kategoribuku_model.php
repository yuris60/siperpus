<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class kategoribuku_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('kategori_buku')->result_array();
  }

  public function getById($where)
  {
    return $this->db->get_where('kategori_buku', ["id_kategoribuku" => $where])->row_array();
  }

  public function save()
  {
    $data = [
      'nm_kategoribuku' => htmlspecialchars($this->input->post('nm_kategoribuku', true)),
    ];

    $this->db->insert('kategori_buku', $data);
  }

  public function update($where = null)
  {
    $data = [
      // 'id_kategoribuku' => htmlspecialchars($this->input->post('id_kategoribuku', true)),
      'nm_kategoribuku' => htmlspecialchars($this->input->post('nm_kategoribuku', true)),
    ];

    $this->db->where('id_kategoribuku', $where);
    $this->db->update('kategori_buku', $data);
  }

  public function delete($where)
  {
    $this->db->delete('kategori_buku', $where);
  }
}
