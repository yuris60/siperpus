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
        <h4 class="card-title"><i class="fas fa-plus"></i> Tambah Data <h4>
      </div>
      <div class="card-body">

        <div class="form-group">
          <label>Pilih Kelas</label>
          <div class="row">
            <div class="col-4">
              <select name="tingkatan_kelas" class="form-select" id="">
                <option value="">-== Pilih Tingkatan Kelas ==-</option>
                <option value="1">X</option>
                <option value="2">XI</option>
                <option value="3">XII</option>
              </select>
            </div>
            <div class="col-4">
              <select name="id_jurusan" class="form-select" id="">
                <option value="">-== Pilih Jurusan ==-</option>
                <?php foreach ($jurusan as $j) : ?>
                  <option value="<?= $j['id_jurusan'] ?>"><?= $j['nm_jurusan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-4">
              <select name="nomor_kelas" class="form-select" id="">
                <option value="">-== Pilih Nomor Kelas ==-</option>
                <?php for ($i = 1; $i <= 5; $i++) : ?>
                  <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>
        </div>

        <code>Contoh : X Keperawatan 1</code>

      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
        <a href="<?= base_url() . 'admin/' . strtolower($menu) ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a>
        <!-- <a href="<?= base_url() . 'admin/kelas' ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a> -->
      </div>
    </div>
  </form>

</section>
<!-- End of Container -->