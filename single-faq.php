<?php
/* Header */
get_header();

$date                   = get_the_date();
$url                    = get_permalink();
$title                  = get_field('title');
$faq_image             = get_field('faq_image');
$faq                   = get_field('faq_content');
$user                   = get_field("author");
$img_url                = "";
$avatar_img_url         = "";

if (!empty($faq_image) && !empty($user)) :
    $img_url = $faq_image['url'];
    $avatar_img_url = $user['user_avatar'];
endif;
?>
<section class="post_page">
    <div class="container">
        <div class="row py-5">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <p class="post_date">
                    <?php echo $date; ?>
                </p>
                <h2 class="section_title text-center mb-2">
                    <?php echo $title; ?>
                </h2>
                <img class="presentation_post_img" src="<?php echo $img_url; ?>" alt="">
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <div class="col d-flex flex-column post_content">
                <?php echo $faq; ?>
                <div class="author-box d-flex flex-row align-items-start mb-3">
                    <div class="avatar_image">
                        <?php print  $avatar_img_url; ?>
                    </div>
                    <p><?php echo $user['display_name']; ?><br> 
                    <?php echo $user['user_description']; ?> </p>

                </div>
            </div>
        </div>
    </div>
</section>
<?php
/* Footer */
get_footer();
?>