<!-- Start Single Events Section -->




<section class="bg-single-blog">
    <div class="container">
        <div class="row">
            <div class="single-blog">
                <div class="row">
                    <div class="col-md-8">
                        <?php

                        ?>
                        <div class="blog-items">
                            <div class="blog-img">
                                <a href="#"><img src="<?php echo base_url('landing/productdetail') ?>"><img src="<?php echo base_url() ?>/assets/upload/image/<?php echo $berita['gambar'] ?>" alt="blog-img-10" class="img-responsive" /></a>
                            </div>
                            <!-- .blog-img -->
                            <div class="blog-content-box">
                                <div class="meta-box">
                                    <div class="event-author-option">
                                        <div class="event-author-img">
                                            <img src="<?php echo base_url() ?>/assets/green/assets/images/event/event-author-img-1.jpg" alt="event-author-img-1" />
                                        </div>
                                        <!-- .author-img -->
                                        <div class="event-author-name">
                                            <p>Posted by : <a href="#"> Robot Smith</a></p>
                                        </div>
                                        <!-- .author-name -->
                                    </div>
                                    <!-- .author-option -->
                                    <ul class="meta-post">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <?= $berita['tanggal_awal'] ?></li>
                                        <li><a href="#"><i class="fa fa-users"></i> <?= $berita['kuota'] ?> peserta</a></li>
                                        <li><a href="#"><i class="fa fa-file"></i> <?= $berita['skp_utama'] ?> SKP</a></li>
                                    </ul>
                                </div>
                                <!-- .meta-box -->
                                <div class="blog-content">
                                    <h4><?= $berita['judul_berita'] ?></h4>
                                    <div class="div">
                                        <!-- AddToAny BEGIN -->
                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                            <a class="a2a_button_facebook"></a>
                                            <a class="a2a_button_twitter"></a>
                                            <a class="a2a_button_telegram"></a>
                                            <a class="a2a_button_google_gmail"></a>
                                            <a class="a2a_button_whatsapp"></a>
                                        </div>

                                    </div>
                                    <div class="checkout-btn">
                                        <a href="#" class="btn btn-default">Daftar</a>
                                    </div>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                </div>
                                <div class="single-blog-bottom">
                                    <div class="col-4">
                                        <table class="table table-hover">
                                            <tr>
                                                <th>Penyelenggara</th>
                                                <th>:</th>
                                                <th>Himpunan Perawat Neurosains Indonesia</th>
                                            </tr>
                                            <tr>
                                                <th>Lokasi</th>
                                                <th>:</th>
                                                <th>Pulman Hotel MH Thamrin Jakarta Pusat</th>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Acara</th>
                                                <th>:</th>
                                                <th>07-Agustus 2021 sd 12 Agustus 2021</th>
                                            </tr>
                                            <tr>
                                                <th>Jam</th>
                                                <th>:</th>
                                                <th>07.30 sd 16.00 WIB</th>
                                            </tr>
                                            <tr>
                                                <th>Akreditasi Profesi</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td>PPNI Pusat</td>
                                                <td>:</td>
                                                <td class="text-left">3 SKP</td>
                                            </tr>

                                            <tr>
                                                <th>Harga</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td>Umum</td>
                                                <td>:</td>
                                                <td class="text-left">1.000.000</td>
                                            </tr>
                                            <tr>
                                                <td>Mahasiswa</td>
                                                <td>:</td>
                                                <td class="text-left">700.000</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <p class="text-justify"><?= $berita['isi'] ?></p>
                                </div>
                                <!-- .blog-content -->
                                <div class="single-blog-bottom">
                                    <ul class="tags">
                                        <li><i class="fa fa-tags" aria-hidden="true"></i> Sasaran Peserta :</li>
                                        <li><a href="#">Dantal</a></li>
                                        <li><a href="#">Charity</a></li>
                                    </ul>
                                    <!-- .author-option -->
                                    <div class="checkout-btn">
                                        <a href="#" class="btn btn-default">Daftar</a>
                                    </div>
                                    <!-- .share-option -->
                                </div>
                                <!-- .single-blog-bottom -->
                            </div>
                            <!-- .blog-content-box -->
                        </div>
                        <!-- .blog-items -->

                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-md-4">
                        <div class="sidebar">

                            <div class="widget">
                                <h4 class="sidebar-widget-title">Profesi</h4>
                                <div class="widget-content">
                                    <ul class="catagories">
                                        <?php
                                        foreach ($kategori as $kat) {
                                        ?>
                                            <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?php echo $kat['nama_kategori']; ?> <span>05</span></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <!-- .widget-content -->
                            </div>
                            <!-- .widget -->
                            <div class="widget">
                                <h4 class="sidebar-widget-title">Related Event</h4>
                                <div class="widget-content">
                                    <ul class="popular-news-option">
                                        <li>
                                            <div class="popular-news-img">
                                                <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/popular-news-img-1.jpg" alt="popular-news-img-1" /></a>
                                            </div>
                                            <!-- .popular-news-img -->
                                            <div class="popular-news-contant">
                                                <h5><a href="#">Foulate revlunry a mihare awesome the theme.</a></h5>
                                                <p>04 February 2016</p>
                                            </div>
                                            <!-- .popular-news-img -->
                                        </li>

                                    </ul>

                                </div>
                                <!-- .widget-content -->
                            </div>
                            <!-- .widget -->
                            <div class="widget">
                                <h4 class="sidebar-widget-title">photo gallery</h4>
                                <div class="widget-content">
                                    <div class="gallery-instagram">
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-1.jpg" alt="photo-gallery-small-img-1"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-2.jpg" alt="footer-instagram-img-2"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-3.jpg" alt="footer-instagram-img-3"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-4.jpg" alt="footer-instagram-img-4"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-5.jpg" alt="footer-instagram-img-5"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-6.jpg" alt="footer-instagram-img-6"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-7.jpg" alt="footer-instagram-img-7"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-8.jpg" alt="footer-instagram-img-8"></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/event/photo-gallery-small-img-9.jpg" alt="footer-instagram-img-9"></a>

                                    </div>
                                    <!-- .gallery-instagram -->
                                </div>
                                <!-- .widget-content -->
                            </div>
                            <!-- .widget -->
                            <div class="widget">
                                <h4 class="sidebar-widget-title">Kategori Lokasi</h4>
                                <div class="widget-content">
                                    <div class="tag-cloud">
                                        <a href="#" class="btn">children</a>
                                    </div>
                                    <!-- .tag-cloud -->
                                </div>
                                <!-- .widget-content -->
                            </div>
                            <!-- .widget -->
                        </div>
                        <!-- .sidebar -->
                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .single-blog -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>


<!-- End Single Events Section -->