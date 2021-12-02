<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3 class="text-white"><i class="<?= $icon ?>"></i> <?= $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"><span class="badge bg-white text-dark">Dashboard</span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-white"><?= $menu ?></span></li>
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

<div class="row">
  <div class="col-lg-4">
    <div class="card">
      <div class="card-header">
        <h4 class=""><img src="<?= base_url('assets/svg/qr-code.svg') ?>" alt="" style="margin-top: -5px;"> Scan QR Code Disini</h4>
      </div>
      <div class="card-body">
        <video id="preview" class="mt-2" width="100%"></video>
        <button id="play" class="btn btn-success btn-block" onclick="play()"><i class="bi bi-play-circle"></i> Play Camera</button>
        <button id="stop" class="btn btn-danger btn-block" onclick="stop()"><i class="bi bi-stop-circle"></i> Stop Camera</button>
      </div>
    </div>

  </div>
  <div class="col-lg-8">
    <div class="card border-primary">
      <div class="card-header">
        <h5 class="card-title">Koleksi Buku</h5>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-striped table-hover" id="table1" style="font-size: 15px;">
          <thead>
            <tr class="table-secondary">
              <th>No</th>
              <th>Aksi</th>
              <th>Gambar</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Stok</th>
              <th>Rak</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($buku as $b) : ?>
              <tr>
                <td><?= $no ?></td>
                <td><button class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Masukkan Keranjang"><i class="bi bi-cart"></i></button></td>
                <td class="text-center">
                  <?php if (empty($b['gambar'])) : ?>
                    <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="40%" alt="">
                  <?php else : ?>
                    <img src="<?= base_url('assets/img/buku/') . $b['gambar_buku'] ?>" width="40%" alt="">
                  <?php endif; ?>
                </td>
                <td><?= $b['judul_buku'] ?></td>
                <td><?= $b['pengarang'] ?></td>
                <td><?= $b['penerbit'] ?></td>
                <td><?= $b['stok_buku'] ?></td>
                <td><?= $b['rak_buku'] ?></td>
              </tr>
            <?php $no++;
            endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </section>
  <!-- End of Container -->
</div>
</div>