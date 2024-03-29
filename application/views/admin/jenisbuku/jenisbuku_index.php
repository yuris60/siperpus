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

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100" style="display: none;">
  <button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnDelete">Show live toast</button>

  <!-- Then put toasts within -->
  <div id="ToastBtnDelete" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="display: none;">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
<!-- End of Toastr -->

<!-- Container -->
<section class="section">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title"><i class="fas fa-database"></i> Data
        <a href="<?= base_url('admin/jenisbuku/create') ?>" class="float-end"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data"><i class="fas fa-plus"></i></button></a>
      </h4>
    </div>
    <div class="card-body">
      <table class="table table-striped table-hover" id="table1">
        <thead>
          <tr class="table-secondary">
            <th>No</th>
            <th>Kode</th>
            <th>Nama Jenis</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($jenisbuku as $jb) : ?>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $jb['kode_jenisbuku']; ?></td>
              <td><?= $jb['nm_jenisbuku']; ?></td>
              <td>
                <a href="<?= base_url('admin/jenisbuku/update/') . $jb['id_jenisbuku']; ?>">
                  <button class="btn btn-sm btn-warning text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Perbarui Data"><i class="fas fa-edit"></i></button>
                </a>
                <a href="<?= base_url('admin/jenisbuku/delete/') . $jb['id_jenisbuku']; ?>" class="tombol-hapus">
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