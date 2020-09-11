<?php

/**
 * Template Name: FAQ
 */

/* Header */
get_header();

?>


<main>
    <section id="faq">
        <div class="overlay_faq">
            <div class="container-fluid blog_presentation">
                <div class="row py-5 m-0 px-0">
                    <div class="col d-flex flex-column justify-content-center align-items-center">
                        <h2 class="section_title text-center">
                            Common Questions
                        </h2>
                        <p class="subtitle">
                            Answers to your Questions
                        </p>
                    </div>
                </div>
            </div>
            <div class="container pb-5">
                <div class="row">
                    <?php
                    if (get_query_var('paged')) {
                        $paged = get_query_var('paged');
                    } else if (get_query_var('page')) {
                        $paged = get_query_var('page');
                    } else {
                        $paged = 1;
                    }

                    $faq_custom_args = array(
                        'post_type' => 'faq',
                        'posts_per_page' => 20,
                        'order' => 'ASC',
                        'paged' => $paged
                    );


                    ?>
                    <div class="col faq_content">
                        <div id="accordion">
                            <?php
                            $faq_custom_query = new WP_Query($faq_custom_args);
                            $index                     = 0;

                            if ($faq_custom_query->have_posts()) :


                                while ($faq_custom_query->have_posts()) :
                                    $faq_custom_query->the_post();

                                    $date                      = get_the_date();
                                    $question                  = get_field('question');
                                    $answer                    = get_field('answer');

                                    if (!empty($question)) :
                                        $index++;
                                    endif;

                            ?>
                                    <div class="custom__card">
                                        <div id="<?php echo 'heading' . $index ?>" class="faq_heading">
                                            <h5 class="mb-0">
                                                <button class="btn faq_custom_btn collapsed" data-toggle="collapse" data-target="<?php echo '#collapse' . $index ?>" aria-expanded="true" aria-controls="<?php echo 'collapse' . $index ?>">
                                                    <span><?php echo $question ?></span>
                                                    <i class="fa collapse_icon"></i>
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="<?php echo 'collapse' . $index ?>" class="collapse" aria-labelledby="<?php echo 'heading' . $index ?>" data-parent="#accordion">
                                            <div class="card-body">
                                                <?php echo $answer ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                                if (function_exists('vb_pagination')) {
                                    vb_pagination($custom_query);
                                }

                                wp_reset_postdata();

                            endif;
        ?>
        <div class="container-fluid p-0 overflow-hidden">
            <div class="row free_trial_row m-0">
                <div class="col p-0 d-flex flex-column justify-content-center align-items-center section_header">
                    <p class="section_subtitle">
                        Start your journey with us now!
                    </p>
                    <h2 class="section_title text-center">
                        Sign up now to get your own platform and free demo!
                    </h2>
                    <a href="https://venedash.io/get-started" class="big_cta btn modal-signup-form">
                        get started
                    </a>
                    <ul class="row d-flex flex-row justify-content-around align-items-start mobile_list contact_mobile_list">
                        <li>
                            <i class="fa fa-check"></i>
                            Fraud Protection
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            Traffic Risk Management
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            Integrated Billing Feature
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            Intelligent Smartlinks
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            URL-Checker
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
<?php
get_footer();
?>
