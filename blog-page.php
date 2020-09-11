<?php

/**
 * Template Name: Blog
 */

/* Header */
get_header();

?>


<main>
    <div class="container-fluid blog_presentation">
        <div class="row py-5 m-0 px-0">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <p class="section_subtitle">
                    Find out whats new
                </p>
                <h2 class="section_title text-center">
                    Welcome to our<span class="mobile_none"> offical</span> blog
                </h2>
            </div>
        </div>
        <?php

        $presentation_post = array(
            'post_type' => 'blog',
            'posts_per_page' => 1,
            // 'meta_key'			=> 'start_date',
            // 'orderby'			=> 'meta_value',
            'order'                => 'DESC'
        );

        $first_query = new WP_Query($presentation_post);

        if ($first_query->have_posts()) :
            $first_query->the_post();

            $date                      = get_the_date();
            $url                       = get_permalink();
            $title                     = get_field('title');
            $post_image                = get_field('post_image');
            $img_url                   = "";

            if (!empty($post_image)) :
                $img_url = $post_image['url'];
            endif;
        ?>
            <div class="container">
                <div class="row">
                    <div class="col px-0 presentation_post">
                        <a href="<?php echo $url; ?>" class="item__link">
                            <img class="presentation_post_img" src="<?php echo $img_url; ?>" alt="last post">
                            <div class="post_title_wrap">
                                <p class="post_date p-2"><?php echo $date; ?></p>
                                <h2 class="presentation_post_title text-left my-0 pl-2"><?php echo $title; ?></h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <p class="posts_section_title">
                    Latest posts
                </p>
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-center align-items-center mx-0 pb-5">
            <?php
            if (get_query_var('paged')) {
                $paged = get_query_var('paged');
            } else if (get_query_var('page')) {
                $paged = get_query_var('page');
            } else {
                $paged = 1;
            }

            $custom_args = array(
                'post_type' => 'blog',
                'posts_per_page' => 6,
                'order' => 'DESC',
                'paged' => $paged
            );

            $custom_query = new WP_Query($custom_args);

            if ($custom_query->have_posts()) :


                while ($custom_query->have_posts()) :
                    $custom_query->the_post();

                    $date                      = get_the_date();
                    $url                       = get_permalink();
                    $title                     = get_field('title');
                    $post_image                = get_field('post_image');
                    $img_url                   = "";

                    if (!empty($post_image)) :
                        $img_url = $post_image['url'];
                    endif;

            ?>
                    <div class="col-md-4 pb-2">
                        <div class="post_box">
                            <a href="<?php echo $url; ?>" class="item__link">
                                <img class="post_img" src="<?php echo $img_url; ?>" alt="last post">
                                <div class="post_title_wrap">
                                    <p class="post_date p-2"><?php echo $date; ?></p>
                                    <h2 class="post_title text-left pl-2 my-0"><?php echo $title; ?></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
        </div>
    </div>
<?php
                if (function_exists('vb_pagination')) {
                    vb_pagination($custom_query);
                }

                wp_reset_postdata();

            endif;
?>

</main>
<?php
get_footer();
?>
