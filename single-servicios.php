<?php
get_header();
wp_reset_query();
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
$titulo = get_the_title();
$slug = basename(get_permalink($post->ID));


?>
<!-- subheader -->
<section id="subheader" data-stellar-background-ratio=".3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="designer-font"><?php echo $titulo; ?></h1>
                <div class="small-border-deco"><span></span></div>
                <ul class="crumb">
                    <li><a href="index.html">BIMP</a></li>
                    <li class="sep"></li>
                    <li><?php echo $titulo; ?></li>
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
                        <img src="<?php bloginfo('template_url'); ?>/images/services/ELEC-2.png" class="img-responsive" alt="">
                        <img src="<?php bloginfo('template_url'); ?>/images/services/ELEC-2.png" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6">
                        <?php echo the_content(); ?> </div>
                </div>

                <div class="spacer-single"></div>

                <h3>Proyectos relacionados<span class="tiny-border"></span></h3>

                <div class="spacer-half"></div>

                <div id="gallery" class="gallery full-gallery de-gallery pf_full_width">

                    <!-- gallery item -->
                    <div class="item office commercial">
                        <div class="picframe">
                            <a href="project-details-5.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Modern Office</span>
                                    </span>
                                </span>
                            </a>
                            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(5).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                            <a href="project-details-6.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Country Side House</span>
                                    </span>
                                </span>
                            </a>
                            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(6).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item office education">
                        <div class="picframe">
                            <a href="project-details-7.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">Cube Office</span>
                                    </span>
                                </span>
                            </a>

                            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(7).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                    <!-- gallery item -->
                    <div class="item residential">
                        <div class="picframe">
                            <a href="project-details-8.html">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">London Luxury House</span>
                                    </span>
                                </span>
                            </a>

                            <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(8).jpg" alt="" />
                        </div>
                    </div>
                    <!-- close gallery item -->

                </div>

            </div>

            <div id="sidebar" class="col-md-3">
                <div class="widget">
                    <ul id="services-list">
                        <?php
                        $serv_slid = new WP_Query('post_type=servicios');
                        if (have_posts()) : while ($serv_slid->have_posts()) : $serv_slid->the_post();
                                //$img_slider = get_field('img_slider',get_the_ID());
                                global $post;
                                $titulo = get_the_title();
                                $slug = basename(get_permalink($post->ID));
                        ?>
                                <li class="active"><a href="<?php echo home_url(); ?>/servicios/<?php echo $slug; ?>"><?php echo $titulo; ?></a></li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>

                <div class="widget">
                    <div class="padding30 text-black" data-bgimage="url(images/background/banner-1.jpg)">
                        <h4>¡Atención!</h4>
                        ¿Busca el mejor socio para sus próximas obras de construcción?
                        <div class="text-center">
                            <a href="" class="btn btn-line-black btn-fx mt20">Contáctanos</a>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <a href="#" class="btn btn-custom btn-bg-dark btn-text-light btn-icon-left btn-fx width100"><i class="fa fa-file-pdf-o"></i>Brochure</a>
                </div>
            </div>





        </div>
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
<?php get_footer(); ?>