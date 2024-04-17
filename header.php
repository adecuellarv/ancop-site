<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ancorp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ancop BIMB y mantenimiento integral">
    <meta name="keywords" content="construction,multipurpose,onepage,responsive,minimal,bootstrap,theme">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/color.css" type="text/css" id="colors">

    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/revolution/css/settings.css">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/revolution/css/navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
</head>
</head>

<body id="homepage">
    <div id="wrapper">
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>Calle: Jose Bustamante, #130-A, Colonia Valle Alameda, Querétaro </div>
                            <div class="col"><span class="id-color"><i class="fa fa-phone"></i></span>(442) 237 3145 / (442) 784 9686</div>


                        </div>
                        <div class="col-md-4 text-right">

                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo home_url(); ?>">
                                <img class="logo" style="
                                    width: 250px;" src="<?php bloginfo('template_url'); ?>/images/logo_white.png" alt="">
                                <img class="logo-2" style="
                                    width: 250px;" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li>
                                    <a class="<?php if (is_home()) {
                                                    echo 'active';
                                                } ?>" href="<?php echo home_url(); ?>">Inicio</a>
                                </li>
                                <li><a class="<?php if (is_page('nuestros-servicios') || is_single()) {
                                                    echo 'active';
                                                } ?>">Servicios</a>
                                    <ul>
                                        <?php
                                        $cat_parents = get_terms(array(
                                            'taxonomy' => 'categoria',
                                            'hide_empty' => false,
                                            'parent' => 0
                                        ));
                                        ?>
                                        <?php foreach ($cat_parents as $item) { ?>
                                            <li>
                                                <a href="<?php echo home_url(); ?>/nuestros-servicios?categoria=<?php echo $item->slug; ?>"><?php echo $item->name; ?></a>
                                                <ul>
                                                    <?php
                                                    $args =  array(
                                                        'post_type' => 'servicios',
                                                        'orderby' => 'title',
                                                        'tax_query' => array(
                                                            array(
                                                                'taxonomy' => 'categoria',
                                                                'field' => 'slug',
                                                                'terms' => $item->slug
                                                            )
                                                        )
                                                    );
                                                    $services = new WP_Query($args);
                                                    if (have_posts()) : while ($services->have_posts()) : $services->the_post();
                                                            //$img_slider = get_field('img_slider',get_the_ID());
                                                            global $post;
                                                            $titulo = get_the_title();
                                                            $slug = basename(get_permalink($post->ID));
                                                    ?>
                                                            <li><a style="font-size:12px;" href="<?php echo home_url(); ?>/servicios/<?php echo $slug; ?>"><?php echo $titulo; ?></a></li>
                                                    <?php
                                                        endwhile;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a href="<?php if (is_home()) {
                                                    echo "#portafolio";
                                                } else {
                                                    echo home_url() . '#portafolio';
                                                } ?>">Portafolio</a></li>
                                <li><a href="<?php if (is_home()) {
                                                    echo "#clientes";
                                                } else {
                                                    echo home_url() . '#clientes';
                                                } ?>">Clientes</a></li>
                                <li><a class="<?php if (is_page('nosotros')) {
                                                    echo 'active';
                                                } ?>" href="<?php echo home_url(); ?>/nosotros">Nosotros</a>
                                </li>
                                <li><a class="<?php if (is_page('contacto')) {
                                                    echo 'active';
                                                } ?>" href="<?php echo home_url(); ?>/contacto">Contacto</a></li>
                            </ul>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>