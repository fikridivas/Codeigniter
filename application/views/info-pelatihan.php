<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Info Pelatihan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Info Pelatihan</li>
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
                <div class="form-group">
                    <label for="nama" class=" form-control-label">Nama Peserta</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukan nama peserta.." class="form-control" value="<?= $user->nama_peserta ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nim" class=" form-control-label">Nim Peserta</label>
                    <input type="text" id="nim" name="nim" placeholder="Masukan nim peserta.." class="form-control" value="<?= $user->nim ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="jurusan" class=" form-control-label">Asal Jurusan Kuliah Peserta</label>
                    <input type="text" id="jurusan" name="jurusan" placeholder="Masukan asal jurusan kuliah peserta.." class="form-control" value="<?= $user->jurusan ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="id_kategori">Divisi Pelatihan</label>
                    <select class="form-control" name="divisi" disabled>
                        <option value="<?= $user->divisi ?>"><?= $user->divisi ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email" class=" form-control-label">Email Peserta</label>
                    <input type="email" id="email" name="email" placeholder="Masukan email peserta.." class="form-control" value="<?= $user->email ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="telp" class=" form-control-label">Telp. Peserta (WhatsApp)</label>
                    <input type="text" id="telp" name="telp" placeholder="Masukan telp whatsapp peserta.." class="form-control" value="<?= $user->telp ?>" readonly>
                </div>
                <a href="<?= base_url('dashboard/edit_pelatihan/' . $user->id_pelatihan); ?>" onclick="return confirm('Yakin ingin edit data pelatihan?');" class="btn btn-info"><i class="fa fa-pencil"></i> Edit Pendaftaran Pelatihan</a>
            </div>
        </div>
    </div>


</div>