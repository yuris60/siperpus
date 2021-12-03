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
  <div class="col-12 col-lg-9">
    <div class="row">
      <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body px-0 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon purple">
                  <i class="bi bi-book" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Buku</h6>
                <h6 class="font-extrabold mb-0">112.000</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body px-0 py-4-5">
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
      <div class="col-6 col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body px-0 py-4-5">
            <div class="row">
              <div class="col-md-3">
                <div class="stats-icon green">
                  <i class="bi bi-cloud-arrow-up-fill" style="margin-left: -13px; margin-top: -10px;"></i>
                </div>
              </div>
              <div class="col-md-9">
                <h6 class="text-muted font-semibold">Jumlah Peminjaman</h6>
                <h6 class="font-extrabold mb-0">80.000</h6>
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
          <div class="avatar avatar-xl">
            <img src="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/images/faces/1.jpg" alt="Face 1">
          </div>
          <div class="ms-3 name">
            <h5 class="font-bold">John Duck</h5>
            <h6 class="text-muted mb-0">@johnducky</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Right Col-3 -->



</div>