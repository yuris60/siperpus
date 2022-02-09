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
          <div class="owl-carousel owl-theme">
            <?php foreach ($bukuterfavorit as $bf) : ?>
              <div class="item text-center" style="width: 150px;">
                <?php $file_gambar = './assets/img/buku/' . $bf['gambar_buku'];
                if (file_exists($file_gambar)) : ?>
                  <img src="<?= base_url('assets/img/buku/') . $bf['gambar_buku'] ?>" width="50px" alt="">
                <?php else : ?>
                  <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="50px" alt="">
                <?php endif; ?>
                <small><?= substr($bf['pengarang'], 0, 15); ?> ...</small>
                <h6 style="font-weight: 800;"><?= $bf['judul_buku']; ?></h6>
                <?php if ($bf['stok_buku'] == 0) : ?>
                  <span class="badge bg-danger">Stok : <?= $bf['stok_buku']; ?></span>
                <?php else : ?>
                  <span class="badge bg-success">Stok : <?= $bf['stok_buku']; ?></span>
                <?php endif; ?>
                <span class="badge bg-secondary">Rak : <?= $bf['rak_buku']; ?></span>


                <a href="" id="pilih" data-bs-toggle="modal" data-bs-target="#exampleModal" data-judul_buku="<?= $bf['judul_buku'] ?>" data-pengarang="<?= $bf['pengarang'] ?>" data-penerbit="<?= $bf['penerbit'] ?>" data-thn_terbit="<?= $bf['thn_terbit'] ?>" data-isbn="<?= $bf['isbn'] ?>" data-kode_ddc="<?= $bf['kode_ddc'] . " - " .  $bf['kategori_ddc'] ?>" data-kategori_buku="<?= $bf['nm_kategoribuku'] ?>" data-stok_buku="<?= $bf['stok_buku'] ?>" data-rak_buku="<?= $bf['rak_buku'] ?>">
                  <div class="d-grid gap-2 mt-2">
                    <button type="button" class="btn btn-primary btn-sm btn-block">Detail</button>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
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
          <div class="owl-carousel owl-theme">
            <?php foreach ($bukuterbaru as $bt) : ?>
              <div class="item text-center" style="width: 150px;">
                <?php
                $file_gambar = './assets/img/buku/' . $bt['gambar_buku'];
                if (file_exists($file_gambar)) : ?>
                  <img src="<?= base_url('assets/img/buku/') . $bt['gambar_buku'] ?>" width="50px" alt="">
                <?php else : ?>
                  <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="50px" alt="">
                <?php endif; ?>
                <small><?= substr($bt['pengarang'], 0, 15); ?> ...</small>
                <h6 style="font-weight: 800;"><?= $bt['judul_buku']; ?></h6>
                <?php if ($bt['stok_buku'] == 0) : ?>
                  <span class="badge bg-danger">Stok : <?= $bt['stok_buku']; ?></span>
                <?php else : ?>
                  <span class="badge bg-success">Stok : <?= $bt['stok_buku']; ?></span>
                <?php endif; ?>
                <span class="badge bg-secondary">Rak : <?= $bt['rak_buku']; ?></span>


                <a href="" id="pilih" data-bs-toggle="modal" data-bs-target="#exampleModal" data-judul_buku="<?= $bt['judul_buku'] ?>" data-pengarang="<?= $bt['pengarang'] ?>" data-penerbit="<?= $bt['penerbit'] ?>" data-thn_terbit="<?= $bt['thn_terbit'] ?>" data-isbn="<?= $bt['isbn'] ?>" data-kode_ddc="<?= $bt['kode_ddc'] . " - " .  $bt['kategori_ddc'] ?>" data-kategori_buku="<?= $bt['nm_kategoribuku'] ?>" data-stok_buku="<?= $bt['stok_buku'] ?>" data-rak_buku="<?= $bt['rak_buku'] ?>">
                  <div class="d-grid gap-2 mt-2">
                    <button type="button" class="btn btn-primary btn-sm btn-block">Detail</button>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
      <!-- End Of Buku Populer -->

      <section class="row" style="margin-top: -80px; margin-bottom: -80px;">
        <div class="col-md-12" data-aos="fade-up">
          <div class="card">
            <div class="card-header">
              <h5 class=""><i class="fas fa-database"></i> Data Buku Keseluruhan
                <!-- <a href="<?= base_url('admin/buku/create') ?>" class="float-end"><button class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Data"><i class="fas fa-plus"></i></button></a> -->
              </h5>
            </div>
            <div class="card-body table-responsive">
              <table class="table table-striped table-hover" id="table1">
                <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th width="100px">Gambar Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th width="70px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($buku as $b) : ?>
                    <tr class="align-middle">
                      <td class="text-center"><?= $no; ?></td>
                      <td class="mx-auto">
                        <?php
                        $file_gambar = './assets/img/buku/' . $b['gambar_buku'];
                        if (file_exists($file_gambar)) : ?>
                          <img src="<?= base_url('assets/img/buku/') . $b['gambar_buku'] ?>" class="img-zoomable" width="70px" alt="">
                        <?php else : ?>
                          <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="70px" class="img-zoomable" alt="">
                        <?php endif; ?>
                      </td>
                      <td><?= $b['judul_buku']; ?></td>
                      <td><?= $b['pengarang']; ?></td>
                      <td><?= $b['penerbit']; ?></td>
                      <td><?= $b['thn_terbit']; ?></td>
                      <td>
                        <a href="" id="pilih" data-bs-toggle="modal" data-bs-target="#exampleModal" data-judul_buku="<?= $b['judul_buku'] ?>" data-pengarang="<?= $b['pengarang'] ?>" data-penerbit="<?= $b['penerbit'] ?>" data-thn_terbit="<?= $b['thn_terbit'] ?>" data-isbn="<?= $b['isbn'] ?>" data-kode_ddc="<?= $b['kode_ddc'] . " - " .  $b['kategori_ddc'] ?>" data-kategori_buku="<?= $b['nm_kategoribuku'] ?>" data-stok_buku="<?= $b['stok_buku'] ?>" data-rak_buku="<?= $b['rak_buku'] ?>">
                          <button type="button" class="btn btn-primary btn-sm">Detail</button>
                        </a>
                      </td>
                    </tr>
                  <?php $no++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <td colspan="3">
                  <?php if (file_exists(base_url('assets/img/buku/') . $bt['gambar_buku'])) : ?>
                    ok
                  <?php else : ?>
                    <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" width="80px" alt="">
                  <?php endif; ?>
                </td>
              </tr>
              <tr>
                <td>Judul Buku</td>
                <td>:</td>
                <td><span id="judul_buku"></span></td>
              </tr>
              <tr>
                <td>Pengarang</td>
                <td>:</td>
                <td><span id="pengarang"></span></td>
              </tr>
              <tr>
                <td>Penerbit</td>
                <td>:</td>
                <td><span id="penerbit"></span></td>
              </tr>
              <tr>
                <td>Tahun Terbit</td>
                <td>:</td>
                <td><span id="thn_terbit"></span></td>
              </tr>
              <tr>
                <td>ISBN</td>
                <td>:</td>
                <td><span id="isbn"></span></td>
              </tr>
              <tr>
                <td>Kode DDC</td>
                <td>:</td>
                <td><span id="kode_ddc"></span></td>
              </tr>
              <tr>
                <td>Kategori Buku</td>
                <td>:</td>
                <td><span id="kategori_buku"></span></td>
              </tr>
              <tr>
                <td colspan="3">
                  <h4 class="text-center">
                    <div class="badge text-dark">Stok : <span id="stok_buku"></span></div>
                    <div class="badge text-dark">Rak : <span id="rak_buku"></span></div>
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
  <!-- End Modal -->

  <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
  <script>
    $(document).ready(function() {
      $(document).on('click', '#pilih', function() {
        var item_judul_buku = $(this).data('judul_buku');
        var item_pengarang = $(this).data('pengarang');
        var item_penerbit = $(this).data('penerbit');
        var item_thn_terbit = $(this).data('thn_terbit');
        var item_isbn = $(this).data('isbn');
        var item_kode_ddc = $(this).data('kode_ddc');
        var item_kategori_buku = $(this).data('kategori_buku');
        var item_stok_buku = $(this).data('stok_buku');
        var item_rak_buku = $(this).data('rak_buku');
        document.getElementById("judul_buku").innerHTML = item_judul_buku;
        document.getElementById("pengarang").innerHTML = item_pengarang;
        document.getElementById("penerbit").innerHTML = item_penerbit;
        document.getElementById("thn_terbit").innerHTML = item_thn_terbit;
        document.getElementById("isbn").innerHTML = item_isbn;
        document.getElementById("kode_ddc").innerHTML = item_kode_ddc;
        document.getElementById("kategori_buku").innerHTML = item_kategori_buku;
        document.getElementById("stok_buku").innerHTML = item_stok_buku;
        document.getElementById("rak_buku").innerHTML = item_rak_buku;
      })
    })
  </script>