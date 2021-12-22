<?php
defined('BASEPATH') or exit('No direct script access allowed');

class laporananggota extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/laporananggota_model');
    $this->load->helper('tgljamindo');
    $this->load->helper('tglindo');
    $this->load->library('qrcode/ciqrcode');
    ini_set('max_execution_time', 0);
    ini_set('memory_limit', '20480M');
  }

  public function index()
  {
    // $data['user'] = $this->login_model->getSession();
    $data['title'] = "Laporan Anggota | SIPERPUS";
    $data['menu'] = "Laporan Anggota";
    $data['icon'] = "bi bi-book-half";

    $data['kelas'] = $this->laporananggota_model->getAllKelas();
    $data['anggota'] = $this->laporananggota_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/laporananggota/laporananggota_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function cetakLaporan()
  {
    if (isset($_POST["pdf_laporan"])) {
      if ($this->input->post('kelas2')) {
        $kelas = $this->input->post('kelas2');
        // echo $kelas;
        $data['anggota'] = $this->laporananggota_model->getAllbyKelas($kelas);
        $data['num_rows'] = count($data['anggota']);

        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
        $this->db->where('kelas.id_kelas', $kelas);
        $sql_kelas = $this->db->get()->row_array();

        // cek kelas
        if ($sql_kelas['tingkatan_kelas'] == 1) {
          $tingkatan_kelas = "X";
        } elseif ($sql_kelas['tingkatan_kelas'] == 2) {
          $tingkatan_kelas = "XI";
        } else {
          $tingkatan_kelas = "XII";
        }
        $name_kelas = $tingkatan_kelas . " " . $sql_kelas['nm_jurusan'] . " " . $sql_kelas['nomor_kelas'];

        // echo $name_kelas;

        $data['kelas'] = $name_kelas;
        $data['title'] = "Cetak Laporan Anggota | $name_kelas | SIPERPUS";

        //load halaman
        $this->load->library('pdf');
        // $this->load->view('penjualan/transaksi_pdf', $data);

        //inisialisasi variabel untuk dompdf
        $paper_size = 'A4';
        $orientation = 'landscape';
        // $html = $this->output->get_output();

        //terapkan ke dompdf
        // $this->pdf->set_option('isRemoteEnabled', TRUE);
        $this->pdf->setPaper($paper_size, $orientation);
        $this->pdf->filename = "Cetak Laporan Anggota | $name_kelas | SIPERPUS";
        $this->pdf->load_view('admin/laporananggota/laporananggota_cetakpdf', $data);
      } else if ($this->input->post('angkatan2')) {
        $angkatan = $this->input->post('angkatan2');
        $data['anggota'] = $this->laporananggota_model->getAllbyAngkatan($angkatan);
        $data['num_rows'] = count($data['anggota']);

        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
        $this->db->where('kelas.tingkatan_kelas', $angkatan);
        $sql_angkatan = $this->db->get()->row_array();

        // cek kelas
        if ($sql_angkatan['tingkatan_kelas'] == 1) {
          $tingkatan_kelas = "X";
        } elseif ($sql_angkatan['tingkatan_kelas'] == 2) {
          $tingkatan_kelas = "XI";
        } else {
          $tingkatan_kelas = "XII";
        }
        // echo $name_kelas;

        $data['angkatan'] = $tingkatan_kelas;
        $data['title'] = "Cetak Kartu Perpus | Kelas $tingkatan_kelas | SIPERPUS";

        if ($data['num_rows'] > 0) { //jika data tersedia, maka
          //load halaman
          $this->load->library('pdf');

          //inisialisasi variabel untuk dompdf
          $paper_size = 'A4';
          $orientation = 'landscape';

          //terapkan ke dompdf
          $this->pdf->setPaper($paper_size, $orientation);
          $this->pdf->filename = "Cetak Laporan Anggota | $tingkatan_kelas | SIPERPUS";
          $this->pdf->load_view('admin/laporananggota/laporananggota_cetakpdf', $data);
        } else {
          $this->session->set_flashdata('flash', 'Ada');
          redirect('admin/laporanpengunjung');
        }
      }
    } else if (isset($_POST['excel_laporan'])) { //jika klik tombol excel
      if ($this->input->post('kelas2')) {
        $kelas = $this->input->post('kelas2');
        $data['anggota'] = $this->laporananggota_model->getAllbyKelas($kelas);

        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
        $this->db->where('kelas.id_kelas', $kelas);
        $sql_kelas = $this->db->get()->row_array();

        // cek kelas
        if ($sql_kelas['tingkatan_kelas'] == 1) {
          $tingkatan_kelas = "X";
        } elseif ($sql_kelas['tingkatan_kelas'] == 2) {
          $tingkatan_kelas = "XI";
        } else {
          $tingkatan_kelas = "XII";
        }
        $name_kelas = $tingkatan_kelas . " " . $sql_kelas['nm_jurusan'] . " " . $sql_kelas['nomor_kelas'];

        // echo $name_kelas;

        $data['kelas'] = $name_kelas;

        $this->load->view('admin/laporananggota/laporananggota_cetakexcel', $data);
      } else if ($this->input->post('angkatan2')) {
        $angkatan = $this->input->post('angkatan2');
        $data['anggota'] = $this->laporananggota_model->getAllbyAngkatan($angkatan);

        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
        $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
        $this->db->where('kelas.tingkatan_kelas', $angkatan);
        $sql_angkatan = $this->db->get()->row_array();

        // cek kelas
        if ($sql_angkatan['tingkatan_kelas'] == 1) {
          $tingkatan_kelas = "X";
        } elseif ($sql_angkatan['tingkatan_kelas'] == 2) {
          $tingkatan_kelas = "XI";
        } else {
          $tingkatan_kelas = "XII";
        }
        // echo $name_kelas;

        $data['angkatan'] = "Kelas " . $tingkatan_kelas;
        $this->load->view('admin/laporananggota/laporananggota_cetakexcel', $data);
      }
    }
  }

  public function cetakKartu()
  {
    if ($this->input->post('kelas')) {
      $kelas = $this->input->post('kelas');
      $data['anggota'] = $this->laporananggota_model->getAllbyKelas($kelas);

      $this->db->select('*');
      $this->db->from('anggota');
      $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
      $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
      $this->db->where('kelas.id_kelas', $kelas);
      $sql_kelas = $this->db->get()->row_array();

      // cek kelas
      if ($sql_kelas['tingkatan_kelas'] == 1) {
        $tingkatan_kelas = "X";
      } elseif ($sql_kelas['tingkatan_kelas'] == 2) {
        $tingkatan_kelas = "XI";
      } else {
        $tingkatan_kelas = "XII";
      }
      $name_kelas = $tingkatan_kelas . " " . $sql_kelas['nm_jurusan'] . " " . $sql_kelas['nomor_kelas'];
      // echo $name_kelas;

      $data['title'] = "Cetak Kartu Perpus | $name_kelas | SIPERPUS";
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
      $this->pdf->filename = "Cetak Kartu Perpus | $name_kelas | SIPERPUS";
      $this->pdf->load_view('admin/laporananggota/laporananggota_cetakkartu', $data);
    } else if ($this->input->post('angkatan')) {
      $angkatan = $this->input->post('angkatan');
      $data['anggota'] = $this->laporananggota_model->getAllbyAngkatan($angkatan);

      $this->db->select('*');
      $this->db->from('anggota');
      $this->db->join('kelas', 'anggota.id_kelas = kelas.id_kelas');
      $this->db->join('jurusan', 'jurusan.id_jurusan = kelas.id_jurusan');
      $this->db->where('kelas.tingkatan_kelas', $angkatan);
      $sql_angkatan = $this->db->get()->row_array();

      // cek kelas
      if ($sql_angkatan['tingkatan_kelas'] == 1) {
        $tingkatan_kelas = "X";
      } elseif ($sql_angkatan['tingkatan_kelas'] == 2) {
        $tingkatan_kelas = "XI";
      } else {
        $tingkatan_kelas = "XII";
      }
      // echo $name_kelas;

      $data['title'] = "Cetak Kartu Perpus | Kelas $tingkatan_kelas | SIPERPUS";
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
      $this->pdf->filename = "Cetak Cetak Kartu Perpus | SIPERPUS";
      $this->pdf->load_view('admin/laporananggota/laporananggota_cetakkartu', $data);
    } else {
      $data['anggota'] = $this->laporananggota_model->getAll();
      $data['title'] = "Cetak Kartu Perpus | SIPERPUS";

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
      $this->pdf->filename = "Cetak Cetak Kartu Perpus | SIPERPUS";
      $this->pdf->load_view('admin/laporananggota/laporananggota_cetakkartu', $data);
    }
  }

  public function cetakKartuByID($where)
  {
    $data['anggota'] = $this->laporananggota_model->getAllByID($where);
    $data['title'] = "Cetak Kartu Perpus | SIPERPUS";

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
    $this->pdf->filename = "Cetak Cetak Kartu Perpus | SIPERPUS";
    $this->pdf->load_view('admin/laporananggota/laporananggota_cetakkartu', $data);
  }

  public function qrcode($where)
  {
    qrcode::png(
      $where,
      $outfile = false,
      $level = QR_ECLEVEL_H,
      $size = 6,
      $margin = 1

    );
  }
}
