<?php
defined('BASEPATH') or exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Anggota extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/anggota_model');
    $this->load->model('admin/login_model');
    $this->load->library('upload');
  }

  public function index()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Anggota";
    $data['menu'] = "Anggota";
    $data['icon'] = "bi bi-person-circle";

    $data['anggota'] = $this->anggota_model->getAll();

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/anggota/anggota_index', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }

  public function create()
  {
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Tambah Anggota";
    $data['menu'] = "Anggota";
    $data['submenu'] = "Tambah Data";
    $data['icon'] = "bi bi-person-circle";

    $data['kelas'] = $this->anggota_model->getKelasAll();
    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/anggota/anggota_create', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      if (!empty($_FILES['foto_anggota']['name'])) { //jika akan mengubah gambar
        $namafile = $this->input->post('nisn');
        $config['upload_path'] = './assets/img/anggota/'; //path folder
        $config['allowed_types'] = 'jpg|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['file_name'] = $namafile;
        $config['overwrite'] = true;

        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto_anggota')) {
          $gbr = $this->upload->data();
          $filesimpan = $gbr['file_name']; //Mengambil file name dari gambar yang diupload
          $this->anggota_model->save($filesimpan);
          $this->session->set_flashdata('success', 'Disimpan');
          redirect('admin/anggota');
        } else {
          echo "Gambar Gagal Upload. Gambar harus bertipe jpg|jpeg";
        }
      } else { //jika tidak mengubah gambar
        $filesimpan = '';
        $this->anggota_model->save($filesimpan);
        $this->session->set_flashdata('success', 'Disimpan');
        redirect('admin/anggota');
      }
    }
  }

  public function update($where)
  {
    $where = $this->uri->segment(4);
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Perbarui Anggota";
    $data['menu'] = "Anggota";
    $data['submenu'] = "Perbarui Data";
    $data['icon'] = "bi bi-person-circle";

    $data['anggota'] = $this->anggota_model->getByID($where);
    $data['kelas'] = $this->anggota_model->getKelasAll();

    $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
    $this->form_validation->set_rules('nm_anggota', 'Nama Anggota', 'required|trim');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('admin/templates/header', $data);
      $this->load->view('admin/templates/sidebar');
      $this->load->view('admin/templates/topbar');
      $this->load->view('admin/anggota/anggota_update', $data);
      $this->load->view('admin/templates/footer');
      $this->load->view('admin/templates/js');
    } else {
      if (!empty($_FILES['foto_anggota']['name'])) { //jika akan mengubah gambar
        $namafile = $this->input->post('nisn');
        $config['upload_path'] = './assets/img/anggota/'; //path folder
        $config['allowed_types'] = 'jpg|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $config['file_name'] = $namafile;
        $config['overwrite'] = true;

        $this->upload->initialize($config);
        if ($this->upload->do_upload('foto_anggota')) {
          $gbr = $this->upload->data();
          $filesimpan = $gbr['file_name']; //Mengambil file name dari gambar yang diupload
          $this->anggota_model->update($where, $filesimpan);
          $this->session->set_flashdata('success', 'Diperbarui');
          redirect('admin/anggota');
        } else {
          echo "Gambar Gagal Upload. Gambar harus bertipe jpg|jpeg";
        }
      } else { //jika tidak mengubah gambar
        $this->anggota_model->update($where);
        $this->session->set_flashdata('success', 'Diperbarui');
        redirect('admin/anggota');
      }
    }
  }

  public function delete($where)
  {
    $where = ['nisn' => $this->uri->segment(4)];
    $this->anggota_model->delete($where);
    $this->session->set_flashdata('success', 'Dihapus');
    redirect('admin/anggota');
  }

  public function riwayatPeminjaman($where)
  {
    $where = $this->uri->segment(4);
    $data['admin'] = $this->login_model->getSession();
    $data['title'] = "Riwayat Peminjaman Anggota";
    $data['menu'] = "Anggota";
    $data['submenu'] = "Riwayat Peminjaman";
    $data['icon'] = "bi bi-person-circle";

    $data['anggota'] = $this->anggota_model->getById($where);
    $data['peminjaman'] = $this->anggota_model->getJoinPeminjaman($where);

    $this->load->view('admin/templates/header', $data);
    $this->load->view('admin/templates/sidebar');
    $this->load->view('admin/templates/topbar');
    $this->load->view('admin/anggota/anggota_riwayat', $data);
    $this->load->view('admin/templates/footer');
    $this->load->view('admin/templates/js');
  }
}
