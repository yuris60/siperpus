<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Laporankas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/laporankas_model');
    $this->load->model('admin/login_model');
    $this->load->helper('formatrupiah');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Laporan Kas";
    $data['menu'] = "Laporan Kas";
    $data['icon'] = "fa-solid fa-money-bill-wave";

    $data['laporankas'] = $this->laporankas_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/laporankas/laporankas_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function cetakLaporan()
  {
    if (isset($_POST["pdf"])) {
      if ($this->input->post('bulanan')) {
        $pilihan = $this->input->post('bulanan');
        $data['title'] = "Cetak Laporan Kas Bulan " . date('M Y', strtotime($pilihan));
        $data['laporankas'] = $this->laporankas_model->laporankasBulanan($pilihan);
        $data['num_rows'] = count($data['laporankas']);
        $data['periode_bulanan'] = $this->input->post('bulanan');

        if ($data['num_rows'] > 0) { //jika data tersedia, maka
          //load halaman
          $this->load->library('pdf');

          //inisialisasi variabel untuk dompdf
          $paper_size = 'A4';
          $orientation = 'portrait';

          //terapkan ke dompdf
          $this->pdf->setPaper($paper_size, $orientation);
          $this->pdf->filename = "Cetak Laporan Kas Bulan " . date('M Y', strtotime($pilihan));
          $this->pdf->load_view('admin/laporankas/laporankas_cetakpdf', $data);
        } else {
          $this->session->set_flashdata('flash', 'Ada');
          redirect('admin/laporankas');
        }
      } else if ($this->input->post('tahunan')) {
        $pilihan = $this->input->post('tahunan');
        $data['title'] = "Cetak Laporan Kas Tahun " . date('Y', strtotime($pilihan));
        $data['laporankas'] = $this->laporankas_model->laporankasTahunan($pilihan);
        $data['num_rows'] = count($data['laporankas']);
        $data['periode_tahunan'] = $pilihan;

        if ($data['num_rows'] > 0) { //jika data tersedia, maka
          //load halaman
          $this->load->library('pdf');

          //inisialisasi variabel untuk dompdf
          $paper_size = 'A4';
          $orientation = 'portrait';

          //terapkan ke dompdf
          $this->pdf->setPaper($paper_size, $orientation);
          $this->pdf->filename = "Cetak Laporan Kas Tahun " . date('Y', strtotime($pilihan));
          $this->pdf->load_view('admin/laporankas/laporankas_cetakpdf', $data);
        } else {
          $this->session->set_flashdata('flash', 'Ada');
          redirect('admin/laporankas');
        }
      } else if ($this->input->post('custom_start')) { //custom
        $custom_start = $this->input->post('custom_start');
        $custom_end = $this->input->post('custom_end');
        $data['title'] = "Cetak Laporan Kas Tanggal " . date('d M Y', strtotime($custom_start)) . " - " . date('d M Y', strtotime($custom_end));
        $data['laporankas'] = $this->laporankas_model->laporankasCustom();
        $data['num_rows'] = count($data['laporankas']);
        $data['custom_start'] = $this->input->post('custom_start');
        $data['custom_end'] = $this->input->post('custom_end');

        if ($data['num_rows'] > 0) { //jika data tersedia, maka
          //load halaman
          $this->load->library('pdf');

          //inisialisasi variabel untuk dompdf
          $paper_size = 'A4';
          $orientation = 'portrait';
          $this->pdf->setPaper($paper_size, $orientation);
          $this->pdf->filename = "Cetak Laporan Kas Tanggal " . date('d M Y', strtotime($custom_start)) . " - " . date('d M Y', strtotime($custom_end));
          $this->pdf->load_view('admin/laporankas/laporankas_cetakpdf', $data);
        } else {
          $this->session->set_flashdata('flash', 'Ada');
          redirect('admin/laporankas');
        }
      }
    } else if (isset($_POST['excel'])) { //jika klik tombol excel
      if ($this->input->post('bulanan')) {
        $pilihan = $this->input->post('bulanan');
        $data['periode_bulanan'] = $pilihan;
        $data['laporankas'] = $this->laporankas_model->laporankasBulanan($pilihan);
        $this->load->view('admin/laporankas/laporankas_cetakexcel', $data);
      } else if ($this->input->post('tahunan')) {
        $pilihan = $this->input->post('tahunan');
        $data['periode_tahunan'] = $pilihan;
        $data['laporankas'] = $this->laporankas_model->laporankasTahunan($pilihan);
        $this->load->view('admin/laporankas/laporankas_cetakexcel', $data);
      } else if ($this->input->post('custom_start')) { //custom
        $data['custom_start'] = $this->input->post('custom_start');
        $data['custom_end'] = $this->input->post('custom_end');
        $data['laporankas'] = $this->laporankas_model->laporankasCustom();
        $this->load->view('admin/laporankas/laporankas_cetakexcel', $data);
      }
    }
  }
}
