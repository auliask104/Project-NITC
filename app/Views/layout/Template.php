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