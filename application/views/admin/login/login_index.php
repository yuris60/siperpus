<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SIPERPUS</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/app.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/pages/auth.css">
</head>

<body>
  <div id="auth">


    <div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
    <div class="flash-data-gagal-login" data-flashdata="<?= $this->session->flashdata('gagallogin'); ?>"></div>

    <!-- Toast Berhasil logout -->
    <button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnSuccess">Show live toast</button>
    <div class="position-fixed end-0 top-0 p-3" style="z-index: 11">
      <div id="ToastSuccess" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
          <i class="fas fa-check"></i> <b>Selamat, </b>Anda Berhasil <?= $this->session->flashdata('success'); ?>
        </div>
      </div>
    </div>

    <!-- Toast Gagal Login -->
    <button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnGagalLogin">Show live toast</button>
    <div class="position-fixed end-0 top-0 p-3" style="z-index: 11">
      <div id="ToastGagalLogin" class="toast bg-danger text-white" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body">
          <i class="fas fa-times"></i> <b>Maaf, </b>Username atau Password tidak <?= $this->session->flashdata('gagallogin'); ?>
        </div>
      </div>
    </div>

    <form action="" method="post" autocomplete="off">

      <div class="row h-100">
        <div class="col-lg-5 col-12">
          <div id="auth-left">
            <div class="auth-logo">
              <a href="<?= base_url("admin/login") ?>"><img src="<?= base_url('assets/img/Logo SIPERPUS +Text.png'); ?>" alt="Logo"></a>
            </div>
            <h1 class="auth-title">Log in.</h1>
            <!-- <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p> -->

            <div class="form-group position-relative has-icon-left mb-4">
              <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" autofocus>
              <div class="form-control-icon">
                <i class="bi bi-person"></i>
              </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
              <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
              <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
            </div>
            <!-- <div class="form-check form-check-lg d-flex align-items-end">
              <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Keep me logged in
              </label>
            </div> -->
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Log in</button>
            <!-- <div class="text-center mt-5 text-lg fs-4">
            <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                up</a>.</p>
            <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
          </div> -->
          </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
          <div id="auth-right">
            <img src="<?= base_url('assets/img/sekolah.jpg') ?>" height="100%" alt="">
          </div>
        </div>
      </div>

    </form>

  </div>

  <!-- JS -->
  <script src="<?= base_url('assets/vendor/'); ?>jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/myscript.js"></script>
</body>

</html>