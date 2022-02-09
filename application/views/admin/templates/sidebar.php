<div id="sidebar" class="active">
  <div class="sidebar-wrapper active">
    <!-- <img src="<?= base_url('assets/img/sidebar.jpg'); ?>" width="100%" class="" alt=""> -->
    <div class="sidebar-menu">
      <ul class="menu">
        <li class="text-center sidebar-item"><a href="<?= base_url("admin/dashboard") ?>"><img src="<?= base_url('assets/img/Logo SIPERPUS +Text.png'); ?>" width="90%" class="" alt=""></a></li>
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin') ?>" class='sidebar-link'>
            <i class="bi bi-house-door-fill"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="sidebar-title">Data Master</li>

        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'admin') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/admin') ?>" class='sidebar-link'>
            <i class="bi bi-person-badge"></i>
            <span>Admin</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'anggota') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/anggota') ?>" class='sidebar-link'>
            <i class="bi bi-person-circle"></i>
            <span>Anggota</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'buku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/buku') ?>" class='sidebar-link'>
            <i class="bi bi-book-half"></i>
            <span>Buku</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'jenisbuku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/jenisbuku') ?>" class='sidebar-link'>
            <i class="bi bi-bookmark-fill"></i>
            <span>Jenis Buku</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'jurusan') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/jurusan') ?>" class='sidebar-link'>
            <i class="bi bi-journal-bookmark"></i>
            <span>Jurusan</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'kategoribuku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/kategoribuku') ?>" class='sidebar-link'>
            <i class="bi bi-bookmarks"></i>
            <span>Kategori Buku</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'kelas') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/kelas') ?>" class='sidebar-link'>
            <i class="bi bi-journal-check"></i>
            <span>Kelas</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'klasifikasiddc') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/klasifikasiddc') ?>" class='sidebar-link'>
            <i class="bi bi-list-ol"></i>
            <span>Klasifikasi DDC</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'sumberbuku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/sumberbuku') ?>" class='sidebar-link'>
            <i class="bi bi-journals"></i>
            <span>Sumber Buku</span>
          </a>
        </li>

        <li class="sidebar-title">Data Transaksi</li>

        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'peminjaman') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/peminjaman') ?>" class='sidebar-link'>
            <i class="bi bi-cloud-arrow-up-fill"></i>
            <span>Peminjaman Buku</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'pengembalian') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/pengembalian') ?>" class='sidebar-link'>
            <i class="bi bi-cloud-arrow-down-fill"></i>
            <span>Pengembalian Buku</span>
          </a>
        </li>

        <li class="sidebar-title">Laporan</li>

        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'laporananggota') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/laporananggota') ?>" class='sidebar-link'>
            <i class="bi bi-person-circle"></i>
            <span>Laporan Anggota</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'laporanbuku') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/laporanbuku') ?>" class='sidebar-link'>
            <i class="bi bi-book-half"></i>
            <span>Laporan Buku</span>
          </a>
        </li>
        <li class="sidebar-item <?php if ($this->uri->segment(2) == 'laporanpengunjung') {
                                  echo 'active';
                                } ?>">
          <a href="<?= base_url('admin/laporanpengunjung') ?>" class='sidebar-link'>
            <i class="bi bi-person-square"></i>
            <span>Laporan Pengunjung</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="<?= base_url('admin/login/logout') ?>"><button class="btn btn-danger btn-block"><i class="bi bi-box-arrow-right"></i> Logout</button></a>
        </li>
      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>