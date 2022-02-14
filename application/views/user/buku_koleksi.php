<main id="main">

  <section id="about" class="about">
    <div class="container">

      <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-lg-12">

          <form action="<?= base_url('buku/cari/pilihan/katakunci') ?>" method="POST" autocomplete="off">
            <div class="card">
              <div class="card-body">
                <h4 class="mb-4" style="font-weight: 800;">Cari buku apa? yuk bisa cari langsung disini ... </h4>
                <div class="row">
                  <div class="col-lg-3">
                    <select name="pilih_berdasarkan" class="form-select" style="height: 60px;">
                      <option value="">Cari Buku Berdasarkan</option>
                      <option value="judul_buku">Judul Buku</option>
                      <option value="pengarang">Pengarang</option>
                      <option value="penerbit">Penerbit</option>
                    </select>
                  </div>
                  <div class="col-lg-9">
                    <div class="search"> <i class="fa fa-search" style="position: absolute; margin-left: 15px; margin-top: 20px;"></i> <input type="text" name="cari" class="form-control" placeholder="Ketikkan kata kunci disini ..." autofocus required> <button class="btn btn-primary">Cari</button> </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>

      <!-- <section class="row content" data-aos="fade-up">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Buku Teks Pelajaran</p>
            </div>
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Buku Bacaan</p>
            </div>
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Buku Penunjang Ujian</p>
            </div>
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Buku Penunjang Pelajaran</p>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="row">
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Kamus Umum</p>
            </div>
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Kamus Produktif</p>
            </div>
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Al-Quran</p>
            </div>
            <div class="col-xl-3 col-3">
              <img src="<?= base_url('assets/img/user.png') ?>" width="100%" class="rounded-circle" alt="...">
              <p class="text-center mt-2">Ensiklopedia</p>
            </div>
          </div>
        </div>
      </section> -->

      <section class="row content" data-aos="fade-up">
        <div class="col-lg-6">
          <div class="row text-center">
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/1'); ?>"><img src="<?= base_url('assets/img/icon/Buku Teks Pelajaran.png') ?>" width="100%"></a>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/2'); ?>"><img src="<?= base_url('assets/img/icon/Buku Bacaan.png') ?>" width="100%"></a>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/3'); ?>"><img src="<?= base_url('assets/img/icon/Buku Penunjang Ujian.png') ?>" width="100%"></a>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/4'); ?>"><img src="<?= base_url('assets/img/icon/Buku Penunjang Pelajaran.png') ?>" width="100%"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row text-center">
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/5'); ?>"><img src="<?= base_url('assets/img/icon/Kamus Umum.png') ?>" width="100%"></a>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/6'); ?>"><img src="<?= base_url('assets/img/icon/Kamus Produktif.png') ?>" width="100%"></a>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/7'); ?>"><img src="<?= base_url('assets/img/icon/Al-Quran.png') ?>" width="100%"></a>
              </div>
            </div>
            <div class="col-lg-3 col-6 mb-3">
              <div class="card">
                <a href="<?= base_url('buku/kategori/8'); ?>"><img src="<?= base_url('assets/img/icon/Ensiklopedia.png') ?>" width="100%"></a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Buku Favorit -->
      <section class="row" style="margin-top: -80px;">
        <div class="judul mb-2">
          <h4>Buku Terfavorit

            <button class="btn btn-sm btn-primary float-end">Lihat Semua</button>
          </h4>
        </div>
        <div class="col-xl-3 d-none d-xl-block">
          <img src="<?= base_url('assets/img/bukufavorit.jpg') ?>" width="100%" alt="">
        </div>
        <div class="col-xl-9 col-lg-12 col-md-12 col-12" data-aos="fade-right">
          <div class="card h-100">
            <div class="owl-carousel owl-theme">
              <?php $no = 1;
              foreach ($bukuterfavorit as $bf) : ?>
                <div class="item" style="width: 200px;">
                  <div class="card-content">
                    <div class="card-header bg-secondary">
                      <div class="gambar mx-auto" style="width: 80px;">
                        <span data-bs-toggle="modal" data-bs-target="#modalBukuTerfavorit<?= $bf['id_buku']; ?>">
                          <button style="margin-left: 9px;" class="position-absolute btn-sm top-2 start-0 btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Buku"><i class="fas fa-info-circle"></i></button>
                        </span>
                        <?php $file_gambar = './assets/img/buku/' . $bf['gambar_buku'];
                        if (file_exists($file_gambar)) : ?>
                          <img src="<?= base_url('assets/img/buku/') . $bf['gambar_buku'] ?>" class="mx-auto" height="120px" alt="">
                        <?php else : ?>
                          <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" height="120px" alt="">
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="card-body">
                      <!-- <small><?= substr($bf['pengarang'], 0, 15); ?> ...</small> -->
                      <h5 class="text-center my-0" style="font-weight: 800;"><?= $bf['judul_buku']; ?></h5>

                    </div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Pengarang"><i class="fas fa-user-edit"></i> <?= $bf['pengarang']; ?></li>
                    <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Penerbit"><i class="fa-solid fa-upload"></i> <?= $bf['penerbit']; ?></li>
                    <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Tahun Terbit"><i class="fas fa-calendar-day"></i> <?= $bf['thn_terbit']; ?></li>
                    <li class="list-group-item text-center">
                      <?php if ($bf['stok_buku'] > 0) : ?>
                        <div class="badge bg-success text-white">Stok : <?= $bf['stok_buku']; ?></div>
                      <?php else : ?>
                        <div class="badge bg-danger text-white">Stok : <?= $bf['stok_buku']; ?></div>
                      <?php endif; ?>
                      <span class="badge bg-secondary">Rak : <?= $bf['rak_buku']; ?></span>
                    </li>
                    <li class="list-group-item text-center">
                      <h3><?= $no; ?></h3>
                    </li>
                  </ul>
                  <!-- <ul class="list-group list-group-flush">
                  <a href="#">
                    <li class="list-group-item bg-primary text-white text-center"><i class="fas fa-info-circle"></i> Detail Buku</li>
                  </a>
                </ul> -->
                </div>
              <?php $no++;
              endforeach; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- End Of Buku Populer -->

      <!-- Buku Terbaru -->
      <section class="row" style="margin-top: -80px;">
        <div class="judul mb-2">
          <h4>Buku Terbaru

            <button class="btn btn-sm btn-primary float-end">Lihat Semua</button>
          </h4>
          </h4>
        </div>
        <div class="col-xl-3 d-none d-xl-block">
          <img src="<?= base_url('assets/img/bukuterbaru.jpg') ?>" width="100%" alt="">
        </div>
        <div class="col-xl-9 col-lg-12 col-md-12 col-12" data-aos="fade-left">
          <div class="card h-100">
            <div class="owl-carousel owl-theme">
              <?php $no = 1;
              foreach ($bukuterbaru as $bt) : ?>
                <div class="item" style="width: 200px;">
                  <div class="card-content">
                    <div class="card-header bg-secondary">
                      <div class="gambar mx-auto" style="width: 80px;">
                        <span data-bs-toggle="modal" data-bs-target="#modalBukuTerbaru<?= $bt['id_buku']; ?>">
                          <button style="margin-left: 9px;" class="position-absolute btn-sm top-2 start-0 btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Buku"><i class="fas fa-info-circle"></i></button>
                        </span>
                        <?php $file_gambar = './assets/img/buku/' . $bt['gambar_buku'];
                        if (file_exists($file_gambar)) : ?>
                          <img src="<?= base_url('assets/img/buku/') . $bt['gambar_buku'] ?>" class="mx-auto" height="120px" alt="">
                        <?php else : ?>
                          <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" height="120px" alt="">
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="card-body my-0">
                      <!-- <small><?= substr($bt['pengarang'], 0, 15); ?> ...</small> -->
                      <h5 class="text-center my-0" style="font-weight: 800;"><?= $bt['judul_buku']; ?></h5>

                    </div>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Pengarang"><i class="fas fa-user-edit"></i> <?= $bt['pengarang']; ?></li>
                    <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Penerbit"><i class="fa-solid fa-upload"></i> <?= $bt['penerbit']; ?></li>
                    <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Tahun Terbit"><i class="fas fa-calendar-day"></i> <?= $bt['thn_terbit']; ?></li>
                    <li class="list-group-item text-center">
                      <?php if ($bt['stok_buku'] > 0) : ?>
                        <div class="badge bg-success text-white">Stok : <?= $bt['stok_buku']; ?></div>
                      <?php else : ?>
                        <div class="badge bg-danger text-white">Stok : <?= $bt['stok_buku']; ?></div>
                      <?php endif; ?>
                      <span class="badge bg-secondary">Rak : <?= $bt['rak_buku']; ?></span>
                    </li>
                    <li class="list-group-item text-center">
                      <h3><?= $no; ?></h3>
                    </li>
                  </ul>
                  <!-- <ul class="list-group list-group-flush">
                  <a href="#">
                    <li class="list-group-item bg-primary text-white text-center"><i class="fas fa-info-circle"></i> Detail Buku</li>
                  </a>
                </ul> -->
                </div>
              <?php $no++;
              endforeach; ?>
            </div>
          </div>
        </div>
      </section>
      <!-- End Of Buku Populer -->

      <section style="margin-top: -80px;" class="mb-0">
        <div class="row">
          <h4 class="mb-0">Buku Keseluruhan</h4>
          <?php foreach ($buku as $b) : ?>
            <div class="col-lg-3 g-4">
              <div class="card h-100">
                <div class="card-content">
                  <div class="card-header bg-secondary">
                    <span data-bs-toggle="modal" data-bs-target="#modalBukuKeseluruhan<?= $b['id_buku']; ?>">
                      <button class="position-absolute btn-sm top-2 start-5 btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Buku"><i class="fas fa-info-circle"></i></button>
                    </span>
                    <?php $file_gambar = './assets/img/buku/' . $b['gambar_buku'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/buku/') . $b['gambar_buku'] ?>" class="img-zoomable mx-auto" height="150px" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" height="150px" alt="">
                    <?php endif; ?>

                  </div>
                  <div class="card-body my-0">
                    <!-- <small><?= substr($b['pengarang'], 0, 15); ?> ...</small> -->
                    <h5 class="text-center my-0" style="font-weight: 800;"><?= $b['judul_buku']; ?></h5>

                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Pengarang"><i class="fas fa-user-edit"></i> <?= $b['pengarang']; ?></li>
                  <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Penerbit"><i class="fa-solid fa-upload"></i> <?= $b['penerbit']; ?></li>
                  <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Tahun Terbit"><i class="fas fa-calendar-day"></i> <?= $b['thn_terbit']; ?></li>
                  <li class="list-group-item text-center">
                    <?php if ($b['stok_buku'] > 0) : ?>
                      <div class="badge bg-success text-white">Stok : <?= $b['stok_buku']; ?></div>
                    <?php else : ?>
                      <div class="badge bg-danger text-white">Stok : <?= $b['stok_buku']; ?></div>
                    <?php endif; ?>
                    <span class="badge bg-secondary">Rak : <?= $b['rak_buku']; ?></span>
                  </li>
                </ul>
                <!-- <ul class="list-group list-group-flush">
                  <a href="#">
                    <li class="list-group-item bg-primary text-white text-center"><i class="fas fa-info-circle"></i> Detail Buku</li>
                  </a>
                </ul> -->
              </div>
            </div>
          <?php endforeach; ?>

        </div>

        <!-- Tombol Navigasi -->
        <p class="text-center mt-4 mb-1">Tombol Navigasi</p>
        <p class="my-0"><?= $pagelinks ?></p>
        <p class="text-center mt-0">
          <?php
          if ($total_rows  == 0) {
            $datasaatini = 0;
            $datasampai = 0;
          } else {
            $datasaatini = $this->uri->segment(3);
            $datasampai = $datasaatini + $limit;
            if (empty($datasaatini)) {
              $datasaatini = 1;
            } else {
              $datasaatini += 1;
            }

            if ($datasampai > $total_rows) {
              $datasampai = $total_rows;
            }
          }
          ?>
          Data buku tampil : <?= $datasaatini . " - " . $datasampai ?> dari <?= $total_rows; ?>
        </p>
        <!-- End of Tombol Navigasi -->
      </section>

    </div>
  </section>

  <!-- Modal -->
  <?php foreach ($buku as $b) : ?>
    <div class="modal fade" id="modalBukuKeseluruhan<?= $b['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-book"></i> Detail Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table table-striped mb-0">
              <tbody style="font-size: 14px;">
                <tr>
                  <td colspan="3" class="bg-secondary">
                    <?php $file_gambar = './assets/img/buku/' . $b['gambar_buku'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/buku/') . $b['gambar_buku'] ?>" class="mx-auto img-zoomable" width="80px" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" width="80px" alt="">
                    <?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>Judul Buku</td>
                  <td>:</td>
                  <td><?= $b['judul_buku']; ?></td>
                </tr>
                <tr>
                  <td>Pengarang</td>
                  <td>:</td>
                  <td><?= $b['pengarang']; ?></td>
                </tr>
                <tr>
                  <td>Penerbit</td>
                  <td>:</td>
                  <td><?= $b['penerbit']; ?></td>
                </tr>
                <tr>
                  <td>Tahun Terbit</td>
                  <td>:</td>
                  <td><?= $b['thn_terbit']; ?></td>
                </tr>
                <tr>
                  <td>ISBN</td>
                  <td>:</td>
                  <td><?= $b['isbn']; ?></td>
                </tr>
                <tr>
                  <td>Kode DDC</td>
                  <td>:</td>
                  <td><?= $b['kode_ddc'] . " - " . $b['kategori_ddc']; ?></td>
                </tr>
                <tr>
                  <td>Kategori Buku</td>
                  <td>:</td>
                  <td><?= $b['nm_kategoribuku']; ?></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <h4 class="text-center">
                      <?php if ($b['stok_buku'] > 0) : ?>
                        <div class="badge bg-success text-white">Stok : <?= $b['stok_buku']; ?></div>
                      <?php else : ?>
                        <div class="badge bg-danger text-white">Stok : <?= $b['stok_buku']; ?></div>
                      <?php endif; ?>
                      <div class="badge bg-secondary text-white">Rak : <?= $b['rak_buku']; ?></div>
                    </h4>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <!-- Modal -->
  <?php foreach ($bukuterfavorit as $bf) : ?>
    <div class="modal fade" id="modalBukuTerfavorit<?= $bf['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-book"></i> Detail Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table table-striped mb-0">
              <tbody style="font-size: 14px;">
                <tr>
                  <td colspan="3" class="bg-secondary">
                    <?php $file_gambar = './assets/img/buku/' . $bf['gambar_buku'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/buku/') . $bf['gambar_buku'] ?>" class="mx-auto img-zoomable" width="80px" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" width="80px" alt="">
                    <?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>Judul Buku</td>
                  <td>:</td>
                  <td><?= $bf['judul_buku']; ?></td>
                </tr>
                <tr>
                  <td>Pengarang</td>
                  <td>:</td>
                  <td><?= $bf['pengarang']; ?></td>
                </tr>
                <tr>
                  <td>Penerbit</td>
                  <td>:</td>
                  <td><?= $bf['penerbit']; ?></td>
                </tr>
                <tr>
                  <td>Tahun Terbit</td>
                  <td>:</td>
                  <td><?= $bf['thn_terbit']; ?></td>
                </tr>
                <tr>
                  <td>ISBN</td>
                  <td>:</td>
                  <td><?= $bf['isbn']; ?></td>
                </tr>
                <tr>
                  <td>Kode DDC</td>
                  <td>:</td>
                  <td><?= $bf['kode_ddc'] . " - " . $bf['kategori_ddc']; ?></td>
                </tr>
                <tr>
                  <td>Kategori Buku</td>
                  <td>:</td>
                  <td><?= $bf['nm_kategoribuku']; ?></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <h4 class="text-center">
                      <?php if ($bf['stok_buku'] > 0) : ?>
                        <div class="badge bg-success text-white">Stok : <?= $bf['stok_buku']; ?></div>
                      <?php else : ?>
                        <div class="badge bg-danger text-white">Stok : <?= $bf['stok_buku']; ?></div>
                      <?php endif; ?>
                      <div class="badge bg-secondary text-white">Rak : <?= $bf['rak_buku']; ?></div>
                    </h4>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- End Modal -->

  <!-- Modal -->
  <?php foreach ($bukuterbaru as $bt) : ?>
    <div class="modal fade" id="modalBukuTerbaru<?= $bt['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-book"></i> Detail Buku</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table table-striped mb-0">
              <tbody style="font-size: 14px;">
                <tr>
                  <td colspan="3" class="bg-secondary">
                    <?php $file_gambar = './assets/img/buku/' . $bt['gambar_buku'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/buku/') . $bt['gambar_buku'] ?>" class="mx-auto img-zoomable" width="80px" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" width="80px" alt="">
                    <?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>Judul Buku</td>
                  <td>:</td>
                  <td><?= $bt['judul_buku']; ?></td>
                </tr>
                <tr>
                  <td>Pengarang</td>
                  <td>:</td>
                  <td><?= $bt['pengarang']; ?></td>
                </tr>
                <tr>
                  <td>Penerbit</td>
                  <td>:</td>
                  <td><?= $bt['penerbit']; ?></td>
                </tr>
                <tr>
                  <td>Tahun Terbit</td>
                  <td>:</td>
                  <td><?= $bt['thn_terbit']; ?></td>
                </tr>
                <tr>
                  <td>ISBN</td>
                  <td>:</td>
                  <td><?= $bt['isbn']; ?></td>
                </tr>
                <tr>
                  <td>Kode DDC</td>
                  <td>:</td>
                  <td><?= $bt['kode_ddc'] . " - " . $bt['kategori_ddc']; ?></td>
                </tr>
                <tr>
                  <td>Kategori Buku</td>
                  <td>:</td>
                  <td><?= $bt['nm_kategoribuku']; ?></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <h4 class="text-center">
                      <?php if ($bt['stok_buku'] > 0) : ?>
                        <div class="badge bg-success text-white">Stok : <?= $bt['stok_buku']; ?></div>
                      <?php else : ?>
                        <div class="badge bg-danger text-white">Stok : <?= $bt['stok_buku']; ?></div>
                      <?php endif; ?>
                      <div class="badge bg-secondary text-white">Rak : <?= $bt['rak_buku']; ?></div>
                    </h4>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- End Modal -->