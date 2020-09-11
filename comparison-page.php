<?php

/**
 * Template Name: Comparison
 */

/* Header */
get_header();

$posts = array(
    'posts_per_page'       => -1,
    'post_type'            => 'platforms'
);
$the_query = new WP_Query($posts);
if ($the_query->have_posts()) {
    echo "<script> var platforms = [] </script>";
    while ($the_query->have_posts()) {
        $the_query->the_post();

        $name = get_field('name');
        $platform_features = get_field('platform_features');
        $platform_support = get_field('platform_support');
        $platform_free_resources = get_field('platform_free_resources');
        $platform_starter_package = get_field('platform_starter_package');


        // split string and make array

        $array_features = explode("\n", $platform_features);
        $array_support = explode("\n", $platform_support);
        $array_free_resources = explode("\n", $platform_free_resources);
        $array_starter_package = explode("\n", $platform_starter_package);

        // clean output
        $output = "<script>
        platforms.push({
            name:\"" . $name . "\"," .
            "features:" .   json_encode($array_features)  . "," .
            "support:" .   json_encode($array_support)  . "," .
            "resources:" .   json_encode($array_free_resources)  . "," .
            "starter:" .   json_encode($array_starter_package)  .
            "}) 
       </script>";

        // $output = str_replace(array("\\n", "\\r"), "", $output);

        // push platform object to array
        echo $output;
    }
} else {
    echo "The cake is a lie.";
};

?>


<main>
    <!-- START HEADER -->
    <div class="comparison_header container-fluid">
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col presentation_content">
                    <p class="your_choice">Your Choice</p>
                    <h1 class="title">Compare Affiliate Trackers</h1>
                    <p class="presentation_text_comparison">
                        Looking for a reliable partner to help you grow your performance
                        marketing business? Compare the most known solutions available
                        on the market and decide which partner is most suitable for you.
                    </p>

                    <img class="platform_screen" src="<?php echo get_template_directory_uri() ?>/assets/dist/img/plattform_screen_big.png" alt="platform_screen" />
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER -->
    <div class="container presentation_text_mobile">
        <div class="row">
            <div class="col">
                <p class="presentation_text_comparison_mobile">
                    Looking for a reliable partner to help you grow your performance
                    marketing business? Compare the most known solutions available on
                    the market and decide which partner is most suitable for you.
                </p>
            </div>
        </div>
    </div>
    <!-- START SAAS COMPARISON -->
    <div class="container-fluid">
        <div class="container saas_comparison">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="ml-auto saas_container">
                        <div class="icon_saas"></div>
                        <p class="saas_subtitle">Comparison</p>
                        <h2 class="saas_title">
                            What is it that will make or break a deal for you?
                        </h2>
                        <p class="saas_text">
                            When choosing a platform to run your affiliate business with,
                            marketers are often concerned not only about functionalities
                            and available features, but also about price, ease of
                            switching and what kind of customer support the company
                            provides. Another important factor is whether the product is
                            being actively developed and how eager a company is to
                            implement new features upon your request. This information and
                            more in the comparison below.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="saas_infografik mr-auto" src="<?php echo get_template_directory_uri() ?>/assets/dist/img/infografik-new.png" alt="infografik" />
                </div>
            </div>
        </div>
    </div>
    <!-- END SAAS COMPARISON -->
    <div class="container-fluid pb-2">
        <div class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center">
                <a href="https://venedash.io/get-started" class="big_cta btn modal-signup-form mb-5">
                    get started
                </a>
            </div>
        </div>
    </div>
    <!-- START TABLE COMPARISON -->
    <div class="container-fluid table_section">
        <div class="container">
            <div class="row">
                <div class="col comparison_table_header">
                    <p class="table_subtitle">Compare Affiliate Trackers</p>
                    <h1 class="table_title">
                        Which affiliate ad tracking software should you choose?
                    </h1>
                    <p class="table_text">
                        Choose up to 3 platforms you wish to compare
                    </p>
                    <p class="message">
                        <span id="message_checkbox" style="display:none">
                            Please select up to 3 platforms to compare
                        </span>
                        &nbsp;
                    </p>

                    <div class="check_boxes d-flex flex-row align-items-center justify-content-around flex-wrap">

                    </div>
                    <div class="dropdown_mobile">
                        <select class="platforms_dropdown" name="platforms_select" id="dropdown_platforms_mobile">

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col table_col">
                    <div class="table_header_wrap">
                        <p class="table_subtitle">Find out more about</p>
                        <h1 class="table_title">Support</h1>
                    </div>
                    <div class="table_wrapper">
                        <table class="comparison_tables" id="table_support">
                            <tr>
                                <th>Support</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col table_col">
                    <div class="table_header_wrap">
                        <p class="table_subtitle">Find out more about</p>
                        <h1 class="table_title">Starter Plan</h1>
                    </div>
                    <div class="table_wrapper">
                        <table class="comparison_tables" id="table_starter">
                            <tr>
                                <th>Starter Plan</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col table_col">
                    <div class="table_header_wrap">
                        <p class="table_subtitle">Find out more about</p>
                        <h1 class="table_title">Platform Features</h1>
                    </div>
                    <div class="table_wrapper">
                        <table class="comparison_tables" id="table_features">
                            <tr>
                                <th>Platform Features</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col table_col">
                    <div class="table_header_wrap">
                        <p class="table_subtitle">Find out more about</p>
                        <h1 class="table_title">Free Resources</h1>
                    </div>
                    <div class="table_wrapper">
                        <table class="comparison_tables" id="table_resources">
                            <tr>
                                <th>Free Resources</th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TABLE COMPARISON -->
    <!-- START FREE TRIAL SECTION -->

    <div class="container-fluid p-0 overflow-hidden">
        <div style="background-color: #ffffff;" class="row free_trial_row m-0">
            <div class="col p-0 d-flex flex-column justify-content-between align-items-center section_header">
                <div class="heading mb-4">
                    <p class="section_subtitle text-center">
                        Start your journey with us now!
                    </p>
                    <h2 class="section_title text-center">
                        Sign up now to get your own platform and free demo!
                    </h2>
                </div>
                <a href="https://venedash.io/get-started" class="big_cta btn modal-signup-form mb-5">
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
    <!-- END FREE TRIAL SECTION -->
</main>
<?php
get_footer();
?>