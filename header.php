<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="meta description">
    <title><?php wp_title(); ?></title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/'; ?>assets/img/favicon.ico" type="image/x-icon">
    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700%7CPlayfair+Display:400,400i%7CDancing+Script:400,700" rel="stylesheet">
    <!--=== All Plugins CSS ===-->
    <link href="<?php echo get_template_directory_uri() . '/'; ?>assets/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="<?php echo get_template_directory_uri() . '/'; ?>assets/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo get_template_directory_uri() . '/'; ?>assets/css/style.css" rel="stylesheet">

    <!-- Modernizer JS -->
    <script src="<?php echo get_template_directory_uri() . '/'; ?>assets/js/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class('preloader-active'); ?>>
    <!--== Start PreLoader Wrap ==-->
    <!-- <div class="preloader-area-wrap">
        <div class="spinner d-flex justify-content-center align-items-center h-100">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->
    <!--== End PreLoader Wrap ==-->
    <!--== Start Header Area Wrapper ==-->
    <header class="header-area-wrapper black-header narrow header-padding sticky-header">
        <div class="container">
            <div class="row">
                <!-- Start Logo Area Wrap -->
                <div class="col-6 col-lg-2">
                    <a href="<?php bloginfo('url') ?>" class="logo-wrap d-block" id="fr-logo">
                        <?php bloginfo('name') ?>
                    </a>
                </div>
                <!-- End Logo Area Wrap -->
                <!-- Start Main Navigation Wrap -->
                <div class="col-6 col-lg-10 my-auto ms-auto position-static">
                    <div class="header-right-area d-flex justify-content-end align-items-center">
                        <div class="navigation-area-wrap d-none d-lg-block">
                            <?php wp_nav_menu(array(
                                'theme_location' => 'header-menu',
                                'container' => 'nav',
                                'container_class' => 'main-navigation',
                                'menu_class' => 'main-menu nav justify-content-end'
                            )); ?>
                        </div>
                    </div><!-- End Main Navigation Wrap -->
                </div>
            </div>
        </div>
    </header>