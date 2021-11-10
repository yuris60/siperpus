<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3 class="text-white"><i class="<?= $icon ?>"></i> <?= $submenu . " " . $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>"><span class="badge bg-white text-dark">Dashboard</span></a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('buku') ?>"><span class="badge bg-white text-dark"><?= $menu ?></span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-white"><?= $submenu ?></span></li>
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
      Silahkan isi formulir <strong><?= strtoupper($menu) ?></strong> dengan baik dan benar.
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"><i class="fas fa-image"></i> Gambar Buku <h4>
      </div>
      <div class="card-body">
        <input type="file" name="gambar_buku" class="image-exif-filepond">
      </div>
    </div>
  </div>
  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
    <!-- Container -->
    <section class="section">

      <form action="" method="POST" autocomplete="off">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><i class="fas fa-plus"></i> Tambah Data <h4>
          </div>
          <div class="card-body">

            <div class="form-group">
              <label>Judul Buku</label>
              <input type="text" maxlength="1" autocapitalize="on" class="form-control <?= form_error('judul_buku') ? 'is-invalid' : '' ?>" name="judul_buku" id="judul_buku" value="<?php echo set_value('judul_buku'); ?>">
              <div class="invalid-feedback">
                <?= form_error('judul_buku'); ?>
              </div>
            </div>

            <div class="form-group">
              <label>Nama Jenis Buku</label>
              <input type="text" class="form-control <?= form_error('penerbit') ? 'is-invalid' : '' ?>" name="penerbit" id="penerbit" value="<?php echo set_value('penerbit'); ?>">
              <div class="invalid-feedback">
                <?= form_error('penerbit'); ?>
              </div>
            </div>

            <div class="form-group">
              <label>Nama Jenis Buku</label>
              <input type="text" class="form-control <?= form_error('pengarang') ? 'is-invalid' : '' ?>" name="pengarang" id="pengarang" value="<?php echo set_value('pengarang'); ?>">
              <div class="invalid-feedback">
                <?= form_error('pengarang'); ?>
              </div>
            </div>

          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
            <!-- <a href="<?= base_url() . 'admin/' . strtolower($menu) ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a> -->
            <a href="<?= base_url() . 'buku' ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a>
          </div>
        </div>
      </form>

    </section>
    <!-- End of Container -->
  </div>
</div>