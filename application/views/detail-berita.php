<div class="card mb-3">
    <img src="<?= base_url('assets/gambar/' . $user->gambar); ?>" class="card-img-top" alt="gambar acara dan berita">
    <div class="card-body">
        <h5 class="card-title"><?= $user->judul ?></h5>
        <p class="card-text"><?= $user->deskripsi ?></p>
        <p class="card-text"><small class="text-muted">diupload tanggal <?= $user->tanggal ?></small></p>
    </div>
</div>