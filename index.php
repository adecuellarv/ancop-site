<?php get_header(); ?>
<div id="content" class="no-bottom no-top">

    <!-- section begin -->
    <section id="section-hero-2" class="full-height text-light relative" data-stellar-background-ratio=".2">

        <div class="center-y fadeScroll text-center relative" data-scroll-speed="1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="spacer-double"></div>
                        <h1 class="big wow fadeInUp designer-font" data-wow-delay=".5s">ANCOP</h1>
                        <br>
                        <div class="h2_title wow fadeInUp" data-wow-delay=".8s">
                            <div class="text-slider" style="color: #8fb1d4;">
                                <span class="text-item">Proyectos planeados son mejores proyectos</span>
                                <span class="text-item">Mantenimiento integral a tu servicio</span>
                            </div>
                        </div>
                        <div>
                            <p style="font-size: 18px;">Todas nuestras decisiones están orientadas a
                                mejorar la satisfacción de nuestros clientes. Nos
                                guiamos por la constante búsqueda de ofrecer
                                respuestas a las diversas necesidades de
                                nuestros colaboradores.</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <a href="#section-about" class="scroll-to">
            <span class="mouse fadeScroll relative" data-scroll-speed="2">
                <span class="scroll"></span>
            </span>
        </a>

    </section>
    <!-- section close -->

    <section id="section-about" class="no-top z-index100">
        <div class="container">
            <div class="row">
                <?php
                $cat_parents = get_terms(array(
                    'taxonomy' => 'categoria',
                    'hide_empty' => false,
                    'parent' => 0
                ));
                ?>
                <?php foreach ($cat_parents as $item) {
                    $image_cat = get_field('imagen', $item->taxonomy . '_' . $item->term_id);
                ?>
                    <div class="col-md-6" data-wow-delay=".2s">
                        <figure class="pic-hover hover-scale mt-40 mb20">
                            <span class="center-xy">
                                <a href="<?php echo home_url(); ?>/nuestros-servicios?categoria=<?php echo $item->slug; ?>">
                                    <i class="fa fa-arrow-circle-right btn-action btn-action-hide"></i></a>
                            </span>
                            <span class="bg-overlay"></span>
                            <img src="<?php echo $image_cat; ?>" class="img-responsive" style="height: 320px; width:100%; object-fit: cover;" alt="">
                        </figure>
                        <h3><?php echo $item->name; ?></h3>
                        <p >
                            <?php echo wp_trim_words( $item->description, 30 );?>
                            <br>
                            <a href="<?php echo home_url(); ?>/nuestros-servicios?categoria=<?php echo $item->slug; ?>" class="read_more mt10">Ver más <i class="fa fa-chevron-right id-color"></i></a>
                        </p>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>


    <section id="portafolio" class="no-bottom" aria-label="section-portfolio">
        <div class="container">
            <h2>Portafolio<span class="tiny-border"></span></h2>


            <!-- portfolio filter begin -->
            <div class="row">
                <div class="col-md-12">
                    <ul id="filters">
                        <li><a href="#" data-filter=".commercial">Comercial</a></li>
                        <li><a href="#" data-filter=".education">Educación</a></li>
                        <li><a href="#" data-filter=".hospitaly">Hospitales</a></li>
                        <li><a href="#" data-filter=".office">Oficina</a></li>
                        <li><a href="#" data-filter=".residential">Resindecial</a></li>
                        <li class="pull-right"><a href="#" data-filter="*" class="selected">Todos los proyectos</a></li>
                    </ul>

                </div>
            </div>
            <!-- portfolio filter close -->

        </div>

        <div id="gallery" class="gallery full-gallery de-gallery pf_full_width">

            <!-- gallery item -->
            <div class="item residential">
                <div class="picframe">
                    <a href="project-details-1.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Green House</span>
                            </span>
                        </span>
                    </a>
                    <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(1).jpg" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="item commercial education">
                <div class="picframe">
                    <a href="project-details-2.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Contemporary Building</span>
                            </span>
                        </span>
                    </a>

                    <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(2).jpg" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="item commercial hospitaly">
                <div class="picframe">
                    <a href="project-details-3.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Twin Tower</span>
                            </span>
                        </span>
                    </a>

                    <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(3).jpg" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

            <!-- gallery item -->
            <div class="item commercial hospitaly">
                <div class="picframe">
                    <a href="project-details-4.html">
                        <span class="overlay">
                            <span class="pf_text">
                                <span class="project-name">Modern Skyline</span>
                            </span>
                        </span>
                    </a>
                    <img src="<?php bloginfo('template_url'); ?>/images/portfolio/pf%20(4).jpg" alt="" />
                </div>
            </div>
            <!-- close gallery item -->

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
                    <a href="project-details-1.html">
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
                    <a href="project-details-2.html">
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
                    <a href="project-details-3.html">
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

    </section>


    <!-- section begin -->
    <section id="clientes" class="pt60 pb60">
        <div class="container">
            <h2>Clientes<span class="tiny-border"></span></h2>
            <div class="row">
                <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                    <div class="de_count">
                        <i class="icon_clock_alt id-color" data-animation="fadeInDown" data-delay="0"></i>
                        <h3>Santander</h3>
                        <span>Querétaro</span>
                    </div>
                </div>

                <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                    <div class="de_count">
                        <i class="icon_documents_alt  id-color" data-animation="fadeInDown" data-delay="200"></i>
                        <h3>Comercial</h3>
                        <span>San Luis</span>
                    </div>
                </div>

                <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="de_count">
                        <i class="icon_comment_alt  id-color" data-animation="fadeInDown" data-delay="400"></i>
                        <h3>Depot</h3>
                        <span>Querétaro</span>
                    </div>
                </div>

                <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                    <div class="de_count">
                        <i class="icon_globe id-color" data-animation="fadeInDown" data-delay="600"></i>
                        <h3>Amaris</h3>
                        <span>Querétaro</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


</div>
<?php get_footer(); ?>