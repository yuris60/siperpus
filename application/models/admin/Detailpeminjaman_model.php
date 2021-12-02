<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

date_default_timezone_set('Asia/Jakarta');

class Detailpeminjaman_model extends CI_Model
{
  public function getAll()
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'peminjaman.nisn = anggota.nisn');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan');
    $this->db->order_by('peminjaman.tgl_pinjam', 'DESC');
    return $this->db->get()->result_array();
  }

  public function getById($where)
  {
    return $this->db->get_where('peminjaman', ["id_pinjam" => $where])->row_array();
  }

  public function autonumber()
  {
    $this->db->select('RIGHT(id_pinjam,4) as id_pinjam', FALSE);
    $this->db->order_by('id_pinjam', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('peminjaman');      //cek dulu apakah ada sudah ada kode di tabel.    
    if ($query->num_rows() <> 0) {
      //jika kode ternyata sudah ada.      
      $data = $query->row();
      $kode = intval($data->id_pinjam) + 1;
    } else {
      //jika kode belum ada      
      $kode = 1;
    }

    $tglhariini = date('Ymd');
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
    $kodejadi = $tglhariini . $kodemax;
    return $kodejadi;
  }

  public function save()
  {
    $this->db->select('nisn');
    $this->db->from('anggota');
    $this->db->where('nisn', $this->input->post('nisn'));
    $query = $this->db->get();

    if ($query->num_rows() <> 0) {
      echo "Anggota Terdaftar";
      $data = [
        'id_pinjam' => htmlspecialchars($this->input->post('id_pinjam', true)),
        'tgl_pinjam' => htmlspecialchars($this->input->post('tgl_pinjam', true)),
        'nisn' => htmlspecialchars($this->input->post('nisn', true)),
        'id_admin' => htmlspecialchars($this->input->post('id_admin', true)),
        'tgl_bataspinjam' => htmlspecialchars($this->input->post('tgl_bataspinjam', true)),
        'total_denda' => 0,
        'status' => 'Belum Lunas'
      ];

      $this->db->insert('peminjaman', $data);
    } else {
      $this->session->set_flashdata('gagal', 'Terdaftar');
      redirect('admin/peminjaman');
    }
  }

  public function update($where = null)
  {
    $data = [
      'id_ddc' => htmlspecialchars($this->input->post('id_ddc', true)),
      'id_jenispeminjaman' => htmlspecialchars($this->input->post('id_jenispeminjaman', true)),
      'id_sumberpeminjaman' => htmlspecialchars($this->input->post('id_sumberpeminjaman', true)),
      'judul_peminjaman' => htmlspecialchars($this->input->post('judul_peminjaman', true)),
      'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
      'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
      'isbn' => htmlspecialchars($this->input->post('isbn', true)),
      'thn_terbit' => htmlspecialchars($this->input->post('thn_terbit', true)),
      'tinggi_peminjaman' => htmlspecialchars($this->input->post('tinggi_peminjaman', true)),
      'tgl_penerimaan' => htmlspecialchars($this->input->post('tgl_penerimaan', true)),
      'jml_halaman' => htmlspecialchars($this->input->post('jml_halaman', true)),
      'jml_eksemplar' => htmlspecialchars($this->input->post('jml_eksemplar', true)),
      'stok_peminjaman' => htmlspecialchars($this->input->post('stok_peminjaman', true)),
      'rak_peminjaman' => htmlspecialchars($this->input->post('rak_peminjaman', true)),
    ];

    $this->db->where('id_pinjam', $where);
    $this->db->update('peminjaman', $data);
  }

  public function delete($where)
  {
    $this->db->delete('peminjaman', $where);
  }
}
