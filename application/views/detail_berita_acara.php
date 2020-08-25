<?php
$nav_berita = $this->User_m->listing_berita_kategori();
?>
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="<?= base_url('assets/gambar/' . $berita->gambar); ?>" alt="">
                    </div>
                    <div class="blog_details">
                        <h2><?= $berita->judul ?>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><i class="fa fa-calendar"></i> <?= $berita->tanggal ?></li>
                        </ul>
                        <p class="excert">
                            <?= $berita->deskripsi ?>
                        </p>
                    </div>
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