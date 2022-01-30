<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('tglindo');
    $this->load->helper('waktulalu');
    $this->load->model('admin/login_model');
    $this->load->model('admin/dashboard_model');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Dashboard | SIPERPUS";
    $data['menu'] = "Dashboard";
    $data['icon'] = "bi bi-house-door-fill";

    // Icon 4 atas
    $data['jumlahanggota'] = $this->dashboard_model->getJumlahAnggota();
    $data['jumlahjudulbuku'] = $this->dashboard_model->getJumlahJudulBuku();
    $data['jumlaheksemplarbuku'] = $this->dashboard_model->getEksemplarBuku();
    $data['jumlahadmin'] = $this->dashboard_model->getJumlahAdmin();

    // Peminjaman Buku
    $data['peminjamansemua'] = $this->dashboard_model->getPeminjamanSemua();
    $data['peminjamanbelumlunas'] = $this->dashboard_model->getPeminjamanBelumLunas();
    $data['peminjamanlunas'] = $this->dashboard_model->getPeminjamanLunas();

    // Jumlah Pengunjung
    $data['pengunjunghariinilakilaki'] = $this->dashboard_model->getJumlahPengunjungHariIniLakiLaki();
    $data['pengunjunghariiniperempuan'] = $this->dashboard_model->getJumlahPengunjungHariIniPerempuan();
    $data['pengunjunglakilaki'] = $this->dashboard_model->getJumlahPengunjungLakiLaki();
    $data['pengunjungperempuan'] = $this->dashboard_model->getJumlahPengunjungPerempuan();
    $data['pengunjung'] = $this->dashboard_model->getPengunjung();

    // Peminjaman Buku Grafik Bar
    $data['jumlahpeminjamanbukujanuari'] = $this->dashboard_model->getJumlahPeminjamanJanuari();
    $data['jumlahpeminjamanbukufebruari'] = $this->dashboard_model->getJumlahPeminjamanFebruari();
    $data['jumlahpeminjamanbukumaret'] = $this->dashboard_model->getJumlahPeminjamanMaret();
    $data['jumlahpeminjamanbukuapril'] = $this->dashboard_model->getJumlahPeminjamanApril();
    $data['jumlahpeminjamanbukumei'] = $this->dashboard_model->getJumlahPeminjamanMei();
    $data['jumlahpeminjamanbukujuni'] = $this->dashboard_model->getJumlahPeminjamanJuni();
    $data['jumlahpeminjamanbukujuli'] = $this->dashboard_model->getJumlahPeminjamanJuli();
    $data['jumlahpeminjamanbukuagustus'] = $this->dashboard_model->getJumlahPeminjamanAgustus();
    $data['jumlahpeminjamanbukuseptember'] = $this->dashboard_model->getJumlahPeminjamanSeptember();
    $data['jumlahpeminjamanbukuoktober'] = $this->dashboard_model->getJumlahPeminjamanOktober();
    $data['jumlahpeminjamanbukunovember'] = $this->dashboard_model->getJumlahPeminjamanNovember();
    $data['jumlahpeminjamanbukudesember'] = $this->dashboard_model->getJumlahPeminjamanDesember();


    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js_beranda');
  }
}
