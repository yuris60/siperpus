<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;900&display=swap" rel="stylesheet">
</head>

<style>
  .kartu {
    width: 19cm;
    margin-bottom: 20px;
    padding-bottom: -65px;
    border: 1px solid #000;
  }

  .nama {
    margin-top: -110px;
    width: 225px;
    font-family: 'Inter', sans-serif;
    font-weight: bolder;
    /* background-color: #000; */
    text-align: center;
  }

  .qrcode {
    margin-top: -40px;
    margin-left: 72px;
  }

  .noanggota {
    margin-left: 250px;
    margin-top: -245px;
    font-family: 'Inter', sans-serif;
    font-weight: bolder;
    font-size: 15px;
  }

  .berlaku {
    margin-left: 250px;
    margin-top: -186px;
    font-family: 'Inter', sans-serif;
    font-weight: bolder;
    font-size: 9px;
  }

  .foto {
    margin-top: -82px;
    margin-left: 248px;
  }
</style>

<body>
  <?php foreach ($anggota as $a) : ?>
    <div class="kartu">
      <img src="<?= base_url('assets/img/contoh kartu perpus/') ?>template_kartu.jpg" width="100%" alt="">

      <p class="nama"><?= $a['nm_anggota'] ?></p>
      <img src="<?= site_url('admin/laporananggota/qrcode/') . $a['nisn'] ?>" class="qrcode" width="75px" alt="">

      <p class="berlaku">21 Desember 2022</p>
      <?php $file_gambar = './assets/img/anggota/' . $a['foto_anggota'];
      if (file_exists($file_gambar)) : ?>
        <img src="<?= base_url('assets/img/anggota/') . $a['foto_anggota'] ?>" class="foto" width="84px" alt="">
      <?php else : ?>
        <img src="<?= base_url('assets/img/') ?>no_photo.jpg" class="foto" width="84px" alt="">
      <?php endif; ?>

      <p class="noanggota"><?= $a['nisn'] ?></p>
    </div>
  <?php endforeach; ?>
</body>

</html>