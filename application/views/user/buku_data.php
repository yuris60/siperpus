<section style="margin-top: -80px;" id="dataList">
  <div class="row" id="dataList">
    <?php foreach ($buku as $b) : ?>
      <div class="col-lg-6 col-6 mb-4 text-center" style="max-width: 190px;" id="dataList">
        <?php if (file_exists(base_url('assets/img/buku/') . $b['gambar_buku'])) : ?>
          ok
        <?php else : ?>
          <img src="<?= base_url('assets/img/no_book.jpg') ?>" class="mx-auto" width="100%" alt="">
        <?php endif; ?>
        <small><?= substr($b['pengarang'], 0, 15); ?> ...</small>
        <h6 style="font-weight: 800;"><?= $b['judul_buku']; ?></h6>
        <span class="badge bg-success">Stok : <?= $b['stok_buku']; ?></span>
        <span class="badge bg-secondary">Rak : <?= $b['rak_buku']; ?></span>

        <a href="" id="pilih" data-bs-toggle="modal" data-bs-target="#exampleModal" data-judul_buku="<?= $b['judul_buku'] ?>" data-pengarang="<?= $b['pengarang'] ?>" data-penerbit="<?= $b['penerbit'] ?>" data-thn_terbit="<?= $b['thn_terbit'] ?>" data-isbn="<?= $b['isbn'] ?>" data-kode_ddc="<?= $b['kode_ddc'] . " - " .  $b['kategori_ddc'] ?>" data-kategori_buku="<?= $b['nm_kategoribuku'] ?>" data-stok_buku="<?= $b['stok_buku'] ?>" data-rak_buku="<?= $b['rak_buku'] ?>">
          <div class="d-grid gap-2 mt-2">
            <button type="button" class="btn btn-primary btn-sm btn-block">Detail</button>
          </div>
        </a>
      </div>
    <?php endforeach; ?>

  </div>
</section>