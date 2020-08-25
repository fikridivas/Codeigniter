<?php
$nav_berita = $this->User_m->listing_berita_kategori();
?>
<!-- Slider Area Start-->
<div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <span>Berita & Acara</span>
                    <h2>Area Berita & Acara​ DNCC</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->
<!--================Blog Area =================-->
<section class="blog_area section-paddingr">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <article class="blog_item">
                        <?php foreach ($berita as $berita) { ?>
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?= base_url('assets/gambar/' . $berita->gambar); ?>" alt="">
                                <a href="<?= base_url('beranda/detail_berita/' . $berita->slug_berita) ?>" class="blog_item_date">
                                    <p><?= $berita->tanggal ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?= base_url('beranda/detail_berita/' . $berita->slug_berita) ?>">
                                    <h2><?= $berita->judul ?></h2>
                                </a>
                                <p><?= $berita->deskripsi ?></p>
                            </div>
                        <?php } ?>
                    </article>


                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="<?= base_url('beranda/search_berita') ?>" method="POST">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="keyword" placeholder='Cari berita atau acara sesuatu...' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari sesuatu...'">
                                    <div class="input-group-append">
                                        <button class="btns" type="submit" name="submit"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit" name="submit">Cari</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Kategori</h4>
                        <ul class="list cat-list">
                            <?php foreach ($nav_berita as $nav_berita) { ?>
                                <li>
                                    <a href="<?= base_url('beranda/kategori_berita/' . $nav_berita->slug) ?>" class="d-flex">
                                        <p><?= $nav_berita->nama ?></p>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </aside>


                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->