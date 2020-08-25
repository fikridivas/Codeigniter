<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tampil Pendaftar Pelatihan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Tampil Pendaftar Pelatihan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('message') ?>
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Telp</th>
                            <th>Email</th>
                            <th>Divisi</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $user) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $user->nama_peserta; ?></td>
                                <td><?= $user->nim; ?></td>
                                <td><?= $user->jurusan; ?></td>
                                <td><?= $user->telp; ?></td>
                                <td><?= $user->email; ?></td>
                                <td><?= $user->divisi; ?></td>
                                <td><?= $user->tanggal; ?></td>

                            </tr>
                            <?php $no++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>