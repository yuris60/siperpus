<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?> | Admin SIPERPUS</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/bootstrap.css"> -->
  <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/fontawesome/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/app.css">
  <link rel="shortcut icon" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/images/favicon.svg" type="image/x-icon">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/Logo SIPERPUS favicon2.png') ?>" rel="icon">

  <!-- Datatables -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">

  <!-- Sweetalert -->
  <!-- <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/sweetalert2/sweetalert2.min.css"> -->

  <!-- iconly -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/iconly/bold.css">

  <!-- Datepicker -->
  <link href="<?= base_url('assets/') ?>vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>vendor/datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">

  <!-- Dropify -->
  <link href="<?= base_url('assets/') ?>vendor/dropify/dist/css/dropify.css" rel="stylesheet">

  <!-- File Uploader -->
  <!-- <link href="<?= base_url('assets/'); ?>vendor/image-uploader/css/filepond.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/image-uploader/css/filepond-plugin-image-preview.css" rel="stylesheet"> -->

  <!-- Simple Calendar -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/simple-calendar/dist/'); ?>simple-calendar.css" />

  <!-- <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/toast.css"> -->

  <?php
  if ($admin == 0) {
    $this->session->set_flashdata('flash-belum-login', 'dahulu');
    redirect('admin/login');
  }
  ?>
</head>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
  <div id="app">