<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Akun</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Tambah Akun</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title"></strong>
            </div>
            <div class="card-body">
                <form action="" method="post" class="">
                    <div class="form-group">
                        <label for="nf-nama" class=" form-control-label">Nama</label>
                        <input type="text" id="nf-nama" name="nama" placeholder="Masukan nama.." class="form-control" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nf-username" class=" form-control-label">Username</label>
                        <input type="text" id="nf-username" name="username" placeholder="Masukan username.." class="form-control" value="<?= set_value('username'); ?>">
                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nf-password" class=" form-control-label">Password</label>
                        <input type="password" id="nf-password" name="password" placeholder="Masukan password.." class="form-control">
                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>


</div>