        <!-- Start Blog Section -->


        <section class="bg-blog-section">
            <div class="container">
                <div class="row">
                    <div class="blog-section">
                        <div class="section-header">
                            <h2>Event Mendatang</h2>
                            <p>Catat tanggalnya dan segera pesan acara yang kamu suka</p>
                        </div>
                        <!-- .section-header -->
                        <div class="row">

                            <?php
                            foreach ($berita as $event) {
                            ?>
                                <div class="col-md-4 col-sm-6 col-xs-6 col-xs-6 col-xs-6 col-xs-4">
                                    <div class="blog-items">
                                        <div class="blog-img">
                                            <a href="<?php echo base_url() ?>/product/detail/<?php echo $event['slug_berita'] ?>">
                                                <img src="<?php echo base_url() ?>/assets/upload/image/<?php echo $event['gambar'] ?>" alt="blog-img-1" class="img-responsive" /></a>
                                        </div>
                                        <!-- .blog-img -->
                                        <div class="blog-content-box">
                                            <div class="blog-content">


                                                <a href="<?php echo base_url() ?>/product/detail/<?php echo $event['slug_berita'] ?>">
                                                    <strong><?php echo substr($event['judul_berita'], 0, 40); ?></strong>
                                                </a>
                                            </div>
                                            <!-- .blog-content -->
                                            <div class="meta-box">
                                                <ul class="meta-post">
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <?= $event['tanggal_awal']; ?></li>
                                                    <li><a href="#"><i class="fa fa-users"></i> <?= $event['kuota']; ?> peserta</a></li>
                                                    <li><a href="#"><i class="fa fa-file"></i> <?= $event['skp_utama']; ?> SKP</a></li>
                                                </ul>
                                            </div>
                                            <!-- .meta-box -->
                                        </div>
                                        <!-- .blog-content-box -->
                                    </div>
                                    <!-- .blog-items -->
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .blog-section -->
                </div>
                <!-- .container -->
            </div>
            <!-- .bg-blog-section -->
        </section>


        <!-- End Blog Section -->