<main id="main">

  <section id="about" class="about">
    <div class="container">

      <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-lg-12">

          <form action="<?= base_url('buku/cari') ?>" method="POST" autocomplete="off">
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
                    <div class="search"> <i class="fa fa-search"></i> <input type="text" name="cari" class="form-control" placeholder="Ketikkan kata kunci disini ..." autofocus> <button class="btn btn-primary">Cari</button> </div>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>

      <section class="row" data-aos="fade-up">
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

      <section style="margin-top: -80px;">
        <div class="row">
          <?php foreach ($bukukategori as $bk) : ?>
            <div class="col-lg-3 g-4">
              <div class="card h-100">
                <div class="card-content">
                  <div class="card-header bg-secondary">
                    <span data-bs-toggle="modal" data-bs-target="#modalBukuKeseluruhan<?= $bk['id_buku']; ?>">
                      <button class="position-absolute btn-sm top-2 start-5 btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail Buku"><i class="fas fa-info-circle"></i></button>
                    </span>
                    <?php $file_gambar = './assets/img/buku/' . $bk['gambar_buku'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/buku/') . $bk['gambar_buku'] ?>" class="img-zoomable mx-auto" height="150px" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" height="150px" alt="">
                    <?php endif; ?>

                  </div>
                  <div class="card-body my-0">
                    <!-- <small><?= substr($bk['pengarang'], 0, 15); ?> ...</small> -->
                    <h5 class="text-center my-0" style="font-weight: 800;"><?= $bk['judul_buku']; ?></h5>

                  </div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Pengarang"><i class="fas fa-user-edit"></i> <?= $bk['pengarang']; ?></li>
                  <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Penerbit"><i class="fa-solid fa-upload"></i> <?= $bk['penerbit']; ?></li>
                  <li class="list-group-item" style="font-size: 11pt;" data-bs-toggle="tooltip" data-bs-placement="left" title="Tahun Terbit"><i class="fas fa-calendar-day"></i> <?= $bk['thn_terbit']; ?></li>
                  <li class="list-group-item text-center">
                    <?php if ($bk['stok_buku'] > 0) : ?>
                      <div class="badge bg-success text-white">Stok : <?= $bk['stok_buku']; ?></div>
                    <?php else : ?>
                      <div class="badge bg-danger text-white">Stok : <?= $bk['stok_buku']; ?></div>
                    <?php endif; ?>
                    <span class="badge bg-secondary">Rak : <?= $bk['rak_buku']; ?></span>
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
            $datasaatini = $this->uri->segment(4);
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
  <?php foreach ($bukukategori as $bk) : ?>
    <div class="modal fade" id="modalBukuKeseluruhan<?= $bk['id_buku']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <?php $file_gambar = './assets/img/buku/' . $bk['gambar_buku'];
                    if (file_exists($file_gambar)) : ?>
                      <img src="<?= base_url('assets/img/buku/') . $bk['gambar_buku'] ?>" class="mx-auto img-zoomable" width="80px" alt="">
                    <?php else : ?>
                      <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" width="80px" alt="">
                    <?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <td>Judul Buku</td>
                  <td>:</td>
                  <td><?= $bk['judul_buku']; ?></td>
                </tr>
                <tr>
                  <td>Pengarang</td>
                  <td>:</td>
                  <td><?= $bk['pengarang']; ?></td>
                </tr>
                <tr>
                  <td>Penerbit</td>
                  <td>:</td>
                  <td><?= $bk['penerbit']; ?></td>
                </tr>
                <tr>
                  <td>Tahun Terbit</td>
                  <td>:</td>
                  <td><?= $bk['thn_terbit']; ?></td>
                </tr>
                <tr>
                  <td>ISBN</td>
                  <td>:</td>
                  <td><?= $bk['isbn']; ?></td>
                </tr>
                <tr>
                  <td>Kode DDC</td>
                  <td>:</td>
                  <td><?= $bk['kode_ddc'] . " - " . $bk['kategori_ddc']; ?></td>
                </tr>
                <tr>
                  <td>Kategori Buku</td>
                  <td>:</td>
                  <td><?= $bk['nm_kategoribuku']; ?></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <h4 class="text-center">
                      <?php if ($bk['stok_buku'] > 0) : ?>
                        <div class="badge bg-success text-white">Stok : <?= $bk['stok_buku']; ?></div>
                      <?php else : ?>
                        <div class="badge bg-danger text-white">Stok : <?= $bk['stok_buku']; ?></div>
                      <?php endif; ?>
                      <div class="badge bg-secondary text-white">Rak : <?= $bk['rak_buku']; ?></div>
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