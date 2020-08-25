<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <?= $this->session->flashdata('message') ?>

        <?php if ($this->fungsi->user_login()->status == 1) { ?>
            <div class="card col-lg-2 col-md-6 no-padding bg-flat-color-1">
                <div class="card-body">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-users text-light"></i>
                    </div>
                    <?php
                    $users = $this->User_m->count_all_users();
                    ?>
                    <div class="h4 mb-0 text-light">
                        <span class="count"><?= $users; ?></span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Akun Users</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>
            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-2">
                    <div class="h1 text-muted text-right mb-4">
                        <i class="fa fa-user-plus text-light"></i>
                    </div>
                    <?php
                    $peserta_pelatihan = $this->User_m->count_peserta_pelatihan();
                    ?>
                    <div class="h4 mb-0 text-light">
                        <span class="count"><?= $peserta_pelatihan; ?></span>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Peserta Pelatihan</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>

            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-5">
                    <div class="h1 text-right text-light mb-4">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <?php
                    $pesan = $this->User_m->count_pesan_masuk();
                    ?>
                    <div class="h4 mb-0 text-light">
                        <?= $pesan; ?>
                    </div>
                    <small class="text-uppercase font-weight-bold text-light">Pesan Masuk</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>

            <div class="card col-lg-2 col-md-6 no-padding no-shadow">
                <div class="card-body bg-flat-color-4">
                    <div class="h1 text-light text-right mb-4">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <?php
                    $berita = $this->User_m->count_berita();
                    ?>
                    <div class="h4 mb-0 text-light"><?= $berita; ?></div>
                    <small class="text-light text-uppercase font-weight-bold">Berita atau Acara</small>
                    <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                </div>
            </div>

        <?php } ?>
    </div>



</div>