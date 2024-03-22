<?php get_header(); ?>
<section id="subheader" data-stellar-background-ratio=".3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="designer-font">BIMP</h1>
                <div class="small-border-deco"><span></span></div>
                <ul class="crumb">
                    <li><a href="index.html">Servicios</a></li>
                    <li class="sep"></li>
                    <li>Bimp</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- subheader close -->

<!-- content begin -->
<div id="content" class="no-bottom">
    <div class="container">
        <div class="row">
            <?php
            $serv_slid = new WP_Query('post_type=servicios');
            if (have_posts()) : while ($serv_slid->have_posts()) : $serv_slid->the_post();
                    //$img_slider = get_field('img_slider',get_the_ID());
                    global $post;
                    $titulo = get_the_title();
                    $slug = basename(get_permalink($post->ID));
            ?>
                    <div class="col-md-4 col-sm-6 mb30">
                        <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="<?php echo home_url(); ?>/servicios/<?php echo $slug; ?>">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                            <span class="bg-overlay"></span>
                            <img src="<?php bloginfo('template_url'); ?>/images/services/ELEC-2.png" class="img-responsive" alt="">
                        </figure>

                        <h3><?php echo $titulo; ?></h3>
                        <?php substr(the_content(), 0, -100); ?>
      
                        <br>
                        <a href="<?php echo home_url(); ?>/servicios/<?php echo $slug; ?>" class="read_more mt10">ver más <i class="fa fa-chevron-right id-color"></i></a>

                    </div>
            <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>

    <!-- section begin -->
    <section class="call-to-action bg-color dark mt80 pt20 pb20" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="mt10">¿Busca el mejor socio para sus próximas obras de construcción?</h3>
                </div>

                <div class="col-md-4 text-right">
                    <a href="" class="btn btn-line-black btn-fx">Contáctanos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo carousel section close -->

</div>
<?php get_footer(); ?>