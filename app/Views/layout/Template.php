<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="<?= base_url(); ?>/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style-custom.css">
</head>

<body>

    <?= $this->include('layout/navbar'); ?>
    <?= $this->renderSection('content'); ?>

    <footer>

        <!-- Footer Start-->
        <div class="footer-main" data-background="assets/img/shape/footer_bg.png">
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="<?= base_url(); ?>/index.html"><img src="<?= base_url(); ?>/assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">221B Baker Street, P.O Box 353 Park <br> Road, USA - 215431</p>
                                            <p class="info2">info@yourdomain.com</p>
                                        </div>
                                    </div>
                                    <div class="footer-social">
                                        <a href="<?= base_url(); ?>/#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="<?= base_url(); ?>/#"><i class="fab fa-twitter"></i></a>
                                        <a href="<?= base_url(); ?>/#"><i class="fas fa-globe"></i></a>
                                        <a href="<?= base_url(); ?>/#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Links</h4>
                                    <ul>
                                        <li><a href="<?= base_url(); ?>/about.html">About</a></li>
                                        <li><a href="<?= base_url(); ?>/about.html">Features</a></li>
                                        <li><a href="<?= base_url(); ?>/single-blog.html">Pricing</a></li>
                                        <li><a href="<?= base_url(); ?>/blog.html">Blog</a></li>
                                        <li><a href="<?= base_url(); ?>/contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-7">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="<?= base_url(); ?>/#">Privacy Policy</a></li>
                                        <li><a href="<?= base_url(); ?>/#">Terms & Conditions</a></li>
                                        <li><a href="<?= base_url(); ?>/#"> Sitemap</a></li>
                                        <li><a href="<?= base_url(); ?>/#">FAQs</a></li>
                                        <li><a href="<?= base_url(); ?>/#">Report a bugb</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Core Features</h4>
                                    <ul>
                                        <li><a href="<?= base_url(); ?>/#">Email Marketing</a></li>
                                        <li><a href="<?= base_url(); ?>/#"> Offline SEO</a></li>
                                        <li><a href="<?= base_url(); ?>/#">Social Media Marketing</a></li>
                                        <li><a href="<?= base_url(); ?>/#">Lead Generation</a></li>
                                        <li><a href="<?= base_url(); ?>/#"> 24/7 Support</a></li>
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
                                        </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="<?= base_url(); ?>/https://colorlib.com" target="_blank">Colorlib</a>
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
    <script src="<?= base_url(); ?>/./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url(); ?>/./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url(); ?>/./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url(); ?>/./assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="<?= base_url(); ?>/./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url(); ?>/./assets/js/wow.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/animated.headline.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url(); ?>/./assets/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= base_url(); ?>/./assets/js/contact.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.form.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.validate.min.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/mail-script.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url(); ?>/./assets/js/plugins.js"></script>
    <script src="<?= base_url(); ?>/./assets/js/main.js"></script>

</body>


</html>