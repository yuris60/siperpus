<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3><i class="<?= $icon ?>"></i> <?= $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><span class="badge bg-white text-dark">Dashboard</span></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- End of Breadcrumb -->

<div class="row">
  <!-- Left Col-9 -->
  <div class="col-9">
    <div class="row">
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon blue">
                  <i class="bi bi-person-circle" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Anggota</h6>
                <h6 class="font-extrabold mb-0">183.000</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon purple">
                  <i class="bi bi-book" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Judul Buku</h6>
                <h6 class="font-extrabold mb-0">112.000</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon green">
                  <i class="bi bi-book" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Eksemplar</h6>
                <h6 class="font-extrabold mb-0">80.000</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-3 col-md-6">
        <div class="card">
          <div class="card-body px-3 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon red">
                  <i class="bi bi-person-badge" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Admin</h6>
                <h6 class="font-extrabold mb-0">80.000</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-12 col-md-12 col-xs-12">
        <div class="card">
          <div class="card-header">
            <h4><i class="bi bi-graph-up"></i> Grafik Peminjaman</h4>
          </div>
          <div class="card-body">
            <div id="chart-profile-visit"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-xl-5 col-md-5">
            <div class="card">
              <div class="card-header">
                <h4><i class="bi bi-person-square"></i> 3 Pengunjung Terakhir</h4>
              </div>
              <!-- <div class="card-body"> -->
              <div class="card-content pb-4">
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/images/faces/4.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">Hank Schrader</h5>
                    <h6 class="text-muted mb-0">25 Menit Lalu</h6>
                  </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/images/faces/5.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">Dean Winchester</h5>
                    <h6 class="text-muted mb-0">35 Menit Lalu</h6>
                  </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="<?= base_url('assets/vendor/mazer/dist/') ?>assets/images/faces/1.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">John Dodol</h5>
                    <h6 class="text-muted mb-0">45 Menit Lalu</h6>
                  </div>
                </div>
              </div>
            </div>
            <!-- </div> -->
          </div>
          <div class="col-12 col-xl-7 col-md-7">
            <div class="card">
              <div class="card-header">
                <h4><i class="bi bi-cloud-arrow-up-fill"></i> Peminjaman Terakhir</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn-sm active" id="pills-peminjamanall-tab" data-bs-toggle="pill" data-bs-target="#pills-peminjamanall" type="button" role="tab" aria-controls="pills-peminjamanall" aria-selected="true">Semua</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn-sm" id="pills-peminjamanbelumkembali-tab" data-bs-toggle="pill" data-bs-target="#pills-peminjamanbelumkembali" type="button" role="tab" aria-controls="pills-peminjamanbelumkembali" aria-selected="false">Belum Kembali</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn-sm" id="pills-peminjamansudahkembali-tab" data-bs-toggle="pill" data-bs-target="#pills-peminjamansudahkembali" type="button" role="tab" aria-controls="pills-peminjamansudahkembali" aria-selected="false">Sudah Kembali</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-peminjamanall" role="tabpanel" aria-labelledby="pills-peminjamanall-tab">
                    Semua Peminjaman
                  </div>
                  <div class="tab-pane fade" id="pills-peminjamanbelumkembali" role="tabpanel" aria-labelledby="pills-peminjamanbelumkembali-tab">
                    Peminjaman Belum Kembali
                  </div>
                  <div class="tab-pane fade" id="pills-peminjamansudahkembali" role="tabpanel" aria-labelledby="pills-peminjamansudahkembali-tab">
                    Peminjaman Sudah Kembali
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End of Left Col-9 -->

  <!-- Right Col-3 -->
  <div class="col-12 col-lg-3">
    <div class="card">
      <div class="card-body py-4">
        <div class="d-flex align-items-center">
          <img src="<?= base_url('assets/img/logo.png') ?>" width="100%">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-xl-12 col-md-12 col-xs-12">
        <!-- <div class="card">
      <div class="card-header">
        <h4>Peminjaman Terakhir</h4>
      </div>
      <div class="card-content pb-4">
        <div class="recent-message d-flex px-4 py-3">
          <div class="avatar avatar-lg">
            <img src="assets/images/faces/4.jpg">
          </div>
          <div class="name ms-4">
            <h5 class="mb-1">Hank Schrader</h5>
            <h6 class="text-muted mb-0">@johnducky</h6>
          </div>
        </div>
        <div class="recent-message d-flex px-4 py-3">
          <div class="avatar avatar-lg">
            <img src="assets/images/faces/5.jpg">
          </div>
          <div class="name ms-4">
            <h5 class="mb-1">Dean Winchester</h5>
            <h6 class="text-muted mb-0">@imdean</h6>
          </div>
        </div>
        <div class="recent-message d-flex px-4 py-3">
          <div class="avatar avatar-lg">
            <img src="assets/images/faces/1.jpg">
          </div>
          <div class="name ms-4">
            <h5 class="mb-1">John Dodol</h5>
            <h6 class="text-muted mb-0">@dodoljohn</h6>
          </div>
        </div>
        <div class="px-4">
          <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
            Conversation</button>
        </div>
      </div>
    </div> -->
        <div class="card">
          <div class="card-header">
            <h4><i class="bi bi-calendar2-week-fill"></i> Kalender</h4>
          </div>
          <div class="card-body">
            <div id="kalender" class="calendar-container" style="width: 100%;"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4><i class="bi bi-person-square"></i> Jumlah Pengunjung</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <span><button class="nav-link btn btn-sm active" id="pills-hariini-tab" data-bs-toggle="pill" data-bs-target="#pills-hariini" type="button" role="tab" aria-controls="pills-hariini" aria-selected="true">Hari Ini</button></span>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-sm" id="pills-keseluruhan-tab" data-bs-toggle="pill" data-bs-target="#pills-keseluruhan" type="button" role="tab" aria-controls="pills-keseluruhan" aria-selected="false">Keseluruhan</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-hariini" role="tabpanel" aria-labelledby="pills-hariini-tab">
                    <div id="pengunjung-hariini"></div>
                  </div>
                  <div class="tab-pane fade" id="pills-keseluruhan" role="tabpanel" aria-labelledby="pills-keseluruhan-tab">
                    <div id="pengunjung-keseluruhan"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- End of Right Col-3 -->

</div>