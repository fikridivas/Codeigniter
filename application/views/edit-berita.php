<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Berita atau Acara</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Edit Berita atau Acara</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <?= $this->session->flashdata('message') ?>
            <div class="card-header">
                <strong class="card-title"></strong>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul" class=" form-control-label">Judul berita atau acara</label>
                        <input type="hidden" name="id_berita" value="<?= $row->id_berita ?>">
                        <input type="text" id="judul" name="judul" placeholder="Masukan judul.." class="form-control" value="<?= $this->input->post('judul') ?? $row->judul ?>">
                        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="id_kategori">Kategori berita atau acara</label>
                        <select class="form-control" name="id_kategori">
                            <?php foreach ($kategori as $kategori) { ?>
                                <option value="<?= $kategori->id_kategori ?>" <?= $kategori->id_kategori == $row->id_kategori ? 'selected' : null ?>>
                                    <?= $kategori->nama ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class=" form-control-label">Deskripsi berita atau acara</label>
                        <textarea class="form-control w-100" name="deskripsi" id="deskripsi" cols="30" rows="9" placeholder=" Masukan deskripsi.."><?= $this->input->post('deskripsi') ?? $row->deskripsi ?></textarea>
                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar berita atau acara<span class="text-danger">* jpg, max size(10 MB)</span> </label>
                        <img src="<?= base_url(); ?>assets/gambar/<?= $row->gambar; ?>" width="720" height="400">
                        <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $this->input->post('gambar') ?? $row->gambar ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>


</div>
<script src='https://cdn.tiny.cloud/1/o4nsl16jh6aer8f3rfo2proxmrv7vgti1ofjc0ym526vxhfp/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
    tinymce.init({
        selector: '#deskripsi'
    });
</script>