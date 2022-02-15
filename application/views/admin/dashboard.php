<?php
// Untuk menghilangkan warning pada grafik bulan yang kosong
error_reporting(0)
?>

<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

<!-- Toast Berhasil logout -->
<button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnSuccess">Show live toast</button>
<div class="position-fixed bottom-0 start-50 pb-3" style="z-index: 11">
  <div id="ToastSuccess" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-check"></i> Selamat Datang, <b><?= $admin['nm_admin'] ?></b> <?= $this->session->flashdata('success'); ?>
    </div>
  </div>
</div>

<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3><i class="<?= $icon ?>"></i> <?= $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><span class="badge bg-white text-dark">Dashboard</span></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- End of Breadcrumb -->

<div class="row">
  <!-- Left Col-9 -->
  <div class="col-12 col-lg-9">
    <div class="row">
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon blue">
                  <i class="bi bi-person-circle" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Anggota</h6>
                <h6 class="font-extrabold mb-0"><?= $jumlahanggota; ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon purple">
                  <i class="bi bi-book" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Judul Buku</h6>
                <h6 class="font-extrabold mb-0"><?= $jumlahjudulbuku; ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon green">
                  <i class="bi bi-book" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Eksemplar</h6>
                <h6 class="font-extrabold mb-0"><?= $jumlaheksemplarbuku; ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon red">
                  <i class="bi bi-person-badge" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Admin</h6>
                <h6 class="font-extrabold mb-0"><?= $jumlahadmin; ?></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-12 col-md-12 col-xs-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><i class="bi bi-graph-up"></i> Grafik Peminjaman</h4>
          </div>
          <div class="card-body">
            <div id="chart-profile-visit"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-12 col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><i class="bi bi-graph-up"></i> Grafik Kas</h4>
              </div>
              <div class="card-body">
                <div id="kas"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-5 col-md-5">

            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><i class="bi bi-person-square"></i> 5 Pengunjung Terakhir</h4>
              </div>
              <!-- <div class="card-body"> -->
              <div class="card-content" style="margin-top: 12px;">
                <?php foreach ($pengunjung as $p) : ?>
                  <div class="recent-message d-flex px-4 pb-3">
                    <?php $file_gambar = './assets/img/anggota/' . $p['foto_anggota'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/anggota/') . $p['foto_anggota'] ?>" width="50px" alt="" class="img-zoomable">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/no_photo.jpg') ?>" width="50px" alt="">
                    <?php endif; ?>
                    <div class="name ms-4">
                      <h5 class="mb-1"><?= $p['nm_anggota']; ?></h5>
                      <h6 class="text-muted mb-0"><?= waktu_lalu($p['jam_kunjungan']) ?></h6>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
            <!-- </div> -->
          </div>
          <div class="col-12 col-xl-7 col-md-7">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><i class="bi bi-cloud-arrow-up-fill"></i> Peminjaman Terakhir</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn-sm active" id="pills-peminjamanall-tab" data-bs-toggle="pill" data-bs-target="#pills-peminjamanall" type="button" role="tab" aria-controls="pills-peminjamanall" aria-selected="true">Semua</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn-sm" id="pills-peminjamanbelumlunas-tab" data-bs-toggle="pill" data-bs-target="#pills-peminjamanbelumlunas" type="button" role="tab" aria-controls="pills-peminjamanbelumlunas" aria-selected="false">Belum Lunas</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn-sm" id="pills-peminjamanlunas-tab" data-bs-toggle="pill" data-bs-target="#pills-peminjamanlunas" type="button" role="tab" aria-controls="pills-peminjamanlunas" aria-selected="false">Lunas</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-peminjamanall" role="tabpanel" aria-labelledby="pills-peminjamanall-tab">
                    <?php if (!empty($peminjamansemua)) : ?>
                      <!-- Jika Ada Data -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Anggota</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($peminjamansemua as $ps) : ?>
                            <tr>
                              <td><?= $no; ?></td>
                              <td>
                                <?php $file_gambar = './assets/img/anggota/' . $ps['foto_anggota'];
                                if (file_exists($file_gambar)) : ?>
                                  <img src="<?= base_url('assets/img/anggota/') . $ps['foto_anggota'] ?>" width="50px" alt="" class="img-zoomable">
                                <?php else : ?>
                                  <img src="<?= base_url('assets/img/no_photo.jpg') ?>" width="50px" alt="">
                                <?php endif; ?>
                              </td>
                              <td><?= $ps['nm_anggota'] ?></td>
                              <td>
                                <a href="<?= base_url('admin/pengembalian/detail/') . $ps['id_pinjam']; ?>">
                                  <?php if ($ps['status'] == "Belum Lunas") : ?>
                                    <span class="badge bg-danger"><?= $ps['status']; ?></span>
                                  <?php else : ?>
                                    <span class="badge bg-success"><?= $ps['status']; ?></span>
                                  <?php endif; ?>
                                </a>
                              </td>
                            </tr>
                          <?php $no++;
                          endforeach; ?>
                        </tbody>
                      </table>

                    <?php else : ?>
                      <!-- Jika Data Kosong -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Anggota</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="4" class="text-center">Tidak ada data</td>
                          </tr>
                        </tbody>
                      </table>
                    <?php endif; ?>
                  </div>
                  <div class="tab-pane fade" id="pills-peminjamanbelumlunas" role="tabpanel" aria-labelledby="pills-peminjamanbelumlunas-tab">
                    <?php if (!empty($peminjamanbelumlunas)) : ?>
                      <!-- Jika Ada Data -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Anggota</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($peminjamanbelumlunas as $pbl) : ?>
                            <tr>
                              <td><?= $no; ?></td>
                              <td>
                                <?php $file_gambar = './assets/img/anggota/' . $pbl['foto_anggota'];
                                if (file_exists($file_gambar)) : ?>
                                  <img src="<?= base_url('assets/img/anggota/') . $pbl['foto_anggota'] ?>" width="50px" alt="" class="img-zoomable">
                                <?php else : ?>
                                  <img src="<?= base_url('assets/img/no_photo.jpg') ?>" width="50px" alt="">
                                <?php endif; ?>
                              </td>
                              <td><?= $pbl['nm_anggota'] ?></td>
                              <td>
                                <a href="<?= base_url('admin/pengembalian/detail/') . $pbl['id_pinjam']; ?>">
                                  <?php if ($pbl['status'] == "Belum Lunas") : ?>
                                    <span class="badge bg-danger"><?= $pbl['status']; ?></span>
                                  <?php else : ?>
                                    <span class="badge bg-success"><?= $pbl['status']; ?></span>
                                  <?php endif; ?>
                                </a>
                              </td>
                            </tr>
                          <?php $no++;
                          endforeach; ?>
                        </tbody>
                      </table>

                    <?php else : ?>
                      <!-- Jika Data Kosong -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Anggota</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="4" class="text-center">Tidak ada data</td>
                          </tr>
                        </tbody>
                      </table>
                    <?php endif; ?>
                  </div>
                  <div class="tab-pane fade" id="pills-peminjamanlunas" role="tabpanel" aria-labelledby="pills-peminjamanlunas-tab">
                    <?php if (!empty($peminjamanlunas)) : ?>
                      <!-- Jika Ada Data -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Anggota</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no = 1;
                          foreach ($peminjamanlunas as $pl) : ?>
                            <tr>
                              <td><?= $no; ?></td>
                              <td>
                                <?php $file_gambar = './assets/img/anggota/' . $pl['foto_anggota'];
                                if (file_exists($file_gambar)) : ?>
                                  <img src="<?= base_url('assets/img/anggota/') . $pl['foto_anggota'] ?>" width="50px" alt="" class="img-zoomable">
                                <?php else : ?>
                                  <img src="<?= base_url('assets/img/no_photo.jpg') ?>" width="50px" alt="">
                                <?php endif; ?>
                              </td>
                              <td><?= $pl['nm_anggota'] ?></td>
                              <td>
                                <a href="<?= base_url('admin/pengembalian/detail/') . $pl['id_pinjam']; ?>">
                                  <?php if ($pl['status'] == "Belum Lunas") : ?>
                                    <span class="badge bg-danger"><?= $pl['status']; ?></span>
                                  <?php else : ?>
                                    <span class="badge bg-success"><?= $pl['status']; ?></span>
                                  <?php endif; ?>
                                </a>
                              </td>
                            </tr>
                          <?php $no++;
                          endforeach; ?>
                        </tbody>
                      </table>

                    <?php else : ?>
                      <!-- Jika Data Kosong -->
                      <table class="table">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Foto</th>
                            <th>Nama Anggota</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td colspan="4" class="text-center">Tidak ada data</td>
                          </tr>
                        </tbody>
                      </table>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-12 col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><i class="bi bi-person-square"></i> 5 Buku Terfavorit</h4>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Cover Buku</th>
                  <th>Judul Buku</th>
                  <th>Pengarang</th>
                  <th>Total Dipinjam</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($bukuterfavorit as $bt) :
                  if ($bt['qty_pinjam'] >= 1) :
                ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td>
                        <?php
                        $file_gambar = './assets/img/buku/' . $bt['gambar_buku'];
                        if (file_exists($file_gambar)) : ?>
                          <img src="<?= base_url('assets/img/buku/') . $bt['gambar_buku'] ?>" class="img-zoomable" width="70px" alt="">
                        <?php else : ?>
                          <img src="<?= base_url('assets/img/no_book.jpg') ?>" width="70px" alt="">
                        <?php endif; ?>
                      </td>
                      <td><?= $bt['judul_buku']; ?></td>
                      <td><?= $bt['pengarang']; ?></td>
                      <td class="text-center"><?= $bt['qty_pinjam'] ?> eks</td>
                    </tr>
                  <?php endif; ?>
                <?php $no++;
                endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End of Left Col-9 -->

  <!-- Right Col-3 -->
  <div class="col-12 col-lg-3">
    <div class="card">
      <div class="card-body py-4">
        <div class="d-flex align-items-center">
          <img src="<?= base_url('assets/img/logo.png') ?>" width="100%">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-12 col-md-12 col-xs-12">
        <!-- <div class="card">
      <div class="card-header">
        <h4  class="card-title">Peminjaman Terakhir</h4>
      </div>
      <div class="card-content pb-4">
        <div class="recent-message d-flex px-4 py-3">
          <div class="avatar avatar-lg">
            <img src="assets/images/faces/4.jpg">
          </div>
          <div class="name ms-4">
            <h5 class="mb-1">Hank Schrader</h5>
            <h6 class="text-muted mb-0">@johnducky</h6>
          </div>
        </div>
        <div class="recent-message d-flex px-4 py-3">
          <div class="avatar avatar-lg">
            <img src="assets/images/faces/5.jpg">
          </div>
          <div class="name ms-4">
            <h5 class="mb-1">Dean Winchester</h5>
            <h6 class="text-muted mb-0">@imdean</h6>
          </div>
        </div>
        <div class="recent-message d-flex px-4 py-3">
          <div class="avatar avatar-lg">
            <img src="assets/images/faces/1.jpg">
          </div>
          <div class="name ms-4">
            <h5 class="mb-1">John Dodol</h5>
            <h6 class="text-muted mb-0">@dodoljohn</h6>
          </div>
        </div>
        <div class="px-4">
          <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
            Conversation</button>
        </div>
      </div>
    </div> -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><i class="bi bi-calendar2-week-fill"></i> Kalender</h4>
          </div>
          <div class="card-body">
            <div id="kalender" class="calendar-container" style="width: 100%;"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><i class="bi bi-person-square"></i> Jumlah Pengunjung</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-sm active" id="pills-hariini-tab" data-bs-toggle="pill" data-bs-target="#pills-hariini" type="button" role="tab" aria-controls="pills-hariini" aria-selected="true">Hari Ini</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-sm" id="pills-keseluruhan-tab" data-bs-toggle="pill" data-bs-target="#pills-keseluruhan" type="button" role="tab" aria-controls="pills-keseluruhan" aria-selected="false">Keseluruhan</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-hariini" role="tabpanel" aria-labelledby="pills-hariini-tab">
                    <div id="pengunjung-hariini"></div>
                  </div>
                  <div class="tab-pane fade" id="pills-keseluruhan" role="tabpanel" aria-labelledby="pills-keseluruhan-tab">
                    <div id="pengunjung-keseluruhan"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End of Right Col-3 -->

</div>