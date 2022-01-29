  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center bg-primary">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">SIPERPUS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?= base_url() ?>" class="<?php if ($this->uri->segment(2) == 'index' || $this->uri->segment(2) == '') {
                                                    echo 'active';
                                                  } ?>">Beranda</a></li>

          <li class="dropdown"><a href=""><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="<?php if ($this->uri->segment(2) == 'sejarah') {
                              echo 'active';
                            } ?>" href="<?= base_url('tentang/sejarah') ?>">Sejarah Perpustakaan</a></li>
              <li>
                <a class="<?php if ($this->uri->segment(2) == 'visimisi') {
                            echo 'active';
                          } ?>" href="<?= base_url('tentang/visimisi') ?>">Visi Misi</a>
              </li>
              <li><a href="testimonials.html">Struktur Organisasi</a></li>
              <li><a href="testimonials.html">Keanggotaan Perpustakaan</a></li>
              <li>
                <a class="<?php if ($this->uri->segment(2) == 'saranaprasarana') {
                            echo 'active';
                          } ?>" href="<?= base_url('tentang/saranaprasarana') ?>">Sarana & Prasarana
                </a>
              </li>
              <li><a href="testimonials.html">Foto Perpustakaan</a></li>
              <li><a href="testimonials.html">Staf Perpustakaan</a></li>
              <li><a href="testimonials.html">Alamat Perpustakaan</a></li>

              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li>
            <a class="<?php if ($this->uri->segment(2) == 'absenpengunjung') {
                        echo 'active';
                      } ?>" href="<?= base_url('dashboard/absenpengunjung') ?>">Absen Pengunjung
            </a>
          </li>
          <li>
            <a class="<?php if ($this->uri->segment(2) == 'koleksi') {
                        echo 'active';
                      } ?>" href="<?= base_url('buku/koleksi') ?>">Koleksi Buku
            </a>
          </li>
          <!-- <li><a href="portfolio.html">Koleksi Buku</a></li> -->
          <!-- <li><a href="pricing.html">Berita</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->

          <!-- <li><a href="contact.html">Contact</a></li> -->
          <!-- <li><a href="index.html" class="getstarted">Koleksi Buku</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->