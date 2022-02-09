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
          <div class="card border-dark">
            <div class="card-header bg-dark text-white">
              <h5><i class="bi bi-qr-code"></i> Scan QR Code Disini</h5>
            </div>
            <div class="card-body text-center">
              <video id="preview" width="100%"></video>
              <button id="play" class="btn btn-success btn-block" onclick="play()"><i class="bi bi-play-circle"></i> Play Camera</button>
              <button id="stop" class="btn btn-danger btn-block" onclick="stop()"><i class="bi bi-stop-circle"></i> Stop Camera</button>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <form action="" method="POST">
            <input type="hidden" name="nisn" id="nisn" class="form-control" readonly>
            <!-- <input type="submit" value="Simpan"> -->
          </form>

          <div class="card">
            <div class="card-header">
              <h5><i class="fas fa-user"></i> Data Pengunjung Hari Ini</h5>
            </div>
            <div class="card-body">
              <table class="table table-hover table-striped datatables">
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

      <div class="row mt-5">
        <div class="col-lg-12">
          <div class="card border-primary">
            <div class="card-header bg-primary text-white">
              <h5><i class="fas fa-plus"></i> Absen Secara Manual</h5>
            </div>
            <div class="card-body">
              <table class="table table-striped table-hover datatables">
                <thead>
                  <tr class="table-secondary">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($anggota as $a) : ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $a['nisn']; ?></td>
                      <td><?= $a['nm_anggota']; ?></td>
                      <td>
                        <?php if ($a['jk_anggota'] == 'L') : ?>
                          Laki-Laki
                        <?php else : ?>
                          Perempuan
                        <?php endif; ?>
                      </td>
                      <td>
                        <?php
                        if ($a['tingkatan_kelas'] == 1) {
                          $tingkatan_kelas = "X";
                        } elseif ($a['tingkatan_kelas'] == 2) {
                          $tingkatan_kelas = "XI";
                        } else {
                          $tingkatan_kelas = "XII";
                        }
                        echo $tingkatan_kelas . " " . $a['nm_jurusan'] . " " . $a['nomor_kelas']
                        ?>
                      </td>
                      <td>
                        <a href="<?= base_url('dashboard/absenPengunjungManual/') . $a['nisn']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Simpan Absen <?= $a['nm_anggota'] ?>">
                          <button class="btn btn-sm btn-info"><i class="fas fa-save"></i></button>
                        </a>
                      </td>
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