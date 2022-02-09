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

      <section style="margin-top: -80px;">
        <div class="row">
          <div class="col-lg-12">
            <h5 class="text-center">
              <?php if (!empty($pilihan)) : ?>
                <?php if ($pilihan == "judul_buku") {
                  $pilihan = "Judul Buku";
                } else if ($pilihan == "pengarang") {
                  $pilihan = "Pengarang";
                } else {
                  $pilihan = "Penerbit";
                }
                ?>
                Filter pencarian : <span class="badge bg-primary text-white"><?= $pilihan ?></span></h5>
          <?php endif; ?>
          <h2 class="text-center">Kata kunci pencarian kamu adalah : <br><strong><?= $katakunci ?></strong></h2>
          </div>
        </div>
      </section>

      <section style="margin-top: -80px;">
        <div class="row">
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

      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-3">Carousel cards title </h3>
            </div>
            <div class="col-6 text-end">
              <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                <i class="fa fa-arrow-left"></i>
              </a>
              <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                <i class="fa fa-arrow-right"></i>
              </a>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">

                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">

                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                          </div>

                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">

                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                          </div>

                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                          <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
                  <?php if (file_exists(base_url('assets/img/buku/') . $b['gambar_buku'])) : ?>
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
                    <?php
                    $stok = "<span id='stok_buku'>";
                    $stok_buku = intval($stok);
                    // $stok_buku = number_format($stok);
                    // echo $stok;
                    ?>
                    <?php if ($stok_buku == 0) : ?>
                      <div class="badge bg-danger">Stok : <?= $stok ?></span></div>
                    <?php else : ?>
                      <div class="badge bg-success">Stok : <?= $stok ?></span></div>
                    <?php endif; ?>
                    <div class="badge bg-secondary">Rak : <span id="rak_buku"></span></div>
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