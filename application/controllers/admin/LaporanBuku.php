<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanBuku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/laporanbuku_model');
    $this->load->helper('tglindo');
    $this->load->library('qrcode/ciqrcode');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Laporan Buku | SIPERPUS";
    $data['menu'] = "Laporan Buku";
    $data['icon'] = "bi bi-book-half";

    if (isset($_POST['submit_label_buku'])) {
      $data['title'] = "Cetak Laporan Pendapatan PDF Custom | NBC";

      //load halaman
      $this->load->library('pdf');
      // $this->load->view('penjualan/transaksi_pdf', $data);

      //inisialisasi variabel untuk dompdf
      $paper_size = 'A4';
      $orientation = 'portrait';
      // $html = $this->output->get_output();

      //terapkan ke dompdf
      // $this->pdf->set_option('isRemoteEnabled', TRUE);
      $this->pdf->setPaper($paper_size, $orientation);
      $this->pdf->filename = "Cetak Laporan Pendapatan PDF Custom | NBC";
      $this->pdf->load_view('admin/buku/buku_cetaklabelbuku_byID', $data);


      //Convert to PDF
      // $this->dompdf->load_html($html);
      // $this->dompdf->render();
      // $this->dompdf->stream("Laporan Pendapatan", array('Attachment' => 0));
    } else {
      $data['buku'] = $this->laporanbuku_model->getAll();
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/buku/buku_laporan', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    }
  }
  // public function index()
  // {
  //   // $data['user'] = $this->login_model->getSession();
  //   $data['title'] = "Laporan Buku | SIPERPUS";
  //   $data['menu'] = "Laporan Buku";
  //   $data['icon'] = "bi bi-book-half";

  //   $data['buku'] = $this->buku_model->getAll();

  //   $this->load->view('admin/templates/header', $data);
  //   $this->load->view('admin/templates/sidebar');
  //   $this->load->view('admin/templates/topbar');
  //   $this->load->view('admin/buku/buku_laporan', $data);
  //   $this->load->view('admin/templates/footer');
  //   $this->load->view('admin/templates/js');
  // }

  public function cetakLabelBukuByID()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Laporan Buku | SIPERPUS";
    $data['menu'] = "Laporan Buku";
    $data['icon'] = "bi bi-book-half";

    $data['buku'] = $this->buku_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/buku/buku_cetaklabelbuku_byID', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function qrcode($where)
  {
    qrcode::png(
      $where,
      $outfile = false,
      $level = QR_ECLEVEL_H,
      $size = 6,
      $margin = 0

    );
  }
}
