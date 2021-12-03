<?php
defined('BASEPATH') or exit('No Direct Script Access Allowed');

date_default_timezone_set('Asia/Jakarta');

class Peminjaman_model extends CI_Model
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

  public function getBukuAll()
  {
    return $this->db->get('buku')->result_array();
  }

  public function getAnggotaByID($where)
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('anggota', 'peminjaman.nisn = anggota.nisn');
    $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
    $this->db->join('jurusan', 'kelas.id_jurusan = jurusan.id_jurusan');
    $this->db->where('peminjaman.id_pinjam', $where);
    return $this->db->get()->row_array();
  }

  public function getDetailPeminjaman($where)
  {
    $this->db->select('*');
    $this->db->from('peminjaman');
    $this->db->join('detail_peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
    $this->db->join('buku', 'detail_peminjaman.id_buku = buku.id_buku');
    $this->db->where('peminjaman.id_pinjam', $where);
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

  public function savePeminjaman()
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

  public function saveDetailPeminjaman()
  {
    $this->db->select('stok_buku');
    $this->db->from('buku');
    $this->db->where('id_buku', $this->input->post('id_buku'));
    $query = $this->db->get()->row_array();

    if ($query['stok_buku'] >= $this->input->post('id_buku')) { //jika stok buku ada, maka simpan
      $this->db->select('id_buku');
      $this->db->from('buku');
      $this->db->where('id_buku', $this->input->post('id_buku'));
      $query2 = $this->db->get();
      //cek apakah buku terdaftar atau tidak
      if ($query2->num_rows() <> 0) { //jika terdaftar, maka simpan
        //cek apakah buku terpinjam 2x
        $this->db->select('id_buku');
        $this->db->from('detail_peminjaman');
        $this->db->where('id_pinjam', $this->input->post('id_pinjam'));
        $this->db->where('id_buku', $this->input->post('id_buku'));
        $query3 = $this->db->get();
        if ($query3->num_rows() == 0) { //jika belum dipinjam, maka simpan
          // Simpan Detail Peminjaman
          $data = [
            'id_detailpinjam' => htmlspecialchars($this->input->post('id_detailpinjam', true)),
            'id_pinjam' => htmlspecialchars($this->input->post('id_pinjam', true)),
            'id_buku' => htmlspecialchars($this->input->post('id_buku', true)),
            'qty_pinjam' => 1,
            'tgl_pengembalian' => 0,
            'keterlambatan' => 0,
            'status_buku' => 'Belum Kembali'
          ];
          $this->db->insert('detail_peminjaman', $data);

          //update stok buku
          $this->db->select('stok_buku');
          $this->db->from('buku');
          $this->db->where('id_buku', $this->input->post('id_buku'));
          $query4 = $this->db->get()->row_array();

          $stoklama = $query4['stok_buku'];
          $pinjam = 1;
          $stokbaru = $stoklama - $pinjam;
          $this->db->set('stok_buku', $stokbaru);
          $this->db->where('id_buku', $this->input->post('id_buku'));
          $this->db->update('buku');
        } else { //jika sudah dipinjam sebelumnya
          $id_pinjam = $this->input->post('id_pinjam');
          $this->session->set_flashdata('gagal-pinjam-buku', 'Dipinjam');
          redirect('admin/peminjaman/detail/' . $id_pinjam);
        }
      } else { //jika tidak terdaftar, maka alihkan
        $id_pinjam = $this->input->post('id_pinjam');
        $this->session->set_flashdata('gagal-pinjam', 'Terdaftar');
        redirect('admin/peminjaman/detail/' . $id_pinjam);
      }
    } else { //jika stok buku kurang, maka
      $id_pinjam = $this->input->post('id_pinjam');
      $this->session->set_flashdata('gagal-buku-kurang', 'Kurang');
      redirect('admin/peminjaman/detail/' . $id_pinjam);
    }
  }

  public function saveDetailPeminjamanManual($id_pinjam, $id_buku)
  {
    $this->db->select('stok_buku');
    $this->db->from('buku');
    $this->db->where('id_buku', $id_buku);
    $query = $this->db->get()->row_array();

    if ($query['stok_buku'] >= $id_buku) { //jika stok buku ada, maka simpan
      $this->db->select('id_buku');
      $this->db->from('buku');
      $this->db->where('id_buku', $id_buku);
      $query = $this->db->get();

      //cek apakah buku terdaftar atau tidak
      if ($query->num_rows() <> 0) { //jika terdaftar, maka simpan
        //cek apakah buku terpinjam 2x
        $this->db->select('id_buku');
        $this->db->from('detail_peminjaman');
        $this->db->where('id_pinjam', $id_pinjam);
        $this->db->where('id_buku', $id_buku);
        $query2 = $this->db->get();
        if ($query2->num_rows() == 0) { //jika belum dipinjam, maka simpan
          $tgl_kembali = date('Y-m-d H:i:s', strtotime('+7 days')); //tambah tanggal sebanyak 
          $data = [
            'id_pinjam' => $id_pinjam,
            'id_buku' => $id_buku,
            'qty_pinjam' => 1,
            'tgl_kembali' => $tgl_kembali,
            'tgl_pengembalian' => 0,
            'keterlambatan' => 0,
            'status_buku' => 'Belum Kembali'
          ];

          $this->db->insert('detail_peminjaman', $data);

          //update stok buku
          $this->db->select('stok_buku');
          $this->db->from('buku');
          $this->db->where('id_buku', $id_buku);
          $query4 = $this->db->get()->row_array();

          $stoklama = $query4['stok_buku'];
          $pinjam = 1;
          $stokbaru = $stoklama - $pinjam;
          $this->db->set('stok_buku', $stokbaru);
          $this->db->where('id_buku', $id_buku);
          $this->db->update('buku');
        } else { //jika sudah dipinjam sebelumnya
          $this->session->set_flashdata('gagal-pinjam-buku', 'Dipinjam');
          redirect('admin/peminjaman/detail/' . $id_pinjam);
        }
      } else { //jika tidak terdaftar, maka alihkan
        $id_pinjam = $id_pinjam;
        $this->session->set_flashdata('gagal-pinjam', 'Terdaftar');
        redirect('admin/peminjaman/detail/' . $id_pinjam);
      }
    } else { //jika stok buku kurang, maka
      $id_pinjam = $id_pinjam;
      $this->session->set_flashdata('gagal-buku-kurang', 'Kurang');
      redirect('admin/peminjaman/detail/' . $id_pinjam);
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

  public function deletepeminjamanbuku($id_detailpinjam, $id_buku, $qty_pinjam)
  {
    //update stok buku
    $this->db->select('stok_buku');
    $this->db->from('buku');
    $this->db->where('id_buku', $id_buku);
    $query = $this->db->get()->row_array();

    $stoklama = $query['stok_buku'];
    $stokbaru = $stoklama + $qty_pinjam;
    $this->db->set('stok_buku', $stokbaru);
    $this->db->where('id_buku', $id_buku);
    $this->db->update('buku');

    //delete detail peminjaman
    $this->db->delete('detail_peminjaman', $id_detailpinjam);
  }
}
