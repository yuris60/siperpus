<!-- Breadcrumb -->
<div class="page-title">
  <div class="row">
    <div class="col-12 col-md-6 order-md-1 order-last">
      <h3><i class="<?= $icon ?>"></i> <?= $submenu . " " . $menu ?></h3>
      <p class="text-subtitle text-muted"></p>
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
      <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"><span class="badge bg-primary text-white">Dashboard</span></a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('admin/anggota') ?>"><span class="badge bg-primary text-white"><?= $menu ?></span></a></li>
          <li class="breadcrumb-item active" aria-current="page"><span class="badge text-dark"><?= $submenu ?></span></li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<!-- End of Breadcrumb -->

<!-- Alert -->
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="alert alert-info" role="alert">
      <h4 class="alert-info"><i class="fas fa-info"></i> Informasi</h4>
      Berikut ini adalah riwayat data peminjaman <strong><?= $anggota['nm_anggota'] ?></strong>.
    </div>
  </div>
</div>
<!-- End of Alert -->

<!-- Container -->
<section class="section">
  <div class="row">
    <div class="col-lg-9">

      <?php if (!empty($peminjaman)) : ?>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <?php $accordion = 1;
          foreach ($peminjaman as $p) : ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion<?= $accordion;  ?>" aria-expanded="false" aria-controls="accordion<?= $accordion;  ?>">
                  <h5><i class="bi bi-calendar-check" style="margin-top: 10px;"></i> <?= tgl_indo($p['tgl_pinjam']); ?></h5>
                </button>
              </h2>
              <div id="accordion<?= $accordion;  ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Cover Buku</th>
                      <th>Judul Buku</th>
                      <th>Pengarang</th>
                      <th>Total Pinjam</th>
                      <th>Status Buku</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $this->db->select('*');
                    $this->db->from('peminjaman');
                    $this->db->join('detail_peminjaman', 'detail_peminjaman.id_pinjam = peminjaman.id_pinjam');
                    $this->db->join('buku', 'buku.id_buku = detail_peminjaman.id_buku');
                    $this->db->where('peminjaman.id_pinjam', $p['id_pinjam']);
                    $detail_peminjaman = $this->db->get()->result_array();

                    $no = 1;
                    foreach ($detail_peminjaman as $dp) :
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td>
                          <?php
                          $file_gambar = './assets/img/buku/' . $dp['gambar_buku'];
                          if (file_exists($file_gambar)) : ?>
                            <img src="<?= base_url('assets/img/buku/') . $dp['gambar_buku'] ?>" class="img-zoomable" width="70px" alt="">
                            <!-- Gambar Ada -->
                          <?php else : ?>
                            <img src="<?= base_url('assets/img/contoh.jpg') ?>" width="70px" class="img-zoomable" alt="">
                            <!-- Gambar Tidak Ada -->
                          <?php endif; ?>
                        </td>
                        <td><?= $dp['judul_buku']; ?></td>
                        <td><?= $dp['pengarang']; ?></td>
                        <td><?= $dp['qty_pinjam']; ?></td>
                        <td>
                          <a href="<?= base_url('admin/pengembalian/detail/') . $dp['id_pinjam']; ?>">
                            <?php if ($dp['status'] == "Belum Lunas") : ?>
                              <span class="badge bg-danger"><?= $dp['status']; ?></span>
                            <?php else : ?>
                              <span class="badge bg-success"><?= $dp['status']; ?></span>
                            <?php endif; ?>
                          </a>
                        </td>
                      </tr>
                    <?php $no++;
                    endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          <?php $accordion++;
          endforeach; ?>
        </div>
      <?php else : ?>
        <div class="card">
          <div class="card-body">
            <h4>Anggota belum pernah meminjam buku</h4>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-header">
          <h4 class=""><i class="fas fa-info"></i> Info Anggota</h4>
        </div>
        <div class="card-body">
          <?php $file_gambar = './assets/img/anggota/' . $anggota['foto_anggota'];
          if (file_exists($file_gambar)) : ?>
            <img src="<?= base_url('assets/img/anggota/') . $anggota['foto_anggota'] ?>" width="100% alt="">
          <?php else : ?>
            <img src=" <?= base_url('assets/img/no_photo.jpg') ?>" width="100% alt="">
          <?php endif; ?>
          <ul class=" list-group" style="font-size: 15px;">
            <li class="list-group-item">
              <small><strong>NISN</strong></small><br>
              <?= $anggota['nisn'] ?>
            </li>
            <li class="list-group-item">
              <small><strong>Nama Anggota</strong></small><br>
              <?= $anggota['nm_anggota'] ?>
            </li>
            <li class="list-group-item">
              <small><strong>Jenis Kelamin</strong></small><br>
              <?php if ($anggota['jk_anggota'] == "L") : ?>
                Laki-Laki
              <?php else : ?>
                Perempuan
              <?php endif; ?>
            </li>
            <li class="list-group-item">
              <small><strong>Kelas</strong></small><br>
              <?php
              if ($anggota['tingkatan_kelas'] == 1) {
                $tingkatan_kelas = "X";
              } elseif ($anggota['tingkatan_kelas'] == 2) {
                $tingkatan_kelas = "XI";
              } else {
                $tingkatan_kelas = "XII";
              }
              echo $tingkatan_kelas . " " . $anggota['nm_jurusan'] . " " . $anggota['nomor_kelas']
              ?>
            </li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</section>