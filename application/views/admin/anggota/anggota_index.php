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

<!-- Container -->
<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-database"></i> Data
        <a href="<?= base_url('admin/anggota/create') ?>" class="float-end"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data"><i class="fas fa-plus"></i></button></a>
      </h4>
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
            <th width="100px">Aksi</th>
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
                <a href="<?= base_url('admin/anggota/riwayatpeminjaman/') . $a['id_anggota']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Riwayat Peminjaman">
                  <button class="btn btn-sm btn-info"><i class="bi bi-cloud-arrow-up-fill"></i></button>
                </a>
                <a href="<?= base_url('admin/anggota/update/') . $a['id_anggota']; ?>">
                  <button class="btn btn-sm btn-warning text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Perbarui Data"><i class="fas fa-edit"></i></button>
                </a>
                <a href="<?= base_url('admin/anggota/delete/') . $a['id_anggota']; ?>" class="tombol-hapus">
                  <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></button>
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