<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengembalian extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/pengembalian_model');
    $this->load->model('admin/login_model');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Pengembalian Buku";
    $data['menu'] = "Pengembalian Buku";
    $data['icon'] = "bi bi-book-half";

    $data['pengembalian'] = $this->pengembalian_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/pengembalian/pengembalian_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function detail($where)
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Detail Pengembalian";
    $data['menu'] = "Pengembalian Buku";
    $data['submenu'] = "Detail";
    $data['icon'] = "bi bi-book-half";

    $data['buku'] = $this->pengembalian_model->getBukuAll();
    $data['anggota'] = $this->pengembalian_model->getAnggotaByID($where);
    $data['detail_pengembalian'] = $this->pengembalian_model->getDetailPeminjaman($where);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/pengembalian/pengembalian_detail', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function perpanjangPeminjaman($id_pinjam, $id_detailpinjam)
  {
    $this->pengembalian_model->perpanjangPeminjaman($id_pinjam, $id_detailpinjam);
    $this->session->set_flashdata('success', 'Diperpanjang');
    redirect('admin/pengembalian/detail/' . $id_pinjam);
  }

  public function kembalikanBuku($id_pinjam, $id_detailpinjam, $id_buku, $qty_pinjam, $keterlambatan)
  {
    $this->pengembalian_model->kembalikanBuku($id_pinjam, $id_detailpinjam, $id_buku, $qty_pinjam, $keterlambatan);
    $this->session->set_flashdata('success', 'Dikembalikan');
    redirect('admin/pengembalian/detail/' . $id_pinjam);
  }
}
