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
          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"><span class="badge bg-primary text-white">Dashboard</span></a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/kategoribuku') ?>"><span class="badge bg-primary text-white"><?= $menu ?></span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-dark"><?= $submenu ?></span></li>
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
      Silahkan isi formulir <strong><?= strtoupper($menu) ?></strong> dengan baik dan benar.
    </div>
  </div>
</div>
<!-- End of Alert -->

<!-- Toast -->
<div class="flash-data-gagal-username" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>

<button type="button" class="btn btn-danger" style="display: none;" id="ToastBtnGagalUsername">Show live toast</button>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="toastGagalUsername" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-times"></i> <b>Maaf, </b>Nama username sudah digunakan <?= $this->session->flashdata('gagal'); ?>
    </div>
  </div>
</div>

<!-- Container -->
<section class="section">

  <form action="" method="POST" autocomplete="off">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"><i class="fas fa-plus"></i> Tambah Data <h4>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : '' ?>" name="username" id="username" value="<?php echo set_value('username'); ?>" autofocus>
          <div class="invalid-feedback">
            <?= form_error('username'); ?>
          </div>
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : '' ?>" name="password" id="password" value="<?php echo set_value('password'); ?>">
          <div class="invalid-feedback">
            <?= form_error('password'); ?>
          </div>
        </div>

        <div class="form-group">
          <label>Konfirmasi Password</label>
          <input type="password" class="form-control <?= form_error('passconf') ? 'is-invalid' : '' ?>" name="passconf" id="passconf" value="<?php echo set_value('passconf'); ?>">
          <div class="invalid-feedback">
            <?= form_error('passconf'); ?>
          </div>
        </div>

        <div class="form-group">
          <label>Nama Admin</label>
          <input type="text" class="form-control <?= form_error('nm_admin') ? 'is-invalid' : '' ?>" name="nm_admin" id="nm_admin" value="<?php echo set_value('nm_admin'); ?>">
          <div class="invalid-feedback">
            <?= form_error('nm_admin'); ?>
          </div>
        </div>

        <div class="form-group">
          <label>Akses</label>
          <input type="text" class="form-control <?= form_error('akses') ? 'is-invalid' : '' ?>" name="akses" id="akses" value="Pustakawan" readonly>
          <div class="invalid-feedback">
            <?= form_error('akses'); ?>
          </div>
        </div>

      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
        <a href="<?= base_url() . 'admin/' . strtolower($menu) ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a>
        <!-- <a href="<?= base_url() . 'admin/kategoribuku' ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a> -->
      </div>
    </div>
  </form>

</section>
<!-- End of Container -->