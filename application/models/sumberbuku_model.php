<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class sumberbuku_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('sumber_buku')->result_array();
  }

  public function getById($where)
  {
    return $this->db->get_where('sumber_buku', ["id_sumberbuku" => $where])->row_array();
  }

  public function save()
  {
    $data = [
      'kode_sumberbuku' => htmlspecialchars($this->input->post('kode_sumberbuku', true)),
      'nm_sumberbuku' => htmlspecialchars($this->input->post('nm_sumberbuku', true)),
    ];

    $this->db->insert('sumber_buku', $data);
  }

  public function update($where = null)
  {
    $data = [
      'kode_sumberbuku' => htmlspecialchars($this->input->post('kode_sumberbuku', true)),
      'nm_sumberbuku' => htmlspecialchars($this->input->post('nm_sumberbuku', true)),
    ];

    $this->db->where('id_sumberbuku', $where);
    $this->db->update('sumber_buku', $data);
  }

  public function delete($where)
  {
    $this->db->delete('sumber_buku', $where);
  }

  public function getDatascan()
  {
    echo "ok";
  }
}
