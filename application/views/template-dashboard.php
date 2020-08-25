<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul; ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(); ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url(); ?>assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets-dashboard/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>dashboard">DNCC Dashboard</a>
                <a class="navbar-brand hidden" href="<?= base_url(); ?>dashboard">D</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?= base_url(); ?>dashboard"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Features</h3><!-- /.menu-title -->
                    <?php if ($this->fungsi->user_login()->status == 1) { ?>
                        <li class="menu-item-has-children dropdown">
                            <a href="<?= base_url(); ?>assets-dashboard/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Pelatihan</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-plus-square"></i><a href="<?= base_url(); ?>dashboard/tambah_akun">Tambah Akun Pelatihan</a></li>
                                <li><i class="fa fa-id-badge"></i><a href="<?= base_url(); ?>dashboard/tampil_akun">Tampil Akun</a></li>
                                <li><i class="fa fa-book"></i><a href="<?= base_url(); ?>dashboard/tampil_pendaftar_pelatihan">Tampil Peserta Pelatihan</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="<?= base_url(); ?>assets-dashboard/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder-o"></i>Kategori</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-plus-square"></i><a href="<?= base_url(); ?>dashboard/tambah_kategori">Tambah Kategori</a></li>
                                <li><i class="fa fa-file-o"></i><a href="<?= base_url(); ?>dashboard/tampil_kategori">Tampil Kategori</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="<?= base_url(); ?>assets-dashboard/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-file-text"></i>Berita</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fa fa-plus-square"></i><a href="<?= base_url(); ?>dashboard/tambah_berita">Tambah Berita</a></li>
                                <li><i class="menu-icon fa fa-file-o"></i><a href="<?= base_url(); ?>dashboard/tampil_berita">Tampil Berita</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="<?= base_url(); ?>assets-dashboard/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-envelope-o"></i>Pesan</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-envelope-o"></i><a href="<?= base_url(); ?>dashboard/tampil_pesan">Tampil Pesan</a></li>
                            </ul>
                        </li>
                    <?php } ?>
                    <?php if ($this->fungsi->user_login()->status == 2) { ?>
                        <li>
                            <a href="<?= base_url(); ?>dashboard/info_pelatihan"> <i class="menu-icon fa ti-info-alt"></i>Info Pelatihan </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>dashboard/daftar_pelatihan"> <i class="menu-icon fa fa-medkit"></i>Daftar Pelatihan </a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="<?= base_url(); ?>beranda"> <i class="menu-icon fa ti-back-right"></i>Kembali ke halaman WEB </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <h5>Hallo, selamat datang <?= ucfirst($this->fungsi->user_login()->nama); ?></h5>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="<?= base_url(); ?>assets-dashboard/#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url(); ?>assets-dashboard/images/avatar-logo.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a href="#"><?= $this->fungsi->user_login()->status == 1 ? "Admin" : "Member" ?></a>
                            <a class="nav-link" href="<?= base_url(); ?>auth/logout"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->



        <div class="content mt-3">
            <div class="animated fadeIn">
                <?= $contents; ?>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?= base_url(); ?>assets-dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/assets/js/main.js"></script>


    <script src="<?= base_url(); ?>assets-dashboard/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url(); ?>assets-dashboard/assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>