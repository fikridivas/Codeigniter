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
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="nama_peserta" class=" form-control-label">Nama Peserta Pelatihan Divisi</label>
                        <input type="hidden" name="id_pelatihan" value="<?= $row->id_pelatihan ?>">
                        <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>">
                        <input type="text" id="nama_peserta" name="nama_peserta" placeholder="Masukan nama peserta.." class="form-control" value="<?= $this->input->post('nama_peserta') ?? $row->nama_peserta ?>">
                        <?= form_error('nama_peserta', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="nim" class=" form-control-label">NIM Peserta</label>
                        <input type="text" id="nim" name="nim" placeholder="Masukan nim peserta.." class="form-control" value="<?= $this->input->post('nim') ?? $row->nim ?>">
                        <?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class=" form-control-label">Asal Jurusan</label>
                        <input type="text" id="jurusan" name="jurusan" placeholder="Masukan asal jurusan peserta.." class="form-control" value="<?= $this->input->post('jurusan') ?? $row->jurusan ?>">
                        <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="divisi" class=" form-control-label">Divisi Pelatihan Peserta</label>
                        <select class="form-control" name="divisi">
                            <?php $divisi = $this->input->post('divisi') ? $this->input->post('divisi') : $row->divisi ?>
                            <option value="divisi web" <?= $divisi == "divisi web" ? 'selected' : null ?>>Divisi WEB</option>
                            <option value="divisi multimedia" <?= $divisi == "divisi multimedia" ? 'selected' : null ?>>Divisi Multimedia</option>
                            <option value="divisi jaringan" <?= $divisi == "divisi jaringan" ? 'selected' : null ?>>Divisi Jaringan</option>
                            <option value="divisi desktop" <?= $divisi == "divisi desktop" ? 'selected' : null ?>>Divisi Desktop</option>
                            <option value="divisi mobile" <?= $divisi == "divisi mobile" ? 'selected' : null ?>>Divisi Mobile</option>
                            <option value="divisi broadcasting" <?= $divisi == "divisi broadcasting" ? 'selected' : null ?>>Divisi Broadcasting</option>
                        </select>
                        <?= form_error('divisi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email Peserta</label>
                        <input type="email" id="email" name="email" placeholder="Masukan email peserta.." class="form-control" value="<?= $this->input->post('email') ?? $row->email ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="telp" class=" form-control-label">Telp Peserta (WhatsApp)</label>
                        <input type="text" id="telp" name="telp" placeholder="Masukan telp peserta.." class="form-control" value="<?= $this->input->post('telp') ?? $row->telp ?>">
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