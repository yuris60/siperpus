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
      <img src="<?= base_url('assets/img/logo.png') ?>" width="100px" style="margin-top: 10px;">
      <h3 style="margin-top: 0px;">Laporan Anggota Perpustakaan SMK Soedirman</h3>
      <div style="margin-top: -30px;">
        <?php if (!empty($kelas)) : ?>
          <p>Kelas : <?= $kelas ?></p>
        <?php elseif (!empty($angkatan)) : ?>
          <p>Angkatan : Kelas <?= $angkatan ?></p>
        <?php else : ?>
          <p>Data Anggota Keseluruhan</p>
        <?php endif; ?>
      </div>
    </div>
  </center>

  <table class="table table-striped table-bordered mx-auto" border="1" style="margin-top: 15px;">
    <thead>
      <tr class="text-center">
        <th class="text-center">No</th>
        <th class="text-center">NISN</th>
        <th class="text-center">Nama Anggota</th>
        <th class="text-center">Jenis Kelamin</th>
        <th class="text-center">Tempat Tanggal Lahir</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1;
      foreach ($anggota as $a) : ?>
        <tr>
          <td class="text-center"><?= $no; ?></td>
          <td class="text-center"><?= $a['nisn']; ?></td>
          <td><?= $a['nm_anggota']; ?></td>
          <td>
            <?php
            if ($a['jk_anggota'] == "L") {
              $jenis_kelamin = "Laki-Laki";
            } else {
              $jenis_kelamin = "Perempuan";
            }
            echo $jenis_kelamin;
            ?>
          </td>
          <td><?= $a['tempatlahir_anggota'] . ", " . tgl_indo($a['tgllahir_anggota'])  ?></td>
        </tr>
      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>

</body>

</html>