<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Label Buku Pilihan</title>
  <!-- <link rel="stylesheet" href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.css"> -->

  <style type="text/css">
    .kotak {
      background-color: #fff;
      width: 7cm;
      padding: 10px;
      border: 1px #000 solid;
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }
  </style>
</head>

<body>
  <table cellspacing="25">
    <tbody>
      <tr>
        <td class="kotak">
          <center>
            <h5 style="margin-top: 0px;">PERPUSTAKAAN <br> SMK SOEDIRMAN PURBALINGGA</h5>
          </center>
          <table>
            <tbody>
              <tr>
                <td width="4cm">
                  <?= substr($buku['judul_buku'], 0, 10) ?> ...<br>
                  <img src="<?= site_url('admin/buku/qrcode/') . $buku['id_buku'] ?>" class="img-zoomable" width="80px" alt="">
                </td>
                <td style="text-align: center;">
                  <?= $buku['kode_ddc'] ?><br>
                  <?= substr($buku['pengarang'], 0, 3) ?><br>
                  <?= $buku['rak_buku'] ?>
                </td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </td>
    </tbody>
  </table>

</body>

</html>