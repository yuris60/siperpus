<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/fontawesome/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/css/app.css">
  <link rel="shortcut icon" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/images/favicon.svg" type="image/x-icon">

  <!-- Datatables -->
  <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/simple-datatables/style.css">

  <!-- Sweetalert -->
  <!-- <link rel="stylesheet" href="<?= base_url('assets/vendor/mazer/dist/'); ?>assets/vendors/sweetalert2/sweetalert2.min.css"> -->

  <!-- <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/toast.css"> -->
</head>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
  <div id="app">