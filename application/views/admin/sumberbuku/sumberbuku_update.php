<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3><?= $submenu . " " . $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"><span class="badge bg-primary text-white">Dashboard</span></a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/kategoribuku') ?>"><span class="badge bg-primary text-white"><?= $menu ?></span></a></li>
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
      Silahkan isi formulir <strong><?= strtoupper($menu) ?></strong> dengan baik dan benar.
    </div>
  </div>
</div>

<!-- Container -->
<section class="section">

  <form action="" method="POST" autocomplete="off">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"><i class="fas fa-plus"></i> Edit Data <h4>
      </div>
      <div class="card-body">

        <input type="hidden" name="id_sumberbuku" value="<?= $sumberbuku['id_sumberbuku']; ?>">

        <div class=" form-group">
          <label>Kode Jenis Buku</label>
          <input type="text" maxlength="1" autocapitalize="on" class="form-control <?= form_error('kode_sumberbuku') ? 'is-invalid' : '' ?>" name="kode_sumberbuku" id="kode_sumberbuku" value="<?= $sumberbuku['kode_sumberbuku']; ?>">
          <div class=" invalid-feedback">
            <?= form_error('kode_sumberbuku'); ?>
          </div>
        </div>

        <div class="form-group">
          <label>Nama Jenis Buku</label>
          <input type="text" class="form-control <?= form_error('nm_sumberbuku') ? 'is-invalid' : '' ?>" name="nm_sumberbuku" id="nm_sumberbuku" value="<?= $sumberbuku['nm_sumberbuku']; ?>">
          <div class="invalid-feedback">
            <?= form_error('nm_sumberbuku'); ?>
          </div>
        </div>

      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Perbarui</button>
        <!-- <a href="<?= base_url() . 'admin/' . strtolower($menu) ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a> -->
        <a href="<?= base_url() . 'sumberbuku' ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a>
      </div>
    </div>
  </form>

</section>
<!-- End of Container -->