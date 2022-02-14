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

  .text-end {
    text-align: right;
  }
</style>

<body>
  <center>
    <div>
      <img src="<?= base_url('assets/img/logo.png') ?>" width="100px" style="margin-top: 10px;">
      <h3 style="margin-top: 0px;">Laporan Kas Perpustakaan SMK Soedirman</h3>
      <p style="margin-top: -10px;">
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
        <th class="text-center">Tanggal Penerimaan</th>
        <th class="text-center">Sumber</th>
        <th class="text-center">Nominal</th>
      </tr>
    </thead>
    <tbody>
      <?php $total = 0;
      $no = 1;
      foreach ($laporankas as $lk) : ?>
        <tr class="text-center">
          <td class="text-center"><?= $no; ?></td>
          <td class="text-center"><?= tgl_indo($lk['tgl_penerimaan']); ?></td>
          <td class="text-center"><?= $lk['sumber']; ?></td>
          <td class="text-end"><?= rupiah($lk['nominal']); ?></td>
        </tr>
      <?php $no++;
        $total += $lk['nominal'];
      endforeach; ?>
      <tr>
        <td colspan="3" class="text-center"><strong>TOTAL NOMINAL KAS</strong></td>
        <td class="text-end"><strong><?= rupiah($total); ?></strong></td>
      </tr>
    </tbody>
  </table>

  <!-- <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script> -->
</body>

</html>