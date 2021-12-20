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
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="ToastSuccess" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-check"></i> <b>Selamat, </b>Data Berhasil <?= $this->session->flashdata('success'); ?>
    </div>
  </div>
</div>

<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-file"></i> Cetak
    </div>
    <div class="card-body">
      <a href="<?= base_url('admin/laporanbuku/cetakLabelBuku') ?>" target="_blank"><button class="btn btn-success"><i class="fas fa-tags"></i> Cetak Label Buku Keseluruhan</button></a>
    </div>
  </div>
</section>

<!-- Container -->
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
  <section class="section">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"><i class="fas fa-database"></i> Data
          <!-- <a href="<?= base_url('admin/buku/create') ?>" class="float-end"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data"><i class="fas fa-plus"></i></button></a> -->
          <button type="submit" class="btn btn-success float-end" name="submit_label_buku" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Label Buku Pilihan"><i class="fas fa-tags"></i></button>
        </h4>
      </div>
      <div class="card-body">
        <table class="table table-striped table-hover" id="table1">
          <thead>
            <tr class="table-secondary">
              <th></th>
              <th>No</th>
              <th>QR Code</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Gambar Buku</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($buku as $b) : ?>
              <tr>
                <td><input type="checkbox" id="checkbox1" class="form-check-input" name="cid_buku[]" value="<?= $b['id_buku'] ?>"></td>
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
                  <img src="<?= site_url('admin/buku/qrcode/') . $b['id_buku'] ?>" class="img-zoomable" width="40px" alt="">
                </td>
                <td><?= $b['judul_buku']; ?></td>
                <td><?= $b['pengarang']; ?></td>
                <td><?= $b['penerbit']; ?></td>
                <td><?= $b['thn_terbit']; ?></td>
                <td>
                  <?php if (empty($dp['gambar'])) : ?>
                    <figure style="width: 80%"><img src="<?= base_url('assets/img/contoh.jpg') ?>" width="30%" class="img-zoomable" alt=""></figure>
                  <?php else : ?>
                    <img src="<?= base_url('assets/img/buku/') . $dp['gambar_buku'] ?>" width="30%" alt="">
                  <?php endif; ?>
                </td>
              </tr>
            <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</form>


<!-- End of Container -->