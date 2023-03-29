<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title><?= config("app.APP_NAME") ?></title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= request()->baseUrl(); ?>/assets/images/logo.png" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/LineIcons.css">

    <!--====== Material Design Icons CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/materialdesignicons.min.css">

    <!--====== Jquery Ui CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/jquery-ui.min.css">

    <!--====== nice select CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/nice-select.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= request()->baseUrl(); ?>/assets/css/style.css">
    <?= $this->section('css') ?>
</head>

<body>
    <div class="preloader">
            <div class="loader">
                <div class="ytp-spinner">
                    <div class="ytp-spinner-container">
                        <div class="ytp-spinner-rotator">
                            <div class="ytp-spinner-left">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                            <div class="ytp-spinner-right">
                                <div class="ytp-spinner-circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?= $this->insert('layouts/header') ?>
      <?= $this->section('page') ?>

      <!-- Footer section -->
      <?= $this->insert('layouts/footer') ?>
      <?php $this->start('js') ?>
       <!-- Footer section -->
      <?= $this->insert('product/product-script'); ?>
      <?php $this->stop() ?>
      <?= $this->insert('layouts/logout_modal') ?>
      <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--====== Jquery js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="<?= request()->baseUrl(); ?>/assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!--====== Slick js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/slick.min.js"></script>

    <!--====== Accordion Steps Form js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/jquery-vj-accordion-steps.js"></script>

    <!--====== Jquery Ui js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/jquery-ui.min.js"></script>
    <!--====== Form validator js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/jquery.form-validator.min.js"></script>

    <script src="<?= request()->baseUrl(); ?>/assets/js/glightbox.min.js"></script>
    <script src="<?= request()->baseUrl(); ?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= request()->baseUrl(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= request()->baseUrl(); ?>/assets/js/tiny-slider.js"></script>
    <!--====== formatter js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/jquery.formatter.min.js"></script>

    <!--====== Main js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/count-up.min.js"></script>

    <!--====== Main js ======-->
    <script src="<?= request()->baseUrl(); ?>/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>#toast-container > .toast-success{ background-color: #51A351;}</style>
    <style>#toast-container > .toast-info { background-color: #0033CC;}</style>
    <style>#toast-container > .toast-error { background-color:red;}</style>
    <?= $this->insert('layouts/notifications'); ?>

    <?= $this->section('js') ?>
</body>
</html>