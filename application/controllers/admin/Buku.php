<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Buku extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/buku_model');
    $this->load->library('qrcode/ciqrcode');
    $this->load->model('admin/login_model');
    $this->load->library('upload');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Buku";
    $data['menu'] = "Buku";
    $data['icon'] = "bi bi-book-half";

    $data['buku'] = $this->buku_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/buku/buku_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function create()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Tambah Buku";
    $data['menu'] = "Buku";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-book-half";

    $this->form_validation->set_rules('id_buku', 'ID Buku', 'required|trim');
    $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|trim');
    $this->form_validation->set_rules('penerbit', 'Penerbit', 'required|trim');
    $this->form_validation->set_rules('pengarang', 'Pengarang', 'required|trim');
    $this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|trim');

    $data['ddc'] = $this->buku_model->getDdcAll();
    $data['sumberbuku'] = $this->buku_model->getSumberBukuAll();
    $data['jenisbuku'] = $this->buku_model->getJenisBukuAll();
    $data['id_buku'] = $this->buku_model->autonumber();
    $data['kategoribuku'] = $this->buku_model->getKategoriBukuAll();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/buku/buku_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      if (!empty($_FILES['gambar_buku']['name'])) { //jika akan mengubah gambar
        $namafile = $this->input->post('id_buku');
        $config['upload_path'] = './assets/img/buku/'; //path folder
        $config['allowed_types'] = 'jpg|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['file_name'] = $namafile;
        $config['overwrite'] = true;

        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar_buku')) {
          $gbr = $this->upload->data();
          $filesimpan = $gbr['file_name']; //Mengambil file name dari gambar yang diupload
          $this->buku_model->save($filesimpan);
          $this->session->set_flashdata('success', 'Disimpan');
          redirect('admin/buku');
        } else {
          echo "Gambar Gagal Upload. Gambar harus bertipe jpg|jpeg";
        }
      } else { //jika tidak mengubah gambar
        $this->buku_model->save();
        $this->session->set_flashdata('success', 'Disimpan');
        redirect('admin/buku');
      }
    }
  }

  public function update($where)
  {
    $where = $this->uri->segment(4);
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Perbarui Buku";
    $data['menu'] = "Buku";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-book-half";

    $this->form_validation->set_rules('id_buku', 'ID Buku', 'required|trim');
    $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required|trim');
    $this->form_validation->set_rules('penerbit', 'Penerbit', 'required|trim');
    $this->form_validation->set_rules('pengarang', 'Pengarang', 'required|trim');
    $this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|trim');

    $data['buku'] = $this->buku_model->getById($where);
    $data['ddc'] = $this->buku_model->getDdcAll();
    $data['sumberbuku'] = $this->buku_model->getSumberBukuAll();
    $data['jenisbuku'] = $this->buku_model->getJenisBukuAll();

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/buku/buku_update', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      if (!empty($_FILES['gambar_buku']['name'])) { //jika akan mengubah gambar
        $namafile = $this->input->post('id_buku');
        $config['upload_path'] = './assets/img/buku/'; //path folder
        $config['allowed_types'] = 'jpg|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['file_name'] = $namafile;
        $config['overwrite'] = true;

        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar_buku')) {
          $gbr = $this->upload->data();
          $filesimpan = $gbr['file_name']; //Mengambil file name dari gambar yang diupload
          $this->buku_model->update($where, $filesimpan);
          $this->session->set_flashdata('success', 'Diperbarui');
          redirect('admin/buku');
        } else {
          echo "Gambar Gagal Upload. Gambar harus bertipe jpg|jpeg";
        }
      } else { //jika tidak mengubah gambar
        $this->buku_model->update($where);
        $this->session->set_flashdata('success', 'Diperbarui');
        redirect('admin/buku');
      }
    }
  }

  public function delete($where)
  {
    $where = ['id_buku' => $this->uri->segment(4)];
    $this->buku_model->delete($where);

    // hapus file
    unlink(FCPATH . "/assets/img/buku/" . $where);

    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/buku');
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
