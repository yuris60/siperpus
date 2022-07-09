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
          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"><span class="badge bg-primary text-white text-dark">Dashboard</span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-dark"><?= $menu ?></span></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- End of Breadcrumb -->

<!-- Alert -->
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="alert alert-info" role="alert">
      <h4 class="alert-info"><i class="fas fa-info"></i> Informasi</h4>
      Berikut ini adalah data <strong><?= strtoupper($menu) ?></strong> yang sudah tersimpan dalam database.
    </div>
  </div>
</div>
<!-- End of Alert -->

<!-- Toast -->
<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

<button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnSuccess">Show live toast</button>
<div class="position-fixed bottom-0 start-50 pb-3" style="z-index: 11">
  <div id="ToastSuccess" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-check"></i> <b>Selamat, </b>Data Berhasil <?= $this->session->flashdata('success'); ?>
    </div>
  </div>
</div>

<!-- Container -->
<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-database"></i> Data
        <a href="<?= base_url('admin/buku/create') ?>" class="float-end"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data"><i class="fas fa-plus"></i></button></a>
      </h4>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="table1">
        <thead>
          <tr class="table-secondary">
            <th>No</th>
            <th>QR Code</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Gambar Buku</th>
            <th width="120px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($buku as $b) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td>
                <?php
                // require_once(base_url('assets/vendor/phpqrcodegenerator/qrlib.php'));
                // QRcode::png($b['id_buku'], "M", 2, 2);
                // $qrCode = new Endroid\QrCode\QrCode($b['id_buku']);
                // header("Content-Type: image/png");
                // $params['data'] = 'tes';
                // $this->ciqrcode->generate($params);
                ?>
                <img src="<?= site_url('admin/buku/qrcode/') . $b['id_buku'] ?>" class="img-zoomable" width="50px" alt="">
              </td>
              <td><?= $b['judul_buku']; ?></td>
              <td><?= $b['pengarang']; ?></td>
              <td><?= $b['penerbit']; ?></td>
              <td><?= $b['thn_terbit']; ?></td>
              <td>
                <?php
                $file_gambar = './assets/img/buku/' . $b['gambar_buku'];
                if (file_exists($file_gambar)) : ?>
                  <img src="<?= base_url('assets/img/buku/') . $b['gambar_buku'] ?>" class="img-zoomable" width="45px" alt="">
                  <!-- Gambar Ada -->
                <?php else : ?>
                  <img src="<?= base_url('assets/img/no_book.jpg') ?>" width="45px" class="img-zoomable" alt="">
                  <!-- Gambar Tidak Ada -->
                <?php endif; ?>
              </td>
              <td>
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalBuku<?= $b['id_buku']; ?>">
                  <button class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Buku"><i class="fas fa-info-circle"></i></button>
                </a>
                <a href="<?= base_url('admin/buku/update/') . $b['id_buku']; ?>">
                  <button class="btn btn-warning btn-sm text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Perbarui Data"><i class="fas fa-edit"></i></button>
                </a>
                <a href="<?= base_url('admin/buku/delete/') . $b['id_buku']; ?>" class="tombol-hapus">
                  <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></button>
                </a>
              </td>
            </tr>
          <?php $no++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- End of Container -->

<!-- Modal -->
<?php foreach ($buku_join as $bj) : ?>
  <div class="modal fade" id="modalBuku<?= $bj['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-book"></i> Detail Buku</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table table-striped mb-0">
            <tbody style="font-size: 14px;">
              <tr>
                <td colspan="3" class="bg-secondary text-center">
                  <?php $file_gambar = './assets/img/buku/' . $bj['gambar_buku'];
                  if (file_exists($file_gambar)) : ?>
                    <img src="<?= base_url('assets/img/buku/') . $bj['gambar_buku'] ?>" class="mx-auto img-zoomable" width="80px" alt="">
                  <?php else : ?>
                    <img src="<?= base_url('assets/img/no_book.jpg') ?>" class="mx-auto" width="80px" alt="">
                  <?php endif; ?>
                </td>
              </tr>
              <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><?= $bj['judul_buku']; ?></td>
              </tr>
              <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><?= $bj['pengarang']; ?></td>
              </tr>
              <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td><?= $bj['penerbit']; ?></td>
              </tr>
              <tr>
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><?= $bj['thn_terbit']; ?></td>
              </tr>
              <tr>
                <td>ISBN</td>
                <td>:</td>
                <td><?= $bj['isbn']; ?></td>
              </tr>
              <tr>
                <td>Kode DDC</td>
                <td>:</td>
                <td><?= $bj['kode_ddc'] . " - " . $bj['kategori_ddc']; ?></td>
              </tr>
              <tr>
                <td>Kategori Buku</td>
                <td>:</td>
                <td><?= $bj['nm_kategoribuku']; ?></td>
              </tr>
              <tr>
                <td colspan="3">
                  <h4 class="text-center">
                    <?php if ($bj['stok_buku'] > 0) : ?>
                      <div class="badge bg-success text-white">Stok : <?= $bj['stok_buku']; ?></div>
                    <?php else : ?>
                      <div class="badge bg-danger text-white">Stok : <?= $bj['stok_buku']; ?></div>
                    <?php endif; ?>
                    <div class="badge bg-secondary text-white">Rak : <?= $bj['rak_buku']; ?></div>
                  </h4>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- End Modal -->