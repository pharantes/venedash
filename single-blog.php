<?php
/* Header */
get_header();

$date                   = get_the_date();
$url                    = get_permalink();
$title                  = get_field('title');
$post_image             = get_field('post_image');
$post                   = get_field('post');
$user                   = get_field('author');
$img_url                = "";
$avatar_img_url         = "";
$share_url              = urldecode("https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

if (!empty($post_image) && !empty($user)) :
    $img_url = $post_image['url'];
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
                <h2 class="section_title text-center pb-3 mb-2">
                    <?php echo $title; ?>
                </h2>
                <img class="presentation_post_img" src="<?php echo $img_url; ?>" alt="">
            </div>
        </div>
        <div class="row d-flex flex-row justify-content-center align-items-center">
            <div class="col d-flex flex-column post_content">
                <?php echo $post; ?>
                <div class="author-box d-flex flex-row align-items-center">
                    <div class="avatar_image">
                        <?php print  $avatar_img_url; ?>
                    </div>
                    <p class="text-left"><span style="font-weight: 600"><?php echo $user['display_name']; ?></span><br>
                    <?php echo $user['user_description']; ?></p>
                </div>
                <div class="share_btns py-5 d-flex">
                    <p>Share: </p>
                    <a class="share-btn ml-2" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_url ?>" title="Share on Facebook">
                        <img class="share-icon" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/share_FB.svg" alt="Share on Facebook">
                    </a>
                    <a class="share-btn ml-2" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_url ?>" title="Share on LinkedIn">
                        <img class="share-icon" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/share_Linkedin.svg" alt="Share on LinkedIn">
                    </a>
                    <a class="share-btn ml-2" target="_blank" href="https://twitter.com/share?url=<?php echo $share_url ?>&text=<?php echo $title; ?>&via=venedash" title="Share on Twitter">
                        <img class="share-icon" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/share_twitter.svg" alt="Share on Twitter">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
/* Footer */
get_footer();
?>