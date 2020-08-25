<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Kategori</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Edit Kategori</li>
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
                        <label for="nama" class=" form-control-label">Nama Kategori</label>
                        <input type="hidden" name="id_kategori" value="<?= $row->id_kategori ?>">
                        <input type="text" id="nama" name="nama" placeholder="Masukan nama kategori.." class="form-control" value="<?= $this->input->post('nama') ?? $row->nama ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>


</div>