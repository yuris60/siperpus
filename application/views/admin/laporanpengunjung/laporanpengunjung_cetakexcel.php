<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Pengunjung.xls");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <!-- <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>"> -->
</head>

<style>
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td,
  th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 2px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }

  .text-center {
    text-align: center;
  }
</style>

<body>
  <center>
    <div>
      <!-- <img src="<?= base_url('assets/img/logo.png') ?>" width="100px" style="margin-top: 10px;"> -->
      <h3 style="margin-top: 0px;">Laporan Pengunjung Perpustakaan SMK Soedirman</h3>
      <p style="margin-top: -10px;">
        <?php error_reporting(0) ?>
        <?php if (!empty($periode_bulanan)) : ?>
          Periode Bulan : <?= date('M Y', strtotime($periode_bulanan)) ?>
        <?php elseif (!empty($periode_tahunan)) : ?>
          Periode Tahun : <?= $periode_tahunan ?>
        <?php else : ?>
          Periode : <?= date('d M Y', strtotime($custom_start)) . " - " . date('d M Y', strtotime($custom_end)) ?>
        <?php endif; ?>

    </div>
  </center>

  <table class="table table-striped table-bordered mx-auto" border="1" style="margin-top: 15px;">
    <thead>
      <tr class="text-center">
        <th class="text-center">No</th>
        <!-- <th class="text-center">NISN</th> -->
        <th class="text-center">Nama Anggota</th>
        <th class="text-center">Kelas</th>
        <th class="text-center">Tgl Kunjungan</th>
        <th class="text-center">Keperluan</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($pengunjung as $p) : ?>
        <tr>
          <td class="text-center"><?= $no; ?></td>
          <!-- <td class="text-center"><?= $p['nisn']; ?></td> -->
          <td><?= $p['nm_anggota']; ?></td>
          <td>
            <?php
            if ($p['tingkatan_kelas'] == 1) {
              $tingkatan_kelas = "X";
            } elseif ($p['tingkatan_kelas'] == 2) {
              $tingkatan_kelas = "XI";
            } else {
              $tingkatan_kelas = "XII";
            }
            echo $tingkatan_kelas . " " . $p['nm_jurusan'] . " " . $p['nomor_kelas']
            ?>
          </td>
          <td><?= tgl_indo($p['jam_kunjungan']); ?></td>
          <td class="text-center"><?= $p['keperluan']; ?></td>
        </tr>
      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>

  <!-- <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script> -->
</body>

</html>