<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIPERPUS SMK Soedirman Purbalingga</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- AOS -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/aos/aos.css" />

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/vendor/sailor/') ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.7.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">SIPERPUS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html" class="active">Beranda</a></li>

          <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">Sejarah & Landasan Hukum</a></li>
              <li><a href="team.html">Visi Misi</a></li>
              <li><a href="testimonials.html">Struktur Organisasi</a></li>
              <li><a href="testimonials.html">Keanggotaan Perpustakaan</a></li>
              <li><a href="testimonials.html">Sarana & Prasarana</a></li>
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
          <li><a href="services.html">Absen Kunjungan</a></li>
          <!-- <li><a href="portfolio.html">Koleksi Buku</a></li> -->
          <li><a href="pricing.html">Berita</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->

          <!-- <li><a href="contact.html">Contact</a></li> -->
          <li><a href="index.html" class="getstarted">Koleksi Buku</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(<?= base_url('assets/vendor/sailor/') ?>assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang <br>Di <span>Perpustakaan SMK Soedirman Purbalingga</span></h2>
              <p class="animate__animated animate__fadeInUp">Perpustakaan SMK Soedirman Purbalingga merupakan layanan yang diberikan kepada civitas akademik khususnya siswa/i untuk memperoleh informasi seperti buku teks pelajaran, buku bacaan, kamus umum, sampai ensiklopedia.</p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(<?= base_url('assets/vendor/sailor/') ?>assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Selalu Isi Kehadiran Saat Berkunjung</h2>
              <p class="animate__animated animate__fadeInUp">Demi berkembangnya Perpustakaan SMK Soedirman Purbalingga, kami harap anda mengisi isi kehadiran dengan Scan Kartu Anggota Perpustakaan.</p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(<?= base_url('assets/vendor/sailor/') ?>assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Patuhi Selalu Protokol Kesehatan 5M</h2>
              <p class="animate__animated animate__fadeInUp">Pandemi Covid-19 belum usai, kita harus selalu patuhi protokol kesehatan 5M didalam area perpustakaan demi kesehatan kita bersama.</p>
              <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" data-aos="fade-up">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <img src="<?= base_url('assets/img/logo.png') ?>" width="20%" class="mb-2" alt="">
            <h2>Perpustakaan<br>SMK Soedirman Purbalingga</h2>
            <!-- <h3></h3> -->
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Perpustakaan SMK Soedirman Purbalingga merupakan layanan yang diberikan kepada civitas akademik khususnya siswa/i untuk memperoleh informasi seperti buku teks pelajaran, buku bacaan, kamus umum, sampai ensiklopedia. Dengan hadirnya SIPERPUS ini, ada beberapa kelebihan yang disediakan antara lain :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Mencari buku dan bahan bacaan bisa dilakukan pada sistem.</li>
              <li><i class="ri-check-double-line"></i> Terdapat absen kunjungan dengan cara tap kartu anggota pada kamera yang disediakan.</li>
              <li><i class="ri-check-double-line"></i> Melihat berita terbaru seputar perpustakaan</li>
            </ul>
            <p class="fst-italic">
              Diharapkan dengan adanya SIPERPUS ini dapat membantu pustakawan dan siswa/i dalam mendukung sekolah agar aktif diperpustakaan.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services" data-aos="fade-up">
      <div class="container">
        <h3>Berita Perpustakaan
          <button class="btn btn-sm btn-primary float-end">Lihat Semua</button>
        </h3>

        <div class="row mt-3">
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-info">
              <h3>Profil Perpustakaan</h3>
              <p class="mb-2">
                Perpustakaan SMK Soedirman Purbalingga merupakan layanan yang diberikan kepada civitas akademik khususnya siswa/i untuk memperoleh informasi seperti buku teks pelajaran, buku bacaan, kamus umum, sampai ensiklopedia.
              </p>
              <strong>Telp:</strong> 0812 3456 7890<br>
              <strong>Email:</strong> perpus@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Tautan Terkait</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Absen Kunjungan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Koleksi Buku</a></li>
            </ul>
          </div>

          <div class="col-lg-5 col-md-6 footer-newsletter">
            <h4>Lokasi Sekolah</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.344202445972!2d109.36274891477521!3d-7.315175694720566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ff79b14fa62c5%3A0xa91264c21841cfa5!2sSMK%20Soedirman%20Purbalingga%20(Kampus%20I)!5e0!3m2!1sid!2sid!4v1642066888011!5m2!1sid!2sid" width="100%" height="210" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url('assets/vendor/sailor/') ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- AOS -->
  <script src="<?= base_url('assets/') ?>vendor/aos/aos.js"></script>
  <script>
    AOS.init({
      // Global settings:
      disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
      startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
      initClassName: 'aos-init', // class applied after initialization
      animatedClassName: 'aos-animate', // class applied on animation
      useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
      disableMutationObserver: false, // disables automatic mutations' detections (advanced)
      debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
      throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


      // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
      offset: 120, // offset (in px) from the original trigger point
      delay: 0, // values from 0 to 3000, with step 50ms
      duration: 1000, // values from 0 to 3000, with step 50ms
      easing: 'ease', // default easing for AOS animations
      once: false, // whether animation should happen only once - while scrolling down
      mirror: false, // whether elements should animate out while scrolling past them
      anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
  </script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/vendor/sailor/') ?>assets/js/main.js"></script>

</body>

</html>