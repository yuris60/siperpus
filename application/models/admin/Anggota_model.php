<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

// date_default_timezone_set('Asia/Jakarta');

class Anggota_model extends CI_Model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('anggota.id_kelas', 'ASC');
    $this->db->order_by('anggota.nm_anggota', 'ASC');
    return $this->db->get()->result_array();
  }

  public function getKelasAll()
  {
    $this->db->select('*');
    $this->db->from('kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->order_by('kelas.tingkatan_kelas', 'ASC');
    $this->db->order_by('kelas.id_jurusan', 'ASC');
    $this->db->order_by('kelas.nomor_kelas', 'ASC');
    return $this->db->get()->result_array();
  }

  public function getById($where)
  {
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
    $this->db->where('anggota.nisn', $where);
    return $this->db->get()->row_array();
  }

  public function save($filesimpan)
  {
    $data = [
      'nisn' => htmlspecialchars($this->input->post('nisn', true)),
      'id_kelas' => htmlspecialchars($this->input->post('id_kelas', true)),
      'nm_anggota' => htmlspecialchars($this->input->post('nm_anggota', true)),
      'jk_anggota' => htmlspecialchars($this->input->post('jk_anggota', true)),
      'tempatlahir_anggota' => htmlspecialchars($this->input->post('tempatlahir_anggota', true)),
      'tgllahir_anggota' => htmlspecialchars($this->input->post('tgllahir_anggota', true)),
      'nik_anggota' => htmlspecialchars($this->input->post('nik_anggota', true)),
      'agama_anggota' => htmlspecialchars($this->input->post('agama_anggota', true)),
      'alamat_anggota' => htmlspecialchars($this->input->post('alamat_anggota', true)),
      'rt' => htmlspecialchars($this->input->post('rt', true)),
      'rw' => htmlspecialchars($this->input->post('rw', true)),
      'dusun' => htmlspecialchars($this->input->post('dusun', true)),
      'kelurahan' => htmlspecialchars($this->input->post('kelurahan', true)),
      'kecamatan' => htmlspecialchars($this->input->post('kecamatan', true)),
      'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah', true)),
      'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu', true)),
      'foto_anggota' => $filesimpan
    ];

    $this->db->insert('anggota', $data);
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
