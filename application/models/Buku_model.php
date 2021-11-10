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
      // 'id_buku' => htmlspecialchars($this->input->post('id_buku', true)),
      'kode_buku' => htmlspecialchars($this->input->post('kode_buku', true)),
      'nm_buku' => htmlspecialchars($this->input->post('nm_jenisbuku', true)),
    ];

    $this->db->where('id_jenisbuku', $where);
    $this->db->update('buku', $data);
  }

  public function delete($where)
  {
    $this->db->delete('buku', $where);
  }
}
