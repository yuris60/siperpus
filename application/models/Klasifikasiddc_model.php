<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class klasifikasiddc_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('klasifikasi_ddc')->result_array();
  }

  public function getById($where)
  {
    return $this->db->get_where('klasifikasi_ddc', ["id_ddc" => $where])->row_array();
  }

  public function save()
  {
    $data = [
      'kode_ddc' => htmlspecialchars($this->input->post('kode_ddc', true)),
      'kategori_ddc' => htmlspecialchars($this->input->post('kategori_ddc', true)),
    ];

    $this->db->insert('klasifikasi_ddc', $data);
  }

  public function update($where = null)
  {
    $data = [
      'kode_ddc' => htmlspecialchars($this->input->post('kode_ddc', true)),
      'kategori_ddc' => htmlspecialchars($this->input->post('kategori_ddc', true)),
    ];

    $this->db->where('id_ddc', $where);
    $this->db->update('klasifikasi_ddc', $data);
  }

  public function delete($where)
  {
    $this->db->delete('klasifikasi_ddc', $where);
  }
}
