<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <div class="d-flex justify-content-between">
        <div class="logo">
          <a href="index.html"><img src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/images/logo/logo.png" alt="Logo" srcset=""></a>
        </div>
        <div class="toggler">
          <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
        </div>
      </div>
    </div>
    <div class="sidebar-menu">
      <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item <?php if ($this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url() ?>" class='sidebar-link'>
            <i class="bi bi-house-door-fill"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="sidebar-title">Data Master</li>

        <li class="sidebar-item">
          <a href="index.html" class='sidebar-link'>
            <i class="bi bi-person-badge"></i>
            <span>Admin</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index.html" class='sidebar-link'>
            <i class="bi bi-person-circle"></i>
            <span>Anggota</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(1) == 'buku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('buku') ?>" class='sidebar-link'>
            <i class="bi bi-book-half"></i>
            <span>Buku</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(1) == 'jenisbuku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('jenisbuku') ?>" class='sidebar-link'>
            <i class="bi bi-bookmark-fill"></i>
            <span>Jenis Buku</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(1) == 'klasifikasiddc') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('klasifikasiddc') ?>" class='sidebar-link'>
            <i class="bi bi-list-ol"></i>
            <span>Klasifikasi DDC</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(1) == 'sumberbuku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('sumberbuku') ?>" class='sidebar-link'>
            <i class="bi bi-journals"></i>
            <span>Sumber Buku</span>
          </a>
        </li>

        <li class="sidebar-title">Data Transaksi</li>

        <li class="sidebar-item">
          <a href="index.html" class='sidebar-link'>
            <i class="bi bi-cloud-arrow-up-fill"></i>
            <span>Peminjaman Buku</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index.html" class='sidebar-link'>
            <i class="bi bi-cloud-arrow-down-fill"></i>
            <span>Pengembalian Buku</span>
          </a>
        </li>

        <li class="sidebar-title">Laporan</li>

        <li class="sidebar-item">
          <a href="index.html" class='sidebar-link'>
            <i class="bi bi-book-half"></i>
            <span>Laporan Buku</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="index.html" class='sidebar-link'>
            <i class="bi bi-person-circle"></i>
            <span>Laporan Anggota</span>
          </a>
        </li>
        <li class="sidebar-item"><button class="btn btn-danger btn-block"><i class="bi bi-box-arrow-right"></i> Logout</button></li>
      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>