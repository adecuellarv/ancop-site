<?php
get_header();
wp_reset_query();
global $post;
$thumbID = get_post_thumbnail_id($post->ID);
$imgDestacada = wp_get_attachment_url($thumbID);
$titulo = get_the_title();
$slug = basename(get_permalink($post->ID));
$slider = get_field('galeria', $post->ID);
$parent_id = get_the_category($post->ID);
$terms = get_the_terms($post->ID, 'categoria');
//$parent = get_the_category($post->ID);
//$tax_terms = get_terms('categoria', array('hide_empty' => false, 'parent_of' => $post->ID));
//print_r($tax_terms);
?>
<!-- subheader -->
<section id="subheader" data-stellar-background-ratio=".3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class=""><?php echo $titulo; ?></h1>
                <div class="small-border-deco"><span></span></div>
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
                    <div class="col-md-12" style="margin-bottom:50px;">
                        <?php echo the_content(); ?>
                    </div>
                    <?php foreach ($slider as $item) { ?>
                        <div class="col-md-6 pic-services">
                            <img src="<?php echo $item; ?>" class="img-responsive" alt="">
                        </div>
                    <?php } ?>
                </div>

                <div class="spacer-single"></div>


            </div>

            <div id="sidebar" class="col-md-3">
                <div class="widget">
                    <ul id="services-list">
                        <?php
                        $args_list = array(
                            'post_type' => 'servicios', // Reemplaza 'tu_tipo_de_post' con el nombre de tu tipo de publicación personalizado
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'categoria', // Reemplaza 'tu_taxonomia' con el nombre de tu taxonomía personalizada
                                    'field'    => 'slug', // Puedes usar 'id', 'slug' o 'name'
                                    'terms'    => $terms[0]->slug, // Reemplaza 'termino_de_taxonomia' con el slug o ID del término de la taxonomía que deseas consultar
                                ),
                            ),
                        );
                        
                        $serv_slid = new WP_Query($args_list);
                        if (have_posts()) : while ($serv_slid->have_posts()) : $serv_slid->the_post();

                                global $post;
                                $titulo_ = get_the_title();
                                $slug_ = basename(get_permalink($post->ID));
                                //echo $slug . '------' . $slug_;
                        ?>
                                <li class="<?php if ($slug_ == $slug) {
                                                echo 'active';
                                            } ?>"><a href="<?php echo home_url(); ?>/servicios/<?php echo $slug_; ?>"><?php echo $titulo_; ?></a></li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
                <div class="widget">
                    <a href="<?php echo get_site_url(); ?>/wp-content/uploads/2024/03/Brochure_ANCOP.pdf" target="_blank" class="btn btn-custom btn-bg-dark btn-text-light btn-icon-left btn-fx width100" style="color: 0% 0% / cover rgb(73, 74, 77);"><i class="fa fa-file-pdf-o"></i>Brochure</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section begin -->
<section class=" pt20 pb20" style="background: #494A4D;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="mt10" style="color: #fff;">¿Buscas el mejor socio para tus próximas obras de construcción?</h3>
            </div>

            <div class="col-md-4 text-right">
                <a href="<?php echo home_url(); ?>/contacto" class="btn btn-line-white btn-fx" style="color: #fff;">Contáctanos</a>
            </div>
        </div>
    </div>
</section>
<!-- logo carousel section close -->
<?php get_footer(); ?>