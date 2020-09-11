<?php
$page_id = get_queried_object_id();
?>
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Unidades</h2>
            </div>
            <?php
            query_posts(array(
                'posts_per_page'    => -1,
                'post_type'         => 'unidades',
                'order'             => 'ASC',
                'orderby'           => 'title'
            ));

            if( have_posts() ) :
                while( have_posts() ) :
                    the_post();
                    $url        = get_permalink();
                    $nome       = get_field('nome');
                    $telefone   = get_field('telefone');
                    $endereco   = get_field('endereco');
                    $facebook   = get_field('facebook');
                    $instagram  = get_field('instagram');
                    $iframe     = get_field('iframe');
                    $logo       = get_field('logo');
                    $logo_url   = "";
                    if( !empty($logo) ):
                        $logo_url = $logo['url'];
                    endif; 
                    ?>
                    <div class="col-lg-4" data-aos="zoom-in" data-aos-duration="1500">
                        <div class="contact__container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="contact__title"><?php echo $nome; ?></h3>
                                    <div class="contact__logo" style="background-image: url('<?php echo $logo_url; ?>')"></div>
                                </div>
                                <div class="col-12 mb-4">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <address>
                                        <?php echo $endereco; ?>
                                    </address>
                                </div>
                                <div class="col-12 mb-4">
                                    <i class="fas fa-phone"></i>
                                    <p><a href="#"><?php echo $telefone; ?></a></p>
                                </div>
                                <div class="col-12 mb-4">
                                    <ul class="list">
                                        <?php if( !empty($facebook)) :?>
                                            <li class="list__item"><a class="list__link" href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a></li>
                                        <?php endif; ?>
                                        <?php if( !empty($instagram)) :?>
                                            <li class="list__item"><a class="list__link" href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <?php
                                $template = "front-page.php";
                                $page_template = esc_html( get_page_template_slug( $page_id ) );

                                if ($template != $page_template)  : ?>
                                    <div class="col-12 mb-4">
                                        <div class="contact__map">
                                            <?php echo $iframe; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;

            wp_reset_query();
            ?>
        </div>
    </div>
</section>