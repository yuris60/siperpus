<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

class Kelas_model extends CI_Model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan');
    $this->db->order_by('kelas.id_kelas', 'ASC');
    return $this->db->get()->result_array();
  }

  public function getJurusan()
  {
    return $this->db->get('jurusan')->result_array();
  }

  public function save()
  {
    $data = [
      'tingkatan_kelas' => htmlspecialchars($this->input->post('tingkatan_kelas', true)),
      'id_jurusan' => htmlspecialchars($this->input->post('id_jurusan', true)),
      'nomor_kelas' => htmlspecialchars($this->input->post('nomor_kelas', true))
    ];

    $this->db->insert('kelas', $data);
  }

  public function delete($where)
  {
    $this->db->delete('kelas', $where);
  }
}
