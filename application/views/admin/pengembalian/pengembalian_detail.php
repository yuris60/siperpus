<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3><i class="<?= $icon ?>"></i> <?= $submenu . " " . $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"><span class="badge bg-primary text-white text-dark">Dashboard</span></a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/pengembalian') ?>"><span class="badge bg-primary text-white"><?= $menu ?></span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-dark"><?= $submenu ?></span></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- End of Breadcrumb -->

<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="alert alert-info" role="alert">
      <h4 class="alert-info"><i class="fas fa-info"></i> Informasi</h4>
      Berikut ini adalah peminjaman <strong><?= $anggota['nm_anggota'] ?></strong> pada tanggal <strong><?= tgl_indo($anggota['tgl_pinjam']) ?></strong>
    </div>
  </div>
</div>

<!-- Toast -->
<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-gagal-pinjam" data-flashdata="<?= $this->session->flashdata('gagal-pinjam'); ?>"></div>
<div class="flash-data-gagal-pinjam-buku" data-flashdata="<?= $this->session->flashdata('gagal-pinjam-buku'); ?>"></div>

<!-- Toast Berhasil Pinjam -->
<button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnSuccess">Show live toast</button>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="ToastSuccess" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-check"></i> <b>Selamat, </b>Data Berhasil <?= $this->session->flashdata('success'); ?>
    </div>
  </div>
</div>

<!-- Toast Gagal Pinjam -->
<button type="button" class="btn btn-danger" style="display: none;" id="ToastBtnGagalPinjam">Show live toast</button>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="ToastGagalPinjam" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-times"></i> <b>Maaf, </b>Data Buku Tidak <?= $this->session->flashdata('gagal-pinjam'); ?>
    </div>
  </div>
</div>

<!-- Toast Gagal Pinjam Buku -->
<button type="button" class="btn btn-danger" style="display: none;" id="ToastBtnGagalPinjamBuku">Show live toast</button>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="ToastGagalPinjamBuku" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-times"></i> <b>Maaf, </b>Buku Sudah <?= $this->session->flashdata('gagal-pinjam-buku'); ?>
    </div>
  </div>
</div>

<section class="section">
  <div class="row">

    <div class="col-lg-9">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title"><i class="bi bi-book"></i> Buku yang Dipinjam</h5>
        </div>
        <div class="card-body">
          <table class="table table-striped table-hover" style="font-size: 14px; margin-bottom: -20px;">
            <thead>
              <tr class="table-secondary">
                <th>No</th>
                <th width="50px">Gambar</th>
                <th>Judul Buku</th>
                <th>Qty</th>
                <th>Tgl Batas</th>
                <th>Tgl Pengembalian</th>
                <th>Keterlambatan</th>
                <th>Status Buku</th>
                <th width="100px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($detail_pengembalian as $dp) : ?>
                <tr>
                  <td><?= $no ?></td>
                  <td class="text-center">
                    <?php $file_gambar = './assets/img/buku/' . $dp['gambar_buku'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/buku/') . $dp['gambar_buku'] ?>" class="img-zoomable" width="100%" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="100%" class="img-zoomable" alt="">
                    <?php endif; ?>
                  </td>
                  <td><?= $dp['judul_buku'] ?></td>
                  <td><?= $dp['qty_pinjam'] ?></td>
                  <td><?= tgl_indo($dp['tgl_kembali']); ?></td>
                  <td>
                    <?php if ($dp['tgl_pengembalian'] != "0000-00-00 00:00:00") : ?>
                      <?= tgl_indo($dp['tgl_pengembalian']) ?>
                    <?php else : ?>
                      0000-00-00
                    <?php endif; ?>
                  </td>
                  <td class="text-center">
                    <?php
                    $hariini = date('Y-m-d');
                    $tgl_pinjam = date('Y-m-d', strtotime($dp['tgl_pinjam']));
                    // $bataspinjam = date('Y-m-d', strtotime('+7 days', strtotime($tgl_pinjam))); //tambah tanggal sebanyak 
                    $tgl_kembali = date('Y-m-d', strtotime($dp['tgl_kembali']));

                    $tgl1 = strtotime($hariini);
                    $tgl2 = strtotime($tgl_kembali);
                    $selisih = $tgl1 - $tgl2;
                    $selisihhari = $selisih / 60 / 60 / 24;
                    if ($selisihhari <= 0) {
                      $selisihhari = 0;
                    }
                    ?>

                    <?php if ($dp['status_buku'] == "Belum Kembali") : ?>
                      <?php if ($selisihhari >= 1) : ?>
                        <!-- Jika belum dikembalikan, maka hitung keterlambatan -->
                        <?= $selisihhari ?> Hari
                      <?php else : ?>
                        <?= $selisihhari ?> Hari
                      <?php endif; ?>
                    <?php else : ?>
                      <!-- Jika sudah dikembalikan, maka tampilkan database keterlambatan -->
                      <?= $dp['keterlambatan'] ?> Hari
                    <?php endif; ?>
                  </td>
                  <td class="text-center"><?= $dp['status_buku'] ?></td>
                  <?php if ($dp['status_buku'] == "Belum Kembali") : ?>
                    <td>
                      <a href="<?= base_url('admin/pengembalian/perpanjangpeminjaman/') . $dp['id_pinjam'] . "/" . $dp['id_detailpinjam'] . "/" . $dp['id_buku'] . "/" . $dp['qty_pinjam']; ?>" class="tombol-perpanjang-buku">
                        <button class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Perpanjang Peminjaman"><i class="bi bi-calendar-date"></i></button>
                      </a>
                      <a href="<?= base_url('admin/pengembalian/kembalikanbuku/') . $dp['id_pinjam'] . "/" . $dp['id_detailpinjam']  . "/" . $dp['id_buku'] . "/" . $dp['qty_pinjam'] . "/" . $selisihhari;  ?>" class="tombol-pengembalian-buku">
                        <button class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembalikan Buku"><i class="bi bi-check"></i></button>
                      </a>
                    </td>
                  <?php else : ?>
                    <td></td>
                  <?php endif; ?>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-header">
          <h4 class=""><i class="fas fa-info"></i> Info Peminjaman</h4>
        </div>
        <div class="card-body">
          <?php $file_gambar = './assets/img/anggota/' . $anggota['foto_anggota'];
          if (file_exists($file_gambar)) : ?>
            <img src="<?= base_url('assets/img/anggota/') . $anggota['foto_anggota'] ?>" width="100%" alt="">
          <?php else : ?>
            <img src="<?= base_url('assets/img/no_photo.jpg') ?>" width="100%" alt="">
          <?php endif; ?>
          <ul class="list-group" style="font-size: 15px;">
            <li class="list-group-item">
              <small><strong>NISN</strong></small><br>
              <?= $anggota['nisn'] ?>
            </li>
            <li class="list-group-item">
              <small><strong>Nama Anggota</strong></small><br>
              <?= $anggota['nm_anggota'] ?>
            </li>
            <li class="list-group-item">
              <small><strong>Jenis Kelamin</strong></small><br>
              <?php if ($anggota['jk_anggota'] == "L") : ?>
                Laki-Laki
              <?php else : ?>
                Perempuan
              <?php endif; ?>
            </li>
            <li class="list-group-item">
              <small><strong>Kelas</strong></small><br>
              <?php
              if ($anggota['tingkatan_kelas'] == 1) {
                $tingkatan_kelas = "X";
              } elseif ($anggota['tingkatan_kelas'] == 2) {
                $tingkatan_kelas = "XI";
              } else {
                $tingkatan_kelas = "XII";
              }
              echo $tingkatan_kelas . " " . $anggota['nm_jurusan'] . " " . $anggota['nomor_kelas']
              ?>
            </li>
            <li class="list-group-item bg-success text-white">
              <small><strong>Tanggal Pinjam</strong></small><br>
              <?= tgl_indo($anggota['tgl_pinjam']); ?>
            </li>
            <li class="list-group-item bg-danger text-white">
              <small><strong>Batas Pinjam</strong></small><br>
              <?php
              // $tgl_pinjam = $anggota['tgl_pinjam'];
              // $bataspinjam = date('d M Y', strtotime('+3 days', strtotime($tgl_pinjam))); //tambah tanggal sebanyak 
              // echo $bataspinjam;
              ?>
              <?= tgl_indo($anggota['tgl_bataspinjam']); ?>

            </li>
          </ul>
        </div>
      </div>

    </div>
</section>
<!-- End of Container -->