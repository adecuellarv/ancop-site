<?php
get_header();
$slug_cat = $_GET['categoria'];
$taxonomy_details = get_term_by('slug', $slug_cat, 'categoria');
$image_cat = get_field('imagen', $taxonomy_details->taxonomy . '_' . $taxonomy_details->term_id);

$args =  array(
    'post_type' => 'servicios',
    'orderby' => 'title',
    'tax_query' => array(
        array(
            'taxonomy' => 'categoria',
            'field' => 'slug',
            'terms' => $taxonomy_details->slug
        )
    )
);
$services = new WP_Query($args);
?>
<!-- subheader -->
<section id="subheader" data-stellar-background-ratio=".3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $taxonomy_details->name; ?></h1>
                <div class="small-border-deco"><span></span></div>
                <ul class="crumb">
                    <li><a style="color: #fff;" href="<?php echo home_url(); ?>">Inicio</a></li>
                    <li class="sep"></li>
                    <li><strong style="font-size: 16px;"><?php echo $taxonomy_details->name; ?></strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="row">

                    <div class="col-md-6 pic-services">
                        <img src="<?php echo $image_cat; ?>" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6">
                        <p><?php echo $taxonomy_details->description; ?></p>
                    </div>
                </div>

                <div class="spacer-single"></div>

                <div>
                    <div class="widget text-center">
                        <div class="padding30 text-black" data-bgimage="url(images/background/banner-1.jpg)">
                            <h4>¡Atención!</h4>
                            ¿Buscas el mejor socio para sus próximas obras de construcción?
                            <div class="">
                                <a href="<?php echo home_url(); ?>/contacto" class="btn btn-line-black btn-fx mt20">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="sidebar" class="col-md-3">
                <div class="widget">
                    <ul id="services-list">
                        <?php
                        if (have_posts()) : while ($services->have_posts()) : $services->the_post();
                                global $post;
                                $titulo = get_the_title();
                                $slug = basename(get_permalink($post->ID));
                        ?>
                                <li><a href="<?php echo home_url(); ?>/servicios/<?php echo $slug; ?>"><?php echo $titulo; ?></a></li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>


                <div class="widget">
                    <a href="#" class="btn btn-custom btn-bg-dark btn-text-light btn-icon-left btn-fx width100"><i class="fa fa-file-pdf-o"></i>Brochure</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section begin -->
<!-- logo carousel section close -->
<?php get_footer(); ?>