<!-- Slider Area Start-->
<div class="services-area">
    <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="section-tittle text-center mb-80">
                    <span>Kontak</span>
                    <h2>Kontak Kami​</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End-->

<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="d-none d-sm-block mb-5 pb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0605151398597!2d110.40769622922747!3d-6.980738099684795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4bf8b7db11%3A0xd1a70dcec8af45d!2sDNCC%20-%20Dian%20Nuswantoro%20Computer%20Club%20Semarang!5e0!3m2!1sid!2sid!4v1594815799797!5m2!1sid!2sid" width="100%" height="600px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>


        <div class="row">
            <div class="col-12">
                <?= $this->session->flashdata('message') ?>
                <h2 class="contact-title">Form Pesan</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="<?= base_url('beranda/kontak'); ?>" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="pesan" id="pesan" cols="30" rows="9" placeholder=" Masukan pesan anda"><?= set_value('pesan'); ?></textarea>
                                <?= form_error('pesan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="nama" id="name" type="text" placeholder="Masukan nama anda" value="<?= set_value('nama'); ?>">
                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subjek" id="subject" type="text" placeholder="Masukan subjek pesan" value="<?= set_value('subjek'); ?>">
                                <?= form_error('subjek', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Semarang, Jawa Tengah.</h3>
                        <p>Jalan Nakula I No 5 - 11 Semarang
                            Kompleks UKM UDINUS, Gedung F.2.K</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>085799722722</h3>
                        <p>Humas DNCC</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>dncc@ukm.dinus.ac.id</h3>
                        <p>Kirim pesan anda kapanpun!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
<script src='https://cdn.tiny.cloud/1/o4nsl16jh6aer8f3rfo2proxmrv7vgti1ofjc0ym526vxhfp/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
    tinymce.init({
        selector: '#pesan'
    });
</script>