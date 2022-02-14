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

<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-file"></i> Cetak Laporan</h4>
    </div>
    <div class="card-body">
      <form action="<?= base_url('admin/laporankas/cetakLaporan') ?>" method="POST" autocomplete="off" target="_blank">
        <div class="row">
          <div class="col-5">
            <div class="form-group">
              <select name="pilihan" class="form-control" id="pilihan" onchange="laporan()">
                <option value="">-== Pilih Rentang Waktu ==-</option>
                <option value="" id="bulanan">Bulanan</option>
                <option value="" id="tahunan">Tahunan</option>
                <option value="" id="custom">Custom</option>
              </select>
            </div>
          </div>

          <div class="col-5">
            <!-- Bulanan -->
            <div class="pilihan bulanan">
              <input type="text" class="form-control datepicker-bulanan" id="bulanan" name="bulanan" placeholder="Masukkan Bulanan">
            </div>

            <!-- Semesteran -->
            <div class="pilihan tahunan">
              <input type="text" class="form-control datepicker-tahunan" id="tahunan" name="tahunan" placeholder="Masukkan Tahunan">
            </div>


            <!-- Custom -->
            <div class="pilihan custom">
              <div class="input-daterange datepicker-range input-group" id="custom">
                <input type="text" class="input-sm form-control" name="custom_start" placeholder="Mulai" />
                <span class="input-group-addon"> - </span>
                <input type="text" class="input-sm form-control" name="custom_end" placeholder="Selesai" />
              </div>
            </div>

          </div>

          <div class="col-2">
            <button type="submit" class="btn btn-sm btn-danger" name="pdf"><i class="fas fa-file-pdf"></i> PDF</button>
            <button type="submit" class="btn btn-sm btn-success" name="excel"><i class="fas fa-file-excel"></i> Excel</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Container -->
<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-database"></i> Data
        <!-- <a href="<?= base_url('admin/laporankas/create') ?>" class="float-end"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data"><i class="fas fa-plus"></i></button></a> -->
      </h4>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="table1">
        <thead>
          <tr class="table-secondary">
            <th>#</th>
            <th>Tanggal Penerimaan</th>
            <th>Sumber</th>
            <th>Nominal</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($laporankas as $lk) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= tgl_indo($lk['tgl_penerimaan']); ?></td>
              <td><?= $lk['sumber']; ?></td>
              <td><?= rupiah($lk['nominal']); ?></td>
            </tr>
          <?php $no++;
          endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- End of Container -->