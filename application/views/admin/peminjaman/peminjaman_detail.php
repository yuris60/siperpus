<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3 class="text-white"><i class="<?= $icon ?>"></i> <?= $submenu . " " . $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"><span class="badge bg-white text-dark">Dashboard</span></a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/peminjaman') ?>"><span class="badge bg-white text-dark"><?= $menu ?></span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-white"><?= $submenu ?></span></li>
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
      Silahkan scan barcode kartu anggota pada menu <strong><?= strtoupper($menu) ?></strong> dengan posisi yang baik dan benar.
    </div>
  </div>
</div>

<section class="section">
  <div class="row">

    <div class="col-lg-9">
      <div class="card border-primary">
        <div class="card-header">
          <h5 class="card-title"><i class="bi bi-book"></i> Buku yang Dipinjam</h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped table-hover" id="table1" style="font-size: 15px;">
            <thead>
              <tr class="table-secondary">
                <th>No</th>
                <th>Gambar</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($detail_peminjaman as $dp) : ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><button class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Masukkan Keranjang"><i class="bi bi-cart"></i></button></td>
                  <td class="text-center">
                    <?php if (empty($dp['gambar'])) : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="40%" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/buku/') . $dp['gambar_buku'] ?>" width="40%" alt="">
                    <?php endif; ?>
                  </td>
                  <td><?= $dp['judul_buku'] ?></td>
                  <td><?= $dp['pengarang'] ?></td>
                  <td><?= $dp['penerbit'] ?></td>
                  <td><?= $dp['stok_buku'] ?></td>
                  <td><?= $dp['rak_buku'] ?></td>
                </tr>
              <?php $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <!-- <div class="card">
        <div class="card-header">
          <h4 class=""><img src="<?= base_url('assets/svg/qr-code.svg') ?>" alt="" style="margin-top: -5px;"> Scan QR Code Buku</h4>
        </div>
        <div class="card-body">
          <video id="preview" class="mt-2" width="100%"></video>
          <button id="play" class="btn btn-success btn-block" onclick="play()"><i class="bi bi-play-circle"></i> Play Camera</button>
          <button id="stop" class="btn btn-danger btn-block" onclick="stop()"><i class="bi bi-stop-circle"></i> Stop Camera</button>
        </div>
      </div> -->
      <div class="card">
        <div class="card-header">
          <h4 class=""><i class="fas fa-user"></i> Biodata Anggota</h4>
        </div>
        <div class="card-body">
          <?php if (file_exists(base_url('assets/img/anggota/') . $anggota['foto_anggota'])) : ?>
            <img src="<?= base_url('assets/img/anggota/') . $anggota['foto_anggota'] ?>" width="100%" alt="">
          <?php else : ?>
            <img src="<?= base_url('assets/img/no_photo.jpg') ?>" width="100%" alt="">
          <?php endif; ?>
          <ul class="list-group" style="font-size: 15px;">
            <li class="list-group-item">
              <small><strong>NISN</strong></small><br>
              <?= $anggota['nisn'] ?>
            </li>
            <li class="list-group-item">
              <small><strong>Nama Anggota</strong></small><br>
              <?= $anggota['nm_anggota'] ?>
            </li>
            <li class="list-group-item">
              <small><strong>Kelas</strong></small><br>
              <?php
              if ($anggota['tingkatan_kelas'] == 1) {
                $tingkatan_kelas = "X";
              } elseif ($anggota['tingkatan_kelas'] == 2) {
                $tingkatan_kelas = "XI";
              } else {
                $tingkatan_kelas = "XII";
              }
              echo $tingkatan_kelas . " " . $anggota['nm_jurusan'] . " " . $anggota['nomor_kelas']
              ?>
            </li>
            <li class="list-group-item">
              <small><strong>Jenis Kelamin</strong></small><br>
              <?php if ($anggota['jk_anggota'] == "L") : ?>
                Laki-Laki
              <?php else : ?>
                Perempuan
              <?php endif; ?>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</section>
<!-- End of Container -->