<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanBuku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/laporanbuku_model');
    $this->load->model('admin/login_model');
    $this->load->helper('tglindo');
    $this->load->library('qrcode/ciqrcode');
    ini_set('max_execution_time', 0);
    ini_set('memory_limit', '20480M');
  }

  // public function index()
  // {
  //   $data['admin'] = $this->login_model->getSession();
  //   $data['title'] = "Laporan Buku | SIPERPUS";
  //   $data['menu'] = "Laporan Buku";
  //   $data['icon'] = "bi bi-book-half";


  //   if (isset($_POST['submit_label_buku'])) {
  //     $checkbox = $_POST['cid_buku'];
  //     if ($checkbox > 0) {
  //       $data['title'] = "Cetak Label Buku Pilihan | SIPERPUS";

  //       //load halaman
  //       $this->load->library('pdf');
  //       // $this->load->view('penjualan/transaksi_pdf', $data);

  //       //inisialisasi variabel untuk dompdf
  //       $paper_size = 'A4';
  //       $orientation = 'portrait';
  //       // $html = $this->output->get_output();

  //       //terapkan ke dompdf
  //       // $this->pdf->set_option('isRemoteEnabled', TRUE);
  //       $this->pdf->setPaper($paper_size, $orientation);
  //       $this->pdf->filename = "Cetak Label Buku Pilihan | SIPERPUS";
  //       $this->pdf->load_view('admin/laporanbuku/laporanbuku_cetaklabelbuku_byID', $data);


  //       //Convert to PDF
  //       // $this->dompdf->load_html($html);
  //       // $this->dompdf->render();
  //       // $this->dompdf->stream("Laporan Pendapatan", array('Attachment' => 0));
  //     } else {
  //       redirect('admin/laporanbuku');
  //     }
  //   } else {
  //     $data['buku'] = $this->laporanbuku_model->getAll();
  //     $this->load->view('admin/templates/header', $data);
  //     $this->load->view('admin/templates/sidebar');
  //     $this->load->view('admin/templates/topbar');
  //     $this->load->view('admin/laporanbuku/laporanbuku_index', $data);
  //     $this->load->view('admin/templates/footer');
  //     $this->load->view('admin/templates/js');
  //   }
  // }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Laporan Buku";
    $data['menu'] = "Laporan Buku";
    $data['icon'] = "bi bi-book-half";

    $data['buku'] = $this->laporanbuku_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/laporanbuku/laporanbuku_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function cetakLabelBuku()
  {
    $data['buku'] = $this->laporanbuku_model->getAllJoin();
    $data['title'] = "Cetak Label Buku Keseluruhan | SIPERPUS";

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
    $this->pdf->filename = "Cetak Label Buku Keseluruhan | SIPERPUS";
    $this->pdf->load_view('admin/laporanbuku/laporanbuku_cetaklabelbuku', $data);


    //Convert to PDF
    // $this->dompdf->load_html($html);
    // $this->dompdf->render();
    // $this->dompdf->stream("Laporan Pendapatan", array('Attachment' => 0));
  }

  public function cetakLabelBukuByID()
  {
    $id_buku = $this->input->post('id_buku');
    $qty = $this->input->post('qty');

    $data['qty'] = $qty;
    $data['buku'] = $this->laporanbuku_model->getById($id_buku);
    $data['title'] = "Cetak Label Buku | SIPERPUS";

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
    $this->pdf->filename = "Cetak Label Buku | SIPERPUS";
    // $this->pdf->load_view('admin/laporanbuku/laporanbuku_cetaklabelbuku_ByID2', $data);
    $this->pdf->load_view('admin/laporanbuku/laporanbuku_cetaklabelbuku_ByID', $data);
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
