<nav class="main-navbar">
  <div class="container">
    <ul class="justify-content-center">
      <li class="menu-item">
        <a href="<?= base_url('dashboard/') ?>" class='menu-link'>
          <i class="bi bi-grid-fill"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="menu-item  ">
        <a href="<?= base_url('dashboard/absenpengunjung') ?>" class='menu-link'>
          <i class="bi bi-book-fill"></i>
          <span>Absen Pengunjung</span>
        </a>
      </li>
      <li class="menu-item  ">
        <a href="<?= base_url('dashboard/koleksibuku') ?>" class='menu-link'>
          <i class="bi bi-book-fill"></i>
          <span>Koleksi Buku</span>
        </a>
      </li>
      <li class="menu-item  ">
        <a href="index.html" class='menu-link'>
          <i class="bi bi-grid-fill"></i>
          <span>Peraturan Perpustakaan</span>
        </a>
      </li>
      <li class="menu-item  has-sub">
        <a href="#" class='menu-link'>
          <i class="bi bi-life-preserver"></i>
          <span>Support</span>
        </a>
        <div class="submenu ">
          <!-- Wrap to submenu-group-wrapper if you want 3-level submenu. Otherwise remove it. -->
          <div class="submenu-group-wrapper">
            <ul class="submenu-group">
              <li class="submenu-item  ">
                <a href="https://zuramai.github.io/mazer/docs" class='submenu-link'>Documentation</a>
              </li>
              <li class="submenu-item  ">
                <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='submenu-link'>Contribute</a>
              </li>
              <li class="submenu-item  ">
                <a href="https://github.com/zuramai/mazer#donate" class='submenu-link'>Donate</a>
              </li>

            </ul>
          </div>
        </div>
      </li>


    </ul>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" style="border-radius: 0;">
    <div class="carousel-item active">
      <img src="<?= base_url('assets/img/carousel2/1.jpg') ?>" class="" width="100%">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/carousel2/2.jpg') ?>" class="" width="100%">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('assets/img/carousel2/3.jpg') ?>" class="" width="100%">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>