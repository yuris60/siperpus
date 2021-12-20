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
  <!-- <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <?php
        $checkbox = $_POST['cid_buku'];
        foreach ($checkbox as $i) : ?>
          <?php
          $this->db->select('*');
          $this->db->from('buku');
          $this->db->where('id_buku', $i);
          $query = $this->db->get()->row_array();
          ?>
          <div class="col-6">
            <div class="kotak">
              <?= $query['id_buku'] ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div> -->
  <table cellspacing="25" class="center" width="100%">
    <tbody>
      <?php
      $checkbox = $_POST['cid_buku'];
      $no = 1;
      foreach ($checkbox as $i) : ?>
        <?php
        $this->db->select('*');
        $this->db->from('buku');
        $this->db->join('klasifikasi_ddc', 'buku.id_ddc = klasifikasi_ddc.id_ddc');
        $this->db->where('buku.id_buku', $i);
        $query = $this->db->get()->row_array();
        ?>
        <?php if ($no % 2 == 0) : ?>
          <tr>
            <td class="kotak">
              <center>
                <h5 style="margin-top: 0px;">PERPUSTAKAAN <br> SMK SOEDIRMAN PURBALINGGA</h5>
              </center>
              <table>
                <tbody>
                  <tr>
                    <td width="4cm">
                      <?= substr($query['judul_buku'], 0, 10) ?> ...<br>
                      <img src="<?= site_url('admin/buku/qrcode/') . $query['id_buku'] ?>" class="img-zoomable" width="80px" alt="">
                    </td>
                    <td style="text-align: center;">
                      <?= $query['kode_ddc'] ?><br>
                      <?= substr($query['pengarang'], 0, 3) ?><br>
                      <?= $query['rak_buku'] ?>
                    </td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        <?php else : ?>
          <td class="kotak">
            <center>
              <h5 style="margin-top: 0px;">PERPUSTAKAAN <br> SMK SOEDIRMAN PURBALINGGA</h5>
            </center>
            <table>
              <tbody>
                <tr>
                  <td width="4cm">
                    <?= substr($query['judul_buku'], 0, 10) ?> ...<br>
                    <img src="<?= site_url('admin/buku/qrcode/') . $query['id_buku'] ?>" class="img-zoomable" width="80px" alt="">
                  </td>
                  <td style="text-align: center;">
                    <?= $query['kode_ddc'] ?><br>
                    <?= substr($query['pengarang'], 0, 3) ?><br>
                    <?= $query['rak_buku'] ?>
                  </td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </td>
        <?php endif; ?>
        }
        ?>

      <?php $no++;
      endforeach; ?>
    </tbody>
  </table>

</body>

</html>