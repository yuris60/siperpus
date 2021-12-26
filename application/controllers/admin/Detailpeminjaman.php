<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Detailpeminjaman extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/peminjaman_model');
    $this->load->helper('tglindo');
    $this->load->helper('waktulalu');
  }

  public function buku($where)
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Detail Peminjaman | SIPERPUS";
    $data['menu'] = "Detail Peminjaman";
    $data['icon'] = "bi bi-book-half";

    $where = $this->uri->segment(4);

    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
    $data['peminjaman'] = $this->peminjaman_model->getAll();
    $data['id_pinjam'] = $this->peminjaman_model->autonumber();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/detail_peminjaman/detail_peminjaman_index', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js_scan');
    } else {
      $this->peminjaman_model->save();
      $this->session->set_flashdata('success', 'Disimpan');
      redirect('admin/peminjaman');
    }
  }

  public function create()
  {
    $data['title'] = "Tambah Peminjaman | SIPERPUS";
    $data['menu'] = "Peminjaman";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-book-half";

    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');

    $data['id_pinjam'] = $this->peminjaman_model->autonumber();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/peminjaman/peminjaman_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js_scan');
    } else {
      $this->peminjaman_model->save();
      $this->session->set_flashdata('success', 'disimpan');
      redirect('admin/peminjaman');
    }
  }

  public function update($where)
  {
    $data['title'] = "Perbarui Peminjaman | SIPERPUS";
    $data['menu'] = "Peminjaman";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-book-half";

    $this->form_validation->set_rules('judul_peminjaman', 'Judul peminjaman', 'required|trim');
    $this->form_validation->set_rules('penerbit', 'Penerbit', 'required|trim');
    $this->form_validation->set_rules('pengarang', 'Pengarang', 'required|trim');
    $this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|trim');

    $data['peminjaman'] = $this->peminjaman_model->getById($where);
    $data['ddc'] = $this->peminjaman_model->getDdcAll();
    $data['sumberpeminjaman'] = $this->peminjaman_model->getSumberpeminjamanAll();
    $data['jenispeminjaman'] = $this->peminjaman_model->getJenispeminjamanAll();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/peminjaman/peminjaman_update', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      $this->peminjaman_model->update($where);
      $this->session->set_flashdata('success', 'Diperbarui');
      redirect('admin/peminjaman');
    }
  }

  public function delete($where)
  {
    $where = ['id_pinjam' => $this->uri->segment(4)];
    $this->peminjaman_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/peminjaman');
  }
}
