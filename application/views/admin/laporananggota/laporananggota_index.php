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
      Berikut ini adalah data <strong><?= strtoupper($menu) ?></strong>. Silahkan pilih bentuk laporan yang anda inginkan.
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
  <div class="row">
    <div class="col-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="fas fa-id-card"></i> Cetak Kartu Anggota
            <a href="<?= base_url('admin/laporananggota/cetakKartu') ?>" target="_blank"><button type="button" class="btn btn-sm btn-danger float-end" name="pdf_kartu" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Semua Kartu (PDF)"><i class="fas fa-file-pdf"></i></button></a>
          </h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('admin/laporananggota/cetakKartu') ?>" method="POST" autocomplete="off" target="_blank">
            <div class="form-group">
              <select name="pilihan" class="form-control" id="pilihan" onchange="laporan()">
                <option value="">-== Pilih Berdasarkan ==-</option>
                <option value="" id="kelas">Kelas</option>
                <option value="" id="angkatan">Angkatan</option>
              </select>
            </div>

            <!-- Bulanan -->
            <div class="pilihan kelas">
              <select name="kelas" class="form-select">
                <option value="">-== Pilih Disini ==-</option>
                <?php foreach ($kelas as $k) : ?>
                  <?php
                  if ($k['tingkatan_kelas'] == 1) {
                    $tingkatan_kelas = "X";
                  } elseif ($k['tingkatan_kelas'] == 2) {
                    $tingkatan_kelas = "XI";
                  } else {
                    $tingkatan_kelas = "XII";
                  }
                  ?>
                  <option value="<?= $k['id_kelas'] ?>"><?= $tingkatan_kelas . " " . $k['nm_jurusan'] . " " . $k['nomor_kelas']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Semesteran -->
            <div class="pilihan angkatan">
              <select name="angkatan" class="form-select">
                <option value="">-== Pilih Disini ==-</option>
                <option value="1">Kelas X</option>
                <option value="2">Kelas XI</option>
                <option value="3">Kelas XII</option>
              </select>
            </div>


            <!-- Custom -->
            <!-- <div class="pilihan custom">
            <div class="input-daterange datepicker-range input-group" id="custom">
              <input type="text" class="input-sm form-control" name="custom_start" placeholder="Mulai" />
              <span class="input-group-addon"> - </span>
              <input type="text" class="input-sm form-control" name="custom_end" placeholder="Selesai" />
            </div>
          </div> -->

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-danger" name="pdf_kartu"><i class="fas fa-file-pdf"></i> PDF</button>
          <!-- <button type="submit" class="btn btn-sm btn-success" name="excel"><i class="fas fa-file-excel"></i> Excel</button> -->
        </div>
        </form>
      </div>
    </div>
    <div class="col-6">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><i class="fas fa-file"></i> Cetak Laporan Anggota
            <div style="margin-top: -23px;">
              <form action="<?= base_url('admin/laporananggota/cetakLaporan') ?>" method="POST" target="_blank"><button type="submit" class="btn btn-sm btn-success float-end ms-1" name="excel_laporanall" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Semua Laporan (Excel)"><i class="fas fa-file-excel"></i></button></form>
              <form action="<?= base_url('admin/laporananggota/cetakLaporan') ?>" method="POST" target="_blank"><button type="submit" class="btn btn-sm btn-danger float-end" name="pdf_laporanall" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Semua Laporan (PDF)"><i class="fas fa-file-pdf"></i></button></form>
            </div>
            <!-- <a href="<?= base_url('admin/laporananggota/cetakLaporan') ?>" target="_blank"><button type="submit" class="btn btn-sm btn-success float-end ms-1" name="excel_laporanall" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Semua Laporan (Excel)"><i class="fas fa-file-excel"></i></button></a>
            <a href="<?= base_url('admin/laporananggota/cetakLaporan') ?>" target="_blank"><button type="submit" class="btn btn-sm btn-danger float-end" name="pdf_laporanall" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Semua Laporan (PDF)"><i class="fas fa-file-pdf"></i></button></a> -->
          </h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('admin/laporananggota/cetakLaporan') ?>" method="POST" autocomplete="off" target="_blank">
            <div class="form-group">
              <select name="pilihan2" class="form-control" id="pilihan2" onchange="laporan()">
                <option value="">-== Pilih Berdasarkan ==-</option>
                <option value="" id="kelas2">Kelas</option>
                <option value="" id="angkatan2">Angkatan</option>
              </select>
            </div>

            <!-- Bulanan -->
            <div class="pilihan2 kelas2">
              <select name="kelas2" class="form-select">
                <option value="">-== Pilih Disini ==-</option>
                <?php foreach ($kelas as $k) : ?>
                  <?php
                  if ($k['tingkatan_kelas'] == 1) {
                    $tingkatan_kelas = "X";
                  } elseif ($k['tingkatan_kelas'] == 2) {
                    $tingkatan_kelas = "XI";
                  } else {
                    $tingkatan_kelas = "XII";
                  }
                  ?>
                  <option value="<?= $k['id_kelas'] ?>"><?= $tingkatan_kelas . " " . $k['nm_jurusan'] . " " . $k['nomor_kelas'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- Semesteran -->
            <div class="pilihan2 angkatan2">
              <select name="angkatan2" class="form-select">
                <option value="">-== Pilih Disini ==-</option>
                <option value="1">X</option>
                <option value="2">XI</option>
                <option value="3">XII</option>
              </select>
            </div>


            <!-- Custom -->
            <!-- <div class="pilihan custom">
            <div class="input-daterange datepicker-range input-group" id="custom">
              <input type="text" class="input-sm form-control" name="custom_start" placeholder="Mulai" />
              <span class="input-group-addon"> - </span>
              <input type="text" class="input-sm form-control" name="custom_end" placeholder="Selesai" />
            </div>
          </div> -->

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-danger" name="pdf_laporan"><i class="fas fa-file-pdf"></i> PDF</button>
          <button type="submit" class="btn btn-success" name="excel_laporan"><i class="fas fa-file-excel"></i> Excel</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-database"></i> Data</h4>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="table1">
        <thead>
          <tr class="table-secondary">
            <th>No</th>
            <th>NISN</th>
            <th>Nama Anggota</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($anggota as $a) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $a['nisn']; ?></td>
              <td><?= $a['nm_anggota']; ?></td>
              <td>
                <?php if ($a['jk_anggota'] == 'L') : ?>
                  Laki-Laki
                <?php else : ?>
                  Perempuan
                <?php endif; ?>
              </td>
              <td>
                <?php
                if ($a['tingkatan_kelas'] == 1) {
                  $tingkatan_kelas = "X";
                } elseif ($a['tingkatan_kelas'] == 2) {
                  $tingkatan_kelas = "XI";
                } else {
                  $tingkatan_kelas = "XII";
                }
                echo $tingkatan_kelas . " " . $a['nm_jurusan'] . " " . $a['nomor_kelas']
                ?>
              </td>
              <td>
                <a href="<?= base_url('admin/laporananggota/cetakKartuByID/') . $a['id_anggota']; ?>" target="_blank">
                  <button class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak Kartu <?= $a['nm_anggota'] ?>"><i class="fas fa-id-card"></i></button>
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