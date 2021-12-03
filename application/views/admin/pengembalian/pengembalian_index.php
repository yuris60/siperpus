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
      Silahkan scan barcode kartu anggota pada menu <strong><?= strtoupper($menu) ?></strong> dengan posisi yang baik dan benar.
    </div>
  </div>
</div>
<!-- End of Alert -->

<!-- Toast -->
<div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<div class="flash-data-gagal-pinjam" data-flashdata="<?= $this->session->flashdata('gagal'); ?>"></div>

<!-- Toast Berhasil Pinjam -->
<button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnSuccess">Show live toast</button>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="ToastSuccess" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-check"></i> <b>Selamat, </b>Data Berhasil <?= $this->session->flashdata('success'); ?>
    </div>
  </div>
</div>

<!-- Toast Gagal Pinjam -->
<button type="button" class="btn btn-danger" style="display: none;" id="ToastBtnGagalPinjam">Show live toast</button>
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
  <div id="ToastGagalPinjam" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <i class="fas fa-times"></i> <b>Maaf, </b>Data Anggota Tidak <?= $this->session->flashdata('gagal'); ?>
    </div>
  </div>
</div>

<!-- Container -->
<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-database"></i> Data</h4>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-striped table-hover" width="100%" id="table1">
        <thead>
          <tr class="table-secondary">
            <th>No</th>
            <th width="150px">Tgl Pinjam</th>
            <th>Nama Anggota</th>
            <th>Kelas</th>
            <th>Status Pinjam</th>
            <th width="80px">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($pengembalian as $p) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= tgl_indo($p['tgl_pinjam']) ?></td>
              <td><?= $p['nm_anggota']; ?></td>
              <td>
                <?php
                if ($p['tingkatan_kelas'] == 1) {
                  $tingkatan_kelas = "X";
                } elseif ($p['tingkatan_kelas'] == 2) {
                  $tingkatan_kelas = "XI";
                } else {
                  $tingkatan_kelas = "XII";
                }
                echo $tingkatan_kelas . " " . $p['nm_jurusan'] . " " . $p['nomor_kelas']
                ?>
              </td>
              <td>
                <?php if ($p['status'] == "Belum Lunas") : ?>
                  <span class="badge bg-danger">Belum Lunas</span></p>
                <?php else : ?>
                  <span class="badge bg-success">Lunas</span></p>
                <?php endif; ?>
              </td>
              <td>
                <a href="<?= base_url('admin/pengembalian/detail/') . $p['id_pinjam']; ?>" class="">
                  <button class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Buku Pinjaman"><i class="bi bi-book"></i></button>
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