<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Peminjaman extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/peminjaman_model');
    $this->load->model('admin/login_model');
    $this->load->helper('waktulalu');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Peminjaman | SIPERPUS";
    $data['menu'] = "Peminjaman";
    $data['icon'] = "bi bi-book-half";

    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
    $data['peminjaman'] = $this->peminjaman_model->getAll();
    $data['id_pinjam'] = $this->peminjaman_model->autonumber();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/peminjaman/peminjaman_index', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js_scan');
    } else {
      $this->peminjaman_model->savePeminjaman();
      $id_pinjam = $this->input->post('id_pinjam');
      $this->session->set_flashdata('success', 'Disimpan');
      redirect('admin/peminjaman/detail/' . $id_pinjam);
    }
  }

  public function detail($where)
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Detail Peminjaman | SIPERPUS";
    $data['menu'] = "Buku";
    $data['submenu'] = "Detail Peminjaman";
    $data['icon'] = "bi bi-book-half";

    // $where = $this->uri->segment(4);

    $this->form_validation->set_rules('id_buku', 'ID Buku', 'required|trim');
    $data['buku'] = $this->peminjaman_model->getBukuAll();
    $data['anggota'] = $this->peminjaman_model->getAnggotaByID($where);
    $data['detail_peminjaman'] = $this->peminjaman_model->getDetailPeminjaman($where);

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/peminjaman/peminjaman_detail', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js_scanbuku');
    } else {
      $this->peminjaman_model->saveDetailPeminjaman();
      $id_pinjam = $this->input->post('id_pinjam');
      $this->session->set_flashdata('success', 'Disimpan');
      redirect('admin/peminjaman/detail/' . $id_pinjam);
    }
  }

  public function savePeminjamanBukuManual($id_pinjam, $id_buku)
  {
    $id_pinjam = $this->uri->segment(4);
    $id_buku = $this->uri->segment(5);
    $this->peminjaman_model->saveDetailPeminjamanManual($id_pinjam, $id_buku);
    $this->session->set_flashdata('success', 'Disimpan');
    redirect('admin/peminjaman/detail/' . $id_pinjam);
  }

  // public function update($where)
  // {
  //   $data['admin'] = $this->login_model->getSession();
  //   $data['title'] = "Perbarui Peminjaman | SIPERPUS";
  //   $data['menu'] = "Peminjaman";
  //   $data['submenu'] = "Perbarui Data";
  //   $data['icon'] = "bi bi-book-half";

  //   $this->form_validation->set_rules('judul_peminjaman', 'Judul peminjaman', 'required|trim');
  //   $this->form_validation->set_rules('penerbit', 'Penerbit', 'required|trim');
  //   $this->form_validation->set_rules('pengarang', 'Pengarang', 'required|trim');
  //   $this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|trim');

  //   $data['peminjaman'] = $this->peminjaman_model->getById($where);
  //   $data['ddc'] = $this->peminjaman_model->getDdcAll();
  //   $data['sumberpeminjaman'] = $this->peminjaman_model->getSumberpeminjamanAll();
  //   $data['jenispeminjaman'] = $this->peminjaman_model->getJenispeminjamanAll();

  //   if ($this->form_validation->run() == FALSE) {
  //     $this->load->view('admin/templates/header', $data);
  //     $this->load->view('admin/templates/sidebar');
  //     $this->load->view('admin/templates/topbar');
  //     $this->load->view('admin/peminjaman/peminjaman_update', $data);
  //     $this->load->view('admin/templates/footer');
  //     $this->load->view('admin/templates/js');
  //   } else {
  //     $this->peminjaman_model->update($where);
  //     $this->session->set_flashdata('success', 'Diperbarui');
  //     redirect('admin/peminjaman');
  //   }
  // }

  public function updateQtyPinjam()
  {
    $id_pinjam = $this->input->post('id_pinjam');
    $id_detailpinjam = $this->input->post('id_detailpinjam');
    $id_buku = $this->input->post('id_buku');
    $qty_lama = $this->input->post('qty_pinjam');
    $qty_pinjam = $this->input->post('qty');

    $this->peminjaman_model->updateQtyPinjam($id_pinjam, $id_detailpinjam, $id_buku, $qty_lama, $qty_pinjam);
    $this->session->set_flashdata('success', 'Diperbarui');
    redirect('admin/peminjaman/detail/' . $id_pinjam);
  }

  public function delete($where)
  {
    $where = ['id_pinjam' => $this->uri->segment(4)];
    $this->peminjaman_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/peminjaman');
  }

  public function deletepeminjamanbuku($id_detailpinjam, $id_pinjam, $qty_pinjam)
  {
    $id_pinjam = $this->uri->segment(4);
    $id_detailpinjam = ['id_detailpinjam' => $this->uri->segment(5)];
    $id_buku = $this->uri->segment(6);
    $qty_pinjam = $this->uri->segment(7);
    // echo $id_pinjam;
    $this->peminjaman_model->deletepeminjamanbuku($id_detailpinjam, $id_buku, $qty_pinjam);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/peminjaman/detail/' . $id_pinjam);
  }
}
