<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.codexcoder.com/labartisan/html/GreenForest/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Feb 2019 23:20:58 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/images/logo-acara-kesehatan.png" />
    <!-- Plugin css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/fonts/flaticon.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/swiper.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/lightcase.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/jquery.nstSlider.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/flexslider.css" media="all" />
    <!-- own style css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/rtl.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets/green/assets/css/responsive.css" media="all" />
    <style>
        h1,
        h2,
        p,
        a {
            font-family: sans-serif;
            font-weight: normal;
        }

        .jam-digital-malasngoding {
            overflow: hidden;
            width: 400px;
            margin: 20px auto;
            border: 0px
        }

        .kotak {
            float: left;
            width: 30px;
            background-color: #189fff;
        }

        .jam-digital-malasngoding p {
            color: #fff;
            font-size: 18px;
            text-align: center;
            margin-top: 3px;
        }
    </style>

</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v9.0&appId=1080901662376658&autoLogAppEvents=1" nonce="W2nsFC6y"></script>

    <header class="header-style-2">

        <!-- .bg-header-top -->

        <!-- Start Menu -->
        <div class="bg-main-menu menu-scroll">
            <div class="container">
                <div class="row">
                    <div class="main-menu">

                        <nav class="navbar">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>/assets/images/logo-acara-kesehatan.png" width="70px" /></a>

                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">

                                    <li <?php if ($title == "About") { ?> class="active" <?php } ?>><a href="<?php echo base_url('about') ?>">About</a></li>
                                    <li <?php if ($title == "Product") { ?> class="active" <?php } ?>><a href="<?php echo base_url('product') ?>">Product</a></li>
                                    <li <?php if ($title == "Event") { ?> class="active" <?php } ?>><a href="<?php echo base_url('home/event') ?>">Event</a></li>
                                    <li <?php if ($title == "Shop") { ?> class="active" <?php } ?>><a href="<?php echo base_url('home/shop') ?>">Shop</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li><a href="services.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Jasa MC</a></li>
                                            <li><a href="service_single.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Digital Edukasi</a></li>
                                            <li><a href="service_single.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Event Creator</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                    $session = \Config\Services::session($config);
                                    // Proteksi
                                    if ($session->get('username') == "") {

                                    ?>
                                        <li><a href="<?php echo base_url('login') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                                    <?php
                                    } else {
                                    ?>
                                        <li><a href="<?php echo base_url('login/logout') ?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                                <div class="menu-right-option pull-right">

                                    <div class="cart-option">
                                        <div class="cart-icon">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <div class="count-cart">2</div>
                                        </div>
                                        <!-- .cart-icon -->
                                        <div class="cart-dropdown-menu">
                                            <div class="cart-items">
                                                <div class="cart-img">
                                                    <a href="single_shop_cat.html"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/cart-img-1.jpg" alt="cart-img-1"></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h6><a href="single_shop_cat.html">Product Title Here</a></h6>
                                                    <p>1*<span>$350</span></p>
                                                </div>
                                                <div class="cart-btn">
                                                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                            <!-- .cart-items -->

                                            <div class="cart-items">
                                                <div class="cart-img">
                                                    <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/cart-img-2.jpg" alt="cart-img-2"></a>
                                                </div>
                                                <div class="cart-content">
                                                    <h6><a href="single_shop_cat.html">Product Title Here</a></h6>
                                                    <p>1*<span>$350</span></p>
                                                </div>
                                                <div class="cart-btn">
                                                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                            <!-- .cart-items -->
                                            <div class="total-price">
                                                <p><span>Total Price :</span> $700 </p>
                                            </div>
                                            <!-- .total-prices -->
                                            <div class="checkout-btn">
                                                <a href="<?php echo base_url('shop') ?>" class="btn btn-default">Checkout</a>
                                            </div>
                                        </div>
                                        <!-- .cart-dropdown-menu -->
                                    </div>
                                    <!-- .cart-option -->

                                    <div class="search-box">
                                        <i class="fa fa-search first_click" aria-hidden="true" style="display: block;"></i>
                                        <i class="fa fa-times second_click" aria-hidden="true" style="display: none;"></i>
                                    </div>
                                    <div class="search-box-text">
                                        <form action="<?php echo base_url('home/shop') ?>">
                                            <input type="text" name="search" id="all-search" placeholder="Search Here">
                                        </form>
                                    </div>
                                </div>
                                <!-- .header-search-box -->
                            </div>
                            <!-- .navbar-collapse -->
                        </nav>
                    </div>
                    <!-- .main-menu -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .bg-main-menu -->
    </header>
    <?php
    echo view($content);
    ?>
    <!-- Start Page Header Section -->
    <footer>
        <div class="bg-footer-top">
            <div class="container">
                <div class="row">
                    <div class="footer-top">
                        <div class="row">

                            <!-- .col-md-3 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="footer-widgets">
                                    <div class="widgets-title">
                                        <h3>Kategori Lokasi</h3>
                                    </div>
                                    <!-- .widgets-title -->
                                    <div class="tag-cloud">
                                        <?php
                                        foreach ($lokasi as $lok) {
                                        ?>
                                            <a href="#"><?php echo $lok['nama_provinsi'] ?></a>--
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- .footer-widgets -->
                            </div>
                            <!-- .col-md-3 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="footer-widgets">
                                    <div class="widgets-title">
                                        <h3>Kategori Profesi</h3>
                                    </div>
                                    <!-- .widgets-title -->
                                    <div class="tag-cloud">

                                        <?php
                                        foreach ($kategori as $kat) {
                                        ?>
                                            <a href="#" class="btn-default"><?php echo $kat['nama_kategori'] ?></a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <!-- .footer-widgets -->
                            </div>
                            <!-- .col-md-3 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="footer-widgets">
                                    <div class="widgets-title">
                                        <h3>OUR INSTAGRAM</h3>
                                    </div>
                                    <!-- .widgets-title -->
                                    <div class="footer-instagram">
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-1.jpg" alt="footer-instagram-img-1" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-2.jpg" alt="footer-instagram-img-2" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-3.jpg" alt="footer-instagram-img-3" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-4.jpg" alt="footer-instagram-img-4" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-5.jpg" alt="footer-instagram-img-5" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-6.jpg" alt="footer-instagram-img-6" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-7.jpg" alt="footer-instagram-img-7" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-8.jpg" alt="footer-instagram-img-8" /></a>
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/green/assets/images/home01/footer-instagram-img-9.jpg" alt="footer-instagram-img-9" /></a>
                                    </div>
                                    <!-- .footer-instagram -->
                                </div>
                                <!-- .footer-widgets -->
                            </div>
                            <!-- .col-md-3 -->
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .footer-top -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .bg-footer-top -->

        <div class="bg-footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="footer-bottom">
                        <div class="copyright-txt">
                            <p>&copy; 2017. Designer By <a href="#" title="Al-Amin(Web Designer)">LabArtisan</a></p>
                        </div>
                        <!-- .copyright-txt -->
                        <div class="social-box">
                            <ul class="social-icon-rounded">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                        <!-- .social-box -->

                    </div>
                    <!-- .footer-bottom -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </div>
        <!-- .bg-footer-bottom -->

    </footer>

    <!-- End Footer Section -->


    <!-- Start Scrolling -->

    <div class="scroll-img"><a href="https://ppni.or.id" target="_blank"><i class="fa fa-whatsapp" style="font-size:48px;color:red"></i></a></div>


    <!-- End Scrolling -->


    </div>
    <!-- Start Pre-Loader-->



    <!-- End Pre-Loader -->

    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/plugins.isotope.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/lightcase.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/jquery.nstSlider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/custom.isotope.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/custom.map.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/green/assets/js/custom.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqVIkdttPNjl5c5hKlc_Hk3bfXQQlf2Rc&amp;callback=initMap"></script>
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);

            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>

</html>