<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $judul; ?> </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(); ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?= base_url(); ?>assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url(); ?>assets/img/dncc/logo/logodncc.png" alt="logo dncc">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent ">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="<?= base_url(); ?>beranda"><img src="<?= base_url(); ?>assets/img/dncc/logo/logodncc.png" alt="logo dncc"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?= base_url(); ?>beranda">Beranda</a></li>
                                        <li><a href="<?= base_url(); ?>beranda/tentang">Tentang</a></li>
                                        <li><a href="<?= base_url(); ?>beranda/kontak">Kontak</a></li>
                                        <li><a href="<?= base_url(); ?>beranda/berita">Berita</a></li>
                                        <?php if ($this->session->userdata('user_id')) { ?>
                                            <li><a href="<?= base_url(); ?>dashboard">Dasbor Ku</a></li>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <?php if (!$this->session->userdata('user_id')) { ?>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="<?= base_url(); ?>auth/login" class="btn header-btn">Masuk</a>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($this->session->userdata('user_id')) { ?>
                            <div class="col-xl-2 col-lg-2 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="<?= base_url(); ?>auth/logout" class="btn header-btn">keluar</a>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>

    <main>

        <?= $contents; ?>

    </main>
    <footer>

        <!-- Footer Start-->
        <div class="footer-main" data-background="assets/img/shape/footer_bg.png">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-4 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="<?= base_url(); ?>beranda"><img src="<?= base_url(); ?>assets/img/dncc/logo/logodncc.png" alt="logo dncc"></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Jalan Nakula I No 5 - 11 Semarang Kompleks UKM UDINUS, Gedung F.2.K</p>
                                            <p class="info2">dncc@ukm.dinus.ac.id</p>
                                        </div>
                                    </div>
                                    <div class="footer-social">
                                        <a href="https://www.youtube.com/channel/UCbGj3OU4Qq8KOgaY9zuyZsA"><i class="fab fa-youtube"></i></a>
                                        <a href="https://www.instagram.com/dnccsemarang/?hl=id"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Links</h4>
                                    <ul>
                                        <li><a href="<?= base_url(); ?>beranda">Beranda</a></li>
                                        <li><a href="<?= base_url(); ?>beranda/tentang">Tentang</a></li>
                                        <li><a href="<?= base_url(); ?>beranda/kontak">Kontak</a></li>
                                        <li><a href="<?= base_url(); ?>beranda/berita">Berita</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="https://www.dinus.ac.id/">UDINUS</a></li>
                                        <li><a href="http://dinacom.dinus.ac.id/">DINACOM</a></li>
                                        <li><a href="http://udinusradio.caster.fm/">Dinus Radio</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom aera -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;<script>
                                            document.write(new Date().getFullYear());
                                        </script> Dian Nuswantoro Computer Club
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->

    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url(); ?>./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url(); ?>./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>./assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url(); ?>./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url(); ?>./assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?= base_url(); ?>./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url(); ?>./assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>./assets/js/animated.headline.js"></script>
    <script src="<?= base_url(); ?>./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url(); ?>./assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url(); ?>./assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= base_url(); ?>./assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>./assets/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>./assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>./assets/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url(); ?>./assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>./assets/js/main.js"></script>

</body>

</html>