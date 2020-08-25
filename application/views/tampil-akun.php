<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tampil Akun</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Tampil Akun</li>
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
                            <th>Username</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $user) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $user->nama; ?></td>
                                <td><?= $user->username; ?></td>
                                <td><?= $user->status == 1 ? "Admin" : "Member"; ?></td>

                                <td class="text-center">
                                    <a href="<?= base_url('dashboard/delete_akun_user/' . $user->user_id); ?>" onclick="return confirm('Yakin ingin hapus akun?');" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>