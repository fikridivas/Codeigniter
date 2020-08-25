<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Daftar Pelatihan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Daftar Pelatihan</li>
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
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama_peserta" class=" form-control-label">Nama Peserta</label>
                        <input type="text" id="nama_peserta" name="nama_peserta" placeholder="Masukan nama peserta.." class="form-control" value="<?= set_value('nama_peserta'); ?>">
                        <?= form_error('nama_peserta', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nim" class=" form-control-label">Nim Peserta</label>
                        <input type="text" id="nim" name="nim" placeholder="Masukan nim peserta.." class="form-control" value="<?= set_value('nim'); ?>">
                        <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class=" form-control-label">Asal Jurusan Kuliah Peserta</label>
                        <input type="text" id="jurusan" name="jurusan" placeholder="Masukan asal jurusan kuliah peserta.." class="form-control" value="<?= set_value('jurusan'); ?>">
                        <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi Pelatihan</label>
                        <select class="form-control" name="divisi" required>
                            <option value="divisi web">Divisi WEB</option>
                            <option value="divisi multimedia">Divisi Multimedia</option>
                            <option value="divisi jaringan">Divisi Jaringan</option>
                            <option value="divisi desktop">Divisi Desktop</option>
                            <option value="divisi mobile">Divisi Mobile</option>
                            <option value="divisi broadcasting">Divisi Broadcasting</option>
                        </select>
                        <?= form_error('divisi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email Peserta</label>
                        <input type="email" id="email" name="email" placeholder="Masukan email peserta.." class="form-control" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="telp" class=" form-control-label">Telp. Peserta (WhatsApp)</label>
                        <input type="text" id="telp" name="telp" placeholder="Masukan telp whatsapp peserta.." class="form-control" value="<?= set_value('telp'); ?>">
                        <?= form_error('telp', '<small class="text-danger">', '</small>'); ?>
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