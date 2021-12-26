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

<form action="" method="POST" autocomplete="off">
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="fas fa-image"></i> Gambar Buku <h4>
        </div>
        <div class="card-body">
          <input type="file" name="gambar_buku" class="image-crop-filepond" image-crop-aspect-ratio="3:4">
          <code>(*) Gambar Ukuran 3x4</code>
        </div>
        <div class="card-footer">

        </div>
      </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
      <!-- Container -->
      <section class="section">


        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><i class="fas fa-plus"></i> Index Buku <code>(*)</code>
              <h4>
          </div>
          <div class="card-body">

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Judul Buku</label>
              <div class="col-sm-9">
                <input type="text" maxlength="100" autofocus class="form-control <?= form_error('judul_buku') ? 'is-invalid' : '' ?>" name="judul_buku" id="judul_buku" value="<?php echo set_value('judul_buku'); ?>">
                <div class="invalid-feedback">
                  <?= form_error('judul_buku'); ?>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Penerbit</label>
              <div class="col-sm-9">
                <input type="text" maxlength="50" class="form-control <?= form_error('penerbit') ? 'is-invalid' : '' ?>" name="penerbit" id="penerbit" value="<?php echo set_value('penerbit'); ?>">
                <div class="invalid-feedback">
                  <?= form_error('penerbit'); ?>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Pengarang</label>
              <div class="col-sm-9">
                <input type="text" maxlength="50" class="form-control <?= form_error('pengarang') ? 'is-invalid' : '' ?>" name="pengarang" id="pengarang" value="<?php echo set_value('pengarang'); ?>">
                <div class="invalid-feedback">
                  <?= form_error('pengarang'); ?>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tahun Terbit</label>
              <div class="col-sm-9">
                <input type="number" min="1990" maxlength="4" class="form-control datepicker-tahunan <?= form_error('thn_terbit') ? 'is-invalid' : '' ?>" name="thn_terbit" id="thn_terbit" value="<?php echo set_value('thn_terbit'); ?>" readonly>
                <div class="invalid-feedback">
                  <?= form_error('thn_terbit'); ?>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Klasifikasi DDC</label>
              <div class="col-sm-9">
                <select name="id_ddc" id="id_ddc" class="form-select">
                  <option value="">-== Pilih Disini ==-</option>
                  <?php foreach ($ddc as $d) : ?>
                    <option value="<?= $d['id_ddc'] ?>"><?= $d['kode_ddc'] ?> - <?= $d['kategori_ddc'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Jumlah Eksemplar</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <input type="number" min="1" maxlength="3" class="form-control <?= form_error('jml_eksemplar') ? 'is-invalid' : '' ?>" name="jml_eksemplar" id="jml_eksemplar" value="<?php echo set_value('jml_eksemplar'); ?>">
                  <span class="input-group-text">Eksemplar</span>
                  <div class="invalid-feedback">
                    <?= form_error('jml_halaman'); ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Tanggal Penerimaan</label>
              <div class="col-sm-9">
                <div class="input-group">
                  <input type="text" min=0 class="form-control datepicker <?= form_error('tgl_penerimaan') ? 'is-invalid' : '' ?>" name="tgl_penerimaan" id="tgl_penerimaan" value="<?= date('Y-m-d') ?>" readonly>
                  <div class="invalid-feedback">
                    <?= form_error('tgl_penerimaan'); ?>
                  </div>
                </div>
              </div>
            </div>

            <code>(*) Wajib Diisi</code>

          </div>
        </div>

    </div>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><i class="fas fa-plus"></i> Spesifikasi Buku<h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jenis Buku</label>
                  <div class="col-sm-8">
                    <select name="id_ddc" id="id_ddc" class="form-select">
                      <option value="">-== Pilih Disini ==-</option>
                      <?php foreach ($jenisbuku as $jb) : ?>
                        <option value="<?= $jb['id_jenisbuku'] ?>"><?= $jb['nm_jenisbuku'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Sumber Buku</label>
                  <div class="col-sm-8">
                    <select name="id_ddc" id="id_ddc" class="form-select">
                      <option value="">-== Pilih Disini ==-</option>
                      <?php foreach ($sumberbuku as $sb) : ?>
                        <option value="<?= $sb['id_sumberbuku'] ?>"><?= $sb['nm_sumberbuku'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">ISBN</label>
                  <div class="col-sm-8">
                    <input type="text" maxlength="17" class="form-control <?= form_error('isbn') ? 'is-invalid' : '' ?>" name="isbn" id="isbn" value="<?php echo set_value('isbn'); ?>">
                    <div class="invalid-feedback">
                      <?= form_error('isbn'); ?>
                    </div>
                  </div>
                </div>

              </div>

              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Jumlah Halaman</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input type="number" min="1" maxlength="3" class="form-control <?= form_error('jml_halaman') ? 'is-invalid' : '' ?>" name="jml_halaman" id="jml_halaman" value="<?php echo set_value('jml_halaman'); ?>">
                      <span class="input-group-text">Halaman</span>
                      <div class="invalid-feedback">
                        <?= form_error('jml_halaman'); ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tinggi Buku</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <input type="number" min="1" maxlength="3" class="form-control <?= form_error('tinggi_buku') ? 'is-invalid' : '' ?>" name="tinggi_buku" id="tinggi_buku" value="<?php echo set_value('tinggi_buku'); ?>">
                      <span class="input-group-text">cm</span>
                      <div class="invalid-feedback">
                        <?= form_error('tinggi_buku'); ?>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Rak Buku</label>
                  <div class="col-sm-8">
                    <div class="input-group">
                      <span class="input-group-text">Rak ke-</span>
                      <input type="number" min="1" maxlength="3" class="form-control <?= form_error('rak_buku') ? 'is-invalid' : '' ?>" name="rak_buku" id="rak_buku" value="<?php echo set_value('rak_buku'); ?>">
                      <div class="invalid-feedback">
                        <?= form_error('rak_buku'); ?>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
              <!-- <a href="<?= base_url() . 'admin/' . strtolower($menu) ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a> -->
              <a href="<?= base_url() . 'admin/buku' ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a>
            </div>
          </div>
        </div>
      </div>
</form>

</section>
<!-- End of Container -->
</div>
</div>