<div id="main" class='layout-navbar'>
  <div class="bg-primary" style="height: 100px;">
    <header class='mb-3'>
      <nav class="navbar navbar-expand navbar-light ">
        <div class="container-fluid">
          <a href="#" class="burger-btn d-block text-white">
            <i class="bi bi-justify fs-3"></i>
          </a>
          <h3 class="text-white mt-3 ms-3 d-none d-lg-block d-xl-block">
            <p class="">
              <?= tgl_indo(date('Y-m-d')); ?>, Pukul
              <span id="clock"></span>
            </p>
          </h3>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item dropdown me-1">
                <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bi bi-envelope bi-sub fs-4 text-white'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li>
                    <h6 class="dropdown-header">Mail</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">No new mail</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown me-3">
                <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class='bi bi-bell bi-sub fs-4 text-white'></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                  <li>
                    <h6 class="dropdown-header">Notifications</h6>
                  </li>
                  <li><a class="dropdown-item">No notification available</a></li>
                </ul>
              </li> -->
            </ul>
            <div class="dropdown">
              <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-menu d-flex">
                  <div class="user-name text-end me-3">
                    <h6 class="mb-0 text-white"><?= strtoupper($admin['nm_admin']) ?></h6>
                    <p class="mb-0 text-sm text-white"><?= $admin['akses'] ?></p>
                  </div>
                  <div class="user-img d-flex align-items-center">
                    <div class="avatar avatar-md">
                      <img src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/images/faces/1.jpg">
                    </div>
                  </div>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton" style="min-width: 11rem;">
                <li>
                  <h6 class="dropdown-header">Hello, <?= $admin['nm_admin'] ?></h6>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> Profil Saya</a>
                </li>
                <!-- <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i> Settings</a></li>
                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i> Wallet</a></li> -->
                <hr class="dropdown-divider mb-0">
                </li>
                <li><a href="<?= base_url('admin/login/logout') ?>"><button class="btn btn-danger btn-block"><i class="bi bi-box-arrow-right"></i> Logout</button></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>

  <div id="main-content" style="background-color: #eee;">
    <div class="page-heading">