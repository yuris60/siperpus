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

      <section style="margin-top: -80px;" id="dataList">
        <div class="row" id="dataList">
          <?php foreach ($buku as $b) : ?>
            <div class="col-lg-6 col-6 mb-4 text-center" style="max-width: 190px;" id="dataList">
              <?php $file_gambar = './assets/img/buku/' . $b['gambar_buku'];
              if (file_exists($file_gambar)) : ?>
                <img src="<?= base_url('assets/img/buku/') . $b['gambar_buku'] ?>" class="img-zoomable mx-auto" width="100%" alt="">
              <?php else : ?>
                <img src="<?= base_url('assets/img/contoh.jpg') ?>" class="mx-auto" width="100%" alt="">
              <?php endif; ?>
              <small><?= substr($b['pengarang'], 0, 15); ?> ...</small>
              <h6 style="font-weight: 800;"><?= $b['judul_buku']; ?></h6>
              <span class="badge bg-success">Stok : <?= $b['stok_buku']; ?></span>
              <span class="badge bg-secondary">Rak : <?= $b['rak_buku']; ?></span>

              <a href="" id="pilih" data-bs-toggle="modal" data-bs-target="#exampleModal" data-judul_buku="<?= $b['judul_buku'] ?>" data-pengarang="<?= $b['pengarang'] ?>" data-penerbit="<?= $b['penerbit'] ?>" data-thn_terbit="<?= $b['thn_terbit'] ?>" data-isbn="<?= $b['isbn'] ?>" data-kode_ddc="<?= $b['kode_ddc'] . " - " .  $b['kategori_ddc'] ?>" data-kategori_buku="<?= $b['nm_kategoribuku'] ?>" data-stok_buku="<?= $b['stok_buku'] ?>" data-jml_halaman="<?= $b['jml_halaman'] ?>">
                <div class="d-grid gap-2 mt-2">
                  <button type="button" class="btn btn-primary btn-sm btn-block">Detail</button>
                </div>
              </a>
            </div>
          <?php endforeach; ?>

        </div>
      </section>

      <?php echo $pagelinks ?>

    </div>
  </section>
</main>

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
                <?php $file_gambar = './assets/img/buku/' . "";
                if (file_exists($file_gambar)) : ?>
                  <img src="<?= base_url('assets/img/buku/') . "" ?>" class="img-zoomable" width="80px" alt="">
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
              <td><span id="jml_halaman"></span></td>
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
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
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
      var item_jml_halaman = $(this).data('jml_halaman');
      document.getElementById("judul_buku").innerHTML = item_judul_buku;
      document.getElementById("pengarang").innerHTML = item_pengarang;
      document.getElementById("penerbit").innerHTML = item_penerbit;
      document.getElementById("thn_terbit").innerHTML = item_thn_terbit;
      document.getElementById("isbn").innerHTML = item_isbn;
      document.getElementById("kode_ddc").innerHTML = item_kode_ddc;
      document.getElementById("kategori_buku").innerHTML = item_kategori_buku;
      document.getElementById("stok_buku").innerHTML = item_stok_buku;
      document.getElementById("rak_buku").innerHTML = item_rak_buku;
      document.getElementById("jml_halaman").innerHTML = item_jml_halaman;
    })
  })
</script>

<<script>

  $(function() {

  /*--first time load--*/
  ajaxlist(page_url=false);

  /*-- Search keyword--*/
  $(document).on('click', "#searchBtn", function(event) {
  ajaxlist(page_url=false);
  event.preventDefault();
  });

  /*-- Reset Search--*/
  $(document).on('click', "#resetBtn", function(event) {
  $("#search_key").val('');
  ajaxlist(page_url=false);
  event.preventDefault();
  });

  /*-- Page click --*/
  $(document).on('click', ".pagination li a", function(event) {
  var page_url = $(this).attr('href');
  ajaxlist(page_url);
  event.preventDefault();
  });

  /*-- create function ajaxlist --*/
  function ajaxlist(page_url = false)
  {
  var search_key = $("#search_key").val();

  var dataString = 'search_key=' + search_key;
  var base_url = '<?php echo site_url('buku/cek/') ?>';

  if(page_url == false) {
  var page_url = base_url;
  }

  $.ajax({
  type: "POST",
  url: page_url,
  data: dataString,
  success: function(response) {
  console.log(response);
  $("#ajaxContent").html(response);
  }
  });
  }
  });
  </script>