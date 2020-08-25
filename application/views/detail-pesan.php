<div class="card">
    <div class="card-header">
        Detail Pesan <?= $user->nama ?>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p><?= $user->pesan ?></p>
            <footer class="blockquote-footer"> <b><?= $user->tanggal; ?> <b></footer>
        </blockquote>
    </div>
</div>