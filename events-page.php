<?php

/**
 * Template Name: Events
 */

/* Header */
get_header();

?>


<main>
    <div class="container-fluid blog_presentation">
        <div class="row py-5 m-0 px-0">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <p class="section_subtitle">
                    Events
                </p>
                <h2 class="section_title text-center">
                    Where you can meet us
                </h2>
            </div>
        </div>
        <?php

        $presentation_event = array(
            'post_type' => 'event',
            'posts_per_page' => 1,
            // 'meta_key'			=> 'start_date',
            // 'orderby'			=> 'meta_value',
            'order'                => 'DESC'
        );

        $event_query = new WP_Query($presentation_event);

        if ($event_query->have_posts()) :
            $event_query->the_post();

            $date                      = get_the_date();
            $url                       = get_permalink();
            $title                     = get_field('title');
            $event_image                = get_field('event_image');
            $event_img_url                   = "";

            if (!empty($event_image)) :
                $event_img_url = $event_image['url'];
            endif;
        ?>
            <div class="container">
                <div class="row">
                    <div class="col px-0 pb-2 presentation_post">
                        <a href="<?php echo $url; ?>" class="item__link">

                            <img class="presentation_post_img" src="<?php echo $event_img_url; ?>" alt="last post">

                            <p class="post_date p-2"><?php echo $date; ?></p>
                            <h2 class="presentation_post_title text-left my-0 pl-2"><?php echo $title; ?></h2>
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
        <div class="row py-5">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <p class="posts_section_title">
                    Latest Events
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

            $event_custom_args = array(
                'post_type' => 'event',
                'posts_per_page' => 6,
                'order' => 'DESC',
                'paged' => $paged
            );

            $event_custom_query = new WP_Query($event_custom_args);

            if ($event_custom_query->have_posts()) :


                while ($event_custom_query->have_posts()) :
                    $event_custom_query->the_post();

                    $date                      = get_the_date();
                    $url                       = get_permalink();
                    $title                     = get_field('title');
                    $event_image                = get_field('event_image');
                    $event_img_url                   = "";

                    if (!empty($event_image)) :
                        $event_img_url = $event_image['url'];
                    endif;

            ?>
                    <div class="col-md-4 pb-2">
                        <div class="post_box">
                            <a href="<?php echo $url; ?>" class="item__link">
                                <img class="post_img" src="<?php echo $event_img_url; ?>" alt="last post">
                                <p class="post_date p-2"><?php echo $date; ?></p>
                                <h2 class="post_title text-left pl-2 my-0"><?php echo $title; ?></h2>
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
