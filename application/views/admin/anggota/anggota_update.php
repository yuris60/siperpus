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
          <li class="breadcrumb-item"><a href="<?= base_url('admin/anggota') ?>"><span class="badge bg-primary text-white"><?= $menu ?></span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-dark"><?= $submenu ?></span></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- End of Breadcrumb -->

<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="alert alert-warning text-dark" role="alert">
      <h4 class="alert-warning text-dark"><i class="fas fa-info"></i> Informasi</h4>
      Silahkan isi formulir <strong><?= strtoupper($menu) ?></strong> dengan baik dan benar.
    </div>
  </div>
</div>

<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="fas fa-image"></i> Foto Anggota <h4>
        </div>
        <div class="card-body">
          <?php $file_gambar = './assets/img/anggota/' . $anggota['foto_anggota'];
          if (file_exists($file_gambar)) : ?>
            <input type="file" name="foto_anggota" class="dropify" data-default-file="<?= base_url('assets/img/anggota/') . $anggota['foto_anggota'] ?>">
          <?php else : ?>
            <input type="file" name="foto_anggota" class="dropify" data-default-file="<?= base_url('assets/img/no_photo.jpg') ?>">
          <?php endif; ?>
        </div>
        <div class="card-footer text-center">
          <code>Ukuran foto 3x4</code>
        </div>
      </div>
    </div>

    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
      <!-- Container -->
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="fas fa-plus"></i> Anggota
            <h4>
        </div>
        <div class="card-body">

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">NISN</label>
            <div class="col-sm-9">
              <input type="text" maxlength="10" autofocus class="form-control <?= form_error('nisn') ? 'is-invalid' : '' ?>" name="nisn" id="nisn" value="<?= $anggota['nisn'] ?>">
              <div class="invalid-feedback">
                <?= form_error('nisn'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">NIK Anggota</label>
            <div class="col-sm-9">
              <input type="text" maxlength="16" class="form-control <?= form_error('nik_anggota') ? 'is-invalid' : '' ?>" name="nik_anggota" id="nik_anggota" value="<?= $anggota['nik_anggota'] ?>">
              <div class="invalid-feedback">
                <?= form_error('nik_anggota'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Anggota</label>
            <div class="col-sm-9">
              <input type="text" class="form-control <?= form_error('nm_anggota') ? 'is-invalid' : '' ?>" name="nm_anggota" id="nm_anggota" value="<?= $anggota['nm_anggota']; ?>">
              <div class="invalid-feedback">
                <?= form_error('nm_anggota'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kelas</label>
            <div class="col-sm-9">
              <select class="form-select" name="id_kelas">
                <option>-== Pilih Disini ==-</option>
                <?php foreach ($kelas as $k) : ?>
                  <?php if ($k['tingkatan_kelas'] == 1) {
                    $tingkatan_kelas = "X";
                  } elseif ($k['tingkatan_kelas'] == 2) {
                    $tingkatan_kelas = "XI";
                  } else {
                    $tingkatan_kelas = "XII";
                  }
                  $nm_kelas = $tingkatan_kelas . " " . $k['nm_jurusan'] . " " . $k['nomor_kelas'];

                  if ($anggota['id_kelas'] == $k['id_kelas']) :
                  ?>
                    <option value="<?= $k['id_kelas'] ?>" selected><?= $nm_kelas ?></option>
                  <?php else : ?>
                    <option value="<?= $k['id_kelas'] ?>"><?= $nm_kelas ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
              <?php if ($anggota['jk_anggota'] == "L") : ?>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk_anggota" id="flexRadioDefault1" value="L" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk_anggota" id="flexRadioDefault1" value="P">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Perempuan
                  </label>
                </div>
              <?php else : ?>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk_anggota" id="flexRadioDefault1" value="L">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Laki-laki
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jk_anggota" id="flexRadioDefault1" value="P" checked>
                  <label class="form-check-label" for="flexRadioDefault1">
                    Perempuan
                  </label>
                </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Tempat Tgl Lahir</label>
            <div class="col-sm-5">
              <input type="text" placeholder="ex : Purbalingga" class="form-control <?= form_error('tempatlahir_anggota') ? 'is-invalid' : '' ?>" name="tempatlahir_anggota" id="tempatlahir_anggota" value="<?= $anggota['tempatlahir_anggota']; ?>">
              <div class="invalid-feedback">
                <?= form_error('tempatlahir_anggota'); ?>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="input-group">
                <input type="text" min=0 class="form-control datepicker <?= form_error('tgl_lahir_anggota') ? 'is-invalid' : '' ?>" name="tgl_lahir_anggota" id="tgl_lahir_anggota" value="<?= $anggota['tgllahir_anggota'] ?>" readonly>
                <div class="invalid-feedback">
                  <?= form_error('tgl_lahir_anggota'); ?>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Agama</label>
            <div class="col-sm-9">
              <select class="form-select" name="agama_anggota">
                <option>-== Pilih Disini ==-</option>
                <?php
                $agama = array('Islam', 'Kristen Protestan', 'Kristen Katholik', 'Buddha', 'Hindu', 'Konghucu');
                foreach ($agama as $a) :
                ?>
                  <?php
                  if ($anggota['agama_anggota'] == $a) :
                  ?>
                    <option value="<?= $anggota['agama_anggota'] ?>" selected><?= $anggota['agama_anggota'] ?></option>
                  <?php else : ?>
                    <option value="<?= $anggota['agama_anggota'] ?>"><?= $anggota['agama_anggota'] ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="fas fa-home"></i> Alamat<h4>
        </div>
        <div class="card-body">

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <textarea name="alamat_anggota" id="alamat_anggota" class="form-control"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">RT</label>
            <div class="col-sm-9">
              <input type="text" placeholder="ex : 03" maxlength="3" class="form-control <?= form_error('rt') ? 'is-invalid' : '' ?>" name="rt" id="rt" value="<?= $anggota['rt']; ?>">
              <div class="invalid-feedback">
                <?= form_error('rt'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">RW</label>
            <div class="col-sm-9">
              <input type="text" placeholder="ex : 15" maxlength="3" class="form-control <?= form_error('rw') ? 'is-invalid' : '' ?>" name="rw" id="rw" value="<?= $anggota['rw']; ?>">
              <div class="invalid-feedback">
                <?= form_error('rw'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Dusun</label>
            <div class="col-sm-9">
              <input type="text" class="form-control <?= form_error('dusun') ? 'is-invalid' : '' ?>" name="dusun" id="dusun" value="<?= $anggota['dusun']; ?>">
              <div class="invalid-feedback">
                <?= form_error('dusun'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kelurahan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control <?= form_error('kelurahan') ? 'is-invalid' : '' ?>" name="kelurahan" id="kelurahan" value="<?= $anggota['kelurahan']; ?>">
              <div class="invalid-feedback">
                <?= form_error('kelurahan'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Kecamatan</label>
            <div class="col-sm-9">
              <input type="text" class="form-control <?= form_error('kecamatan') ? 'is-invalid' : '' ?>" name="kecamatan" id="kecamatan" value="<?= $anggota['kecamatan']; ?>">
              <div class="invalid-feedback">
                <?= form_error('kecamatan'); ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="bi bi-people-fill"></i> Orang Tua<h4>
        </div>
        <div class="card-body">

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Ayah</label>
            <div class="col-sm-9">
              <input type="text" class="form-control <?= form_error('nama_ayah') ? 'is-invalid' : '' ?>" name="nama_ayah" id="nama_ayah" value="<?= $anggota['nama_ayah']; ?>">
              <div class="invalid-feedback">
                <?= form_error('nama_ayah'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Nama Ibu</label>
            <div class="col-sm-9">
              <input type="text" class="form-control <?= form_error('nama_ibu') ? 'is-invalid' : '' ?>" name="nama_ibu" id="nama_ibu" value="<?= $anggota['nama_ibu']; ?>">
              <div class="invalid-feedback">
                <?= form_error('nama_ibu'); ?>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body text-center">
          <button type="submit" class="btn btn-warning text-dark"><i class="fas fa-edit"></i> Perbarui</button>
          <a href="<?= base_url() . 'admin/' . strtolower($menu) ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a>
          <!-- <a href="<?= base_url() . 'admin/buku' ?>"><button type="button" class="btn btn-dark"><i class="fas fa-reply"></i> Kembali</button></a> -->
        </div>
      </div>
    </div>
  </div>
</form>