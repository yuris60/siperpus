<main id="main">

  <section id="about" class="about" data-aos="fade-up">
    <div class="container">

      <div class="flash-data-success" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>

      <button type="button" class="btn btn-primary" style="display: none;" id="ToastBtnSuccess">Show live toast</button>
      <div class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="ToastSuccess" class="toast bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-body">
            <i class="fas fa-check"></i> <b>Selamat, </b>Data Kunjungan Berhasil <?= $this->session->flashdata('success'); ?>
          </div>
        </div>
      </div>

      <div class="row content">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <h5><img src="<?= base_url('assets/svg/qr-code.svg') ?>" alt="" style="margin-top: -5px;"> Scan QR Code Disini</h5>
            </div>
            <div class="card-body">
              <video id="preview" width="100%"></video>
              <button id="play" class="btn btn-success btn-block" onclick="play()"><i class="bi bi-play-circle"></i> Play Camera</button>
              <button id="stop" class="btn btn-danger btn-block" onclick="stop()"><i class="bi bi-stop-circle"></i> Stop Camera</button>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <!-- <div class="card">
            <div class="card-header">
              <h5><img src="<?= base_url('assets/svg/qr-code.svg') ?>" alt="" style="margin-top: -5px;"> Hasil Scan Barcode</h5>
            </div>
            <div class="card-body">
              <form action="" method="POST">
                <input type="text" name="nisn" id="nisn" class="form-control" readonly> -->
          <!-- <input type="submit" value="Simpan"> -->
          <!-- </form>
            </div>
          </div> -->

          <div class="card">
            <div class="card-header">
              <h5><i class="fas fa-user"></i> Data Pengunjung Hari Ini</h5>
            </div>
            <div class="card-body">
              <table class="table table-hover table-striped" id="table1">
                <thead>
                  <tr>
                    <td>No</td>
                    <td>Nama Anggota</td>
                    <td>Kelas</td>
                    <td>Jam Kunjungan</td>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($pengunjung as $p) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $p['nm_anggota'] ?></td>
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
                      <td><?= waktu_lalu($p['jam_kunjungan']) ?></td>
                    </tr>
                  <?php $no++;
                  endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </section>
</main>