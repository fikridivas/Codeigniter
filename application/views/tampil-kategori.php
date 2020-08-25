<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tampil Kategori</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url(); ?>dashboard">Dashboard</a></li>
                    <li class="active">Tampil Kategori</li>
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
                            <th>Nama Kategori</th>
                            <th>Slug Kategori</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $user) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $user->nama; ?></td>
                                <td><?= $user->slug; ?></td>

                                <td class="text-center">
                                    <a href="<?= base_url('dashboard/delete_kategori/' . $user->id_kategori); ?>" onclick="return confirm('Yakin ingin hapus kategori?');" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                    <a href="<?= base_url('dashboard/edit_kategori/' . $user->id_kategori); ?>" onclick="return confirm('Yakin ingin edit kategori?');" class="btn btn-info"><i class="fa fa-pencil"></i> Edit</a>
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