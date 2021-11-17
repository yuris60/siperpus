<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class jenisbuku_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('jenis_buku')->result_array();
  }

  public function getById($where)
  {
    return $this->db->get_where('jenis_buku', ["id_jenisbuku" => $where])->row_array();
  }

  public function save()
  {
    $data = [
      'kode_jenisbuku' => htmlspecialchars($this->input->post('kode_jenisbuku', true)),
      'nm_jenisbuku' => htmlspecialchars($this->input->post('nm_jenisbuku', true)),
    ];

    $this->db->insert('jenis_buku', $data);
  }

  public function update($where = null)
  {
    $data = [
      // 'id_jenisbuku' => htmlspecialchars($this->input->post('id_jenisbuku', true)),
      'kode_jenisbuku' => htmlspecialchars($this->input->post('kode_jenisbuku', true)),
      'nm_jenisbuku' => htmlspecialchars($this->input->post('nm_jenisbuku', true)),
    ];

    $this->db->where('id_jenisbuku', $where);
    $this->db->update('jenis_buku', $data);
  }

  public function delete($where)
  {
    $this->db->delete('jenis_buku', $where);
  }
}
