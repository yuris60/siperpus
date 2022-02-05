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

    // Peminjaman Buku Grafik Area
    // Qty
    $data['jumlahqtyjanuari'] = $this->dashboard_model->getJumlahQtyJanuari();
    $data['jumlahqtyfebruari'] = $this->dashboard_model->getJumlahQtyFebruari();
    $data['jumlahqtymaret'] = $this->dashboard_model->getJumlahQtyMaret();
    $data['jumlahqtyapril'] = $this->dashboard_model->getJumlahQtyApril();
    $data['jumlahqtymei'] = $this->dashboard_model->getJumlahQtyMei();
    $data['jumlahqtyjuni'] = $this->dashboard_model->getJumlahQtyJuni();
    $data['jumlahqtyjuli'] = $this->dashboard_model->getJumlahQtyJuli();
    $data['jumlahqtyagustus'] = $this->dashboard_model->getJumlahQtyAgustus();
    $data['jumlahqtyseptember'] = $this->dashboard_model->getJumlahQtySeptember();
    $data['jumlahqtyoktober'] = $this->dashboard_model->getJumlahQtyOktober();
    $data['jumlahqtynovember'] = $this->dashboard_model->getJumlahQtyNovember();
    $data['jumlahqtydesember'] = $this->dashboard_model->getJumlahQtyDesember();

    $data['jumlahpeminjamanjanuari'] = $this->dashboard_model->getJumlahPeminjamanJanuari();
    $data['jumlahpeminjamanfebruari'] = $this->dashboard_model->getJumlahPeminjamanFebruari();
    $data['jumlahpeminjamanmaret'] = $this->dashboard_model->getJumlahPeminjamanMaret();
    $data['jumlahpeminjamanapril'] = $this->dashboard_model->getJumlahPeminjamanApril();
    $data['jumlahpeminjamanmei'] = $this->dashboard_model->getJumlahPeminjamanMei();
    $data['jumlahpeminjamanjuni'] = $this->dashboard_model->getJumlahPeminjamanJuni();
    $data['jumlahpeminjamanjuli'] = $this->dashboard_model->getJumlahPeminjamanJuli();
    $data['jumlahpeminjamanagustus'] = $this->dashboard_model->getJumlahPeminjamanAgustus();
    $data['jumlahpeminjamanseptember'] = $this->dashboard_model->getJumlahPeminjamanSeptember();
    $data['jumlahpeminjamanoktober'] = $this->dashboard_model->getJumlahPeminjamanOktober();
    $data['jumlahpeminjamannovember'] = $this->dashboard_model->getJumlahPeminjamanNovember();
    $data['jumlahpeminjamandesember'] = $this->dashboard_model->getJumlahPeminjamanDesember();

    // Buku Terfavorit
    $data['bukuterfavorit'] = $this->dashboard_model->getBukuTerfavorit();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js_beranda');
  }
}
