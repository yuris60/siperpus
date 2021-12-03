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
          <li class="breadcrumb-item"><a href="<?= base_url('admin/peminjaman') ?>"><span class="badge bg-primary text-white"><?= $menu ?></span></a></li>
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
      Silahkan scan barcode kartu anggota pada menu <strong><?= strtoupper($menu) ?></strong> dengan posisi yang baik dan benar.
    </div>
  </div>
</div>

<!-- Toast -->
<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-gagal-pinjam" data-flashdata="<?= $this->session->flashdata('gagal-pinjam'); ?>"></div>
<div class="flash-data-gagal-pinjam-buku" data-flashdata="<?= $this->session->flashdata('gagal-pinjam-buku'); ?>"></div>
<div class="flash-data-gagal-buku-kurang" data-flashdata="<?= $this->session->flashdata('gagal-buku-kurang'); ?>"></div>

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

<!-- Toast Gagal Pinjam Buku -->
<button type="button" class="btn btn-danger" style="display: none;" id="ToastBtnGagalBukuKurang">Show live toast</button>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="ToastGagalBukuKurang" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-times"></i> <b>Maaf, </b>Stok Buku <?= $this->session->flashdata('gagal-buku-kurang'); ?>
    </div>
  </div>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-9">
      <div class="row">
        <div class="col-lg-5">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title"><img src="<?= base_url('assets/svg/qr-code.svg') ?>"> Scan QR Code Buku</h5>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <video id="preview" width="100%"></video>
                <input type="hidden" name="id_buku" id="id_buku" class="form-control" readonly>
                <input type="hidden" name="id_pinjam" value="<?= $anggota['id_pinjam'] ?>">
              </form>

              <button id="play" class="btn btn-success btn-block" onclick="play()"><i class="bi bi-play-circle"></i> Play Camera</button>
              <button id="stop" class="btn btn-danger btn-block" onclick="stop()"><i class="bi bi-stop-circle"></i> Stop Camera</button>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title"><i class="bi bi-book"></i> Buku yang Dipinjam</h5>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover" style="font-size: 14px; margin-bottom: -20px;">
                <thead>
                  <tr class="table-secondary">
                    <th width="30px">No</th>
                    <th width="30px">Gambar</th>
                    <th width="65px">Judul Buku</th>
                    <th width="75px">Qty</th>
                    <th width="80px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($detail_peminjaman as $dp) : ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td class="text-center">
                        <?php if (empty($dp['gambar'])) : ?>
                          <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="80%" alt="">
                        <?php else : ?>
                          <img src="<?= base_url('assets/img/buku/') . $dp['gambar_buku'] ?>" width="40%" alt="">
                        <?php endif; ?>
                      </td>
                      <td><?= $dp['judul_buku'] ?></td>
                      <td><input type="number" name="qty" id="qty" min=1 value="<?= $dp['qty_pinjam'] ?>" class="form-control"></td>
                      <td>
                        <a href="<?= base_url('admin/peminjaman/updateqtypinjam/') . $dp['id_pinjam'] . '/' . $dp['id_detailpinjam'] . '/' . $dp['id_buku'] . '/' . $dp['qty_pinjam']; ?>">
                          <button class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Perbarui Stok Pinjam"><i class="fas fa-sort-numeric-up"></i></button>
                        </a>
                        <a href="<?= base_url('admin/peminjaman/deletepeminjamanbuku/') . $dp['id_pinjam'] . '/' . $dp['id_detailpinjam'] . '/' . $dp['id_buku'] . '/' . $dp['qty_pinjam']  ?>" class="tombol-hapus">
                          <button class="btn btn-danger btn-sm" data-bs-autohide="false" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Peminjaman"><i class="fas fa-trash"></i></button>
                        </a>
                      </td>
                    </tr>
                  <?php $no++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- <div class="card-footer">
              <div style="margin-top: -20px;"><code><small>Note : Klik simpan jika qty pinjam>1 perjudul buku</small></code></div>
              <a href="<?= base_url('admin/peminjaman/updateqtypinjam/') ?>"></a>
              <button class="btn btn-success btn-block"><i class="fas fa-save"></i> Simpan</button>
            </div> -->
          </div>
        </div>
        <div class="row">
          <!-- Disini -->
          <div class="card border-primary">
            <div class="card-header">
              <h5 class="card-title"><i class="bi bi-book"></i> Pilih Buku Secara Manual</h5>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-striped table-hover" id="table1" style="font-size: 14px;">
                <thead>
                  <tr class="table-secondary">
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($buku as $b) : ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td class="text-center">
                        <?php if (empty($b['gambar'])) : ?>
                          <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="40%" alt="">
                        <?php else : ?>
                          <img src="<?= base_url('assets/img/buku/') . $b['gambar_buku'] ?>" width="40%" alt="">
                        <?php endif; ?>
                      </td>
                      <td><?= $b['judul_buku'] ?></td>
                      <td><?= $b['pengarang'] ?></td>
                      <td><?= $b['penerbit'] ?></td>
                      <td><?= $b['stok_buku'] ?></td>
                      <td>
                        <a href="<?= base_url('admin/peminjaman/savepeminjamanbukumanual/') . $anggota['id_pinjam'] . '/' . $b['id_buku']; ?>">
                          <button class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Pinjam Buku"><i class="bi bi-cart"></i></button>
                        </a>
                      </td>
                    </tr>
                  <?php $no++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-lg-3">
      <!-- <div class="card">
        <div class="card-header">
          <h4 class=""><img src="<?= base_url('assets/svg/qr-code.svg') ?>" alt="" style="margin-top: -5px;"> Scan QR Code Buku</h4>
        </div>
        <div class="card-body">
          <video id="preview" class="mt-2" width="100%"></video>
          <button id="play" class="btn btn-success btn-block" onclick="play()"><i class="bi bi-play-circle"></i> Play Camera</button>
          <button id="stop" class="btn btn-danger btn-block" onclick="stop()"><i class="bi bi-stop-circle"></i> Stop Camera</button>
        </div>
      </div> -->
      <div class="card">
        <div class="card-header">
          <h4 class=""><i class="fas fa-info"></i> Info Peminjaman</h4>
        </div>
        <div class="card-body">
          <?php if (file_exists(base_url('assets/img/anggota/') . $anggota['foto_anggota'])) : ?>
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
            <li class="list-group-item">
              <small><strong>Tanggal Pinjam</strong></small><br>
              <?= date('d M Y', strtotime($anggota['tgl_pinjam'])) ?>
            </li>
            <li class="list-group-item">
              <small><strong>Batas Pinjam</strong></small><br>
              <?php
              $tgl_pinjam = $anggota['tgl_pinjam'];
              $bataspinjam = date('d M Y', strtotime('+7 days', strtotime($tgl_pinjam))); //tambah tanggal sebanyak 
              echo $bataspinjam;
              ?>

            </li>
          </ul>
        </div>
      </div>

    </div>
</section>
<!-- End of Container -->