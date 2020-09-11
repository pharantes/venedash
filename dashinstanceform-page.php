<?php

/**
 * Template Name: Instance Form
 */


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>
        <?php echo is_front_page() ? 'vene dash – tracking made in Germany' : trim(wp_title('', false)), ' | vene dash – tracking made in Germany'; ?>
    </title>

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/dist/favicon/favicon-32x32.png">
    <!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/dist/favicon/favicon.ico"><![endif]-->
    <!-- Add to home screen for Android and modern mobile browsers -->
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json">
    <meta name="theme-color" content="">
    <!-- Add to home screen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="vene-dash">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/assets/dist/favicon/apple-touch-icon-152x152.png">
    <!-- Add to home screen for Windows -->
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/assets/dist/favicon/msapplication-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#000000">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/dist/css/vendors.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/dist/css/main.css" />

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-535QM9V');
    </script>
    <!-- End Google Tag Manager -->

    <!-- FaceBook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '138953249999709');
        fbq('track', 'PageView');
    </script>
    <!-- End FaceBook Pixel Code -->
</head>

<body>
    <!-- SDK Facebook Start -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: "183467166405396",
                xfbml: true,
                version: "v7.0",
            });
            FB.AppEvents.logPageView();
        };

        (function(d, s, id) {
            var js,
                fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        })(document, "script", "facebook-jssdk");
    </script>
    <!-- SDK Facebook end -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-535QM9V" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <main>
        <div class="container form-container">
            <div class="form-header"></div>
            <div class="row form-row">
                <div class="col">
                    <form id="instance-form" class="dash-instance-form">
                        <div class="form-group d-flex">
                            <input required type="text" placeholder="Legal Company Name" class="form-control" id="companyName" name="companyName" aria-describedby="companyName" />
                            <label style="color: tomato; margin: 0 0 0 1rem;" for="companyName">*</label>
                        </div>
                        <div class="form-group d-flex">
                            <input required type="text" placeholder="Company Address" class="form-control" id="companyAddress" name="companyAddress" aria-describedby="companyAddress" />
                            <label style="color: tomato; margin: 0 0 0 1rem;" for="companyAddress">*</label>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="VAT/Tax Number" class="form-control" id="taxNumber" name="taxNumber" aria-describedby="taxNumber" />
                        </div>
                        <div class="form-group d-flex">
                            <input required type="text" placeholder="Full Name" class="form-control" id="fullName" name="fullName" aria-describedby="fullName" />
                            <label style="color: tomato; margin: 0 0 0 1rem;" for="fullName">*</label>
                        </div>
                        <div class="form-group d-flex">
                            <input required type="text" placeholder="Contact Email" class="form-control" id="contactEmail" name="contactEmail" aria-describedby="contactEmail" />
                            <label style="color: tomato; margin: 0 0 0 1rem;" for="contactEmail">*</label>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Skype ID" class="form-control" id="skypeId" name="skypeId" aria-describedby="skypeId" />
                        </div>
                        <div class="form-group d-flex">
                            <input type="text" placeholder="Phone Number ( + country code )" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumber" />

                        </div>
                        <div class="form-group d-flex">
                            <input required type="text" placeholder="Finance Contact Name" class="form-control" id="financeContactName" name="financeContactName" aria-describedby="financeContactName" />
                            <label style="color: tomato; margin: 0 0 0 1rem;" for="financeContactName">*</label>
                        </div>
                        <div class="form-group d-flex">
                            <input required type="text" placeholder="Finance Contact Email" class="form-control" id="financeContactEmail" name="financeContactEmail" aria-describedby="financeContactEmail" />
                            <label style="color: tomato; margin: 0 0 0 1rem;" for="financeContactEmail">*</label>
                        </div>
                        <p class="referral_form_heading">
                            In which region should the platform be hosted?
                            <span style="color: tomato;">*</span>
                        </p>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="hostedRegion" id="europe" value="europe" />
                            <label class="form-check-label" for="europe">
                                EUROPE
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="hostedRegion" id="latam" value="latam" />
                            <label class="form-check-label" for="latam">
                                LATAM
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="hostedRegion" id="apac" value="apac" />
                            <label class="form-check-label" for="apac">
                                APAC
                            </label>
                        </div>
                        <p class="pt-3">Platform default currency:<span style="color: tomato;">*</span></p>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="defaultCurrency" id="usd" value="usd" />
                            <label class="form-check-label" for="usd">
                                USD
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="defaultCurrency" id="euro" value="euro" />
                            <label class="form-check-label" for="euro">
                                EURO
                            </label>
                        </div>

                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="defaultCurrency" id="gbp" value="gbp" />
                            <label class="form-check-label" for="gbp">
                                GBP
                            </label>
                        </div>
                        <div class="form-group pt-3">
                            <label for="platformName">Platform Name: https://XXXX-dash.vene.io (replace XXXX with
                                your platform name - 8 char. max) <span style="color: tomato;">*</span></label>
                            <input required type="text" class="form-control" id="platformName" name="platformName" placeholder="Platform name" />
                        </div>
                        <p class="pt-2">What plan are you interested in?<span style="color: tomato;">*</span></p>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="desiredPlan" id="starter" value="starter" />
                            <label class="form-check-label" for="starter">
                                STARTER (10.000 Conversion/m)
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="desiredPlan" id="enterprise" value="enterprise" />
                            <label class="form-check-label" for="enterprise">
                                ENTERPRISE (40.000 Conversions/m)
                            </label>
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input" type="radio" name="desiredPlan" id="custom" value="custom" />
                            <label class="form-check-label" for="custom">
                                CUSTOM (>40.000 Conversions/m)
                            </label>
                        </div>
                        <p class="pt-3">
                            Which business model do you want to work with?
                        </p>
                        <div class="form-check">
                            <input class="businessModel form-check-input" type="checkbox" id="cpa" value="cpa" />
                            <label class="form-check-label" for="cpa">
                                CPA
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="businessModel form-check-input" type="checkbox" id="cpi" value="cpi" />
                            <label class="form-check-label" for="cpi">
                                CPI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="businessModel form-check-input" type="checkbox" id="cpl" value="cpl" />
                            <label class="form-check-label" for="cpl">
                                CPL
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="businessModel form-check-input" type="checkbox" id="cpm" value="cpm" />
                            <label class="form-check-label" for="cpm">
                                CPM
                            </label>
                        </div>

                        <div class="form-group pt-2">
                            <input type="text" placeholder="Other" class="form-control" id="otherModel" name="otherModel" aria-describedby="otherModel" />
                        </div>
                        <div class="form-group pt-3">
                            <input type="text" placeholder="How many clicks per month do you usually have?" class="form-control" id="clicksMonth" name="clicksMonth" aria-describedby="clicksMonth" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="How many conversions per month do you usually have?" class="form-control" id="conversionsMonth" name="conversionsMonth" aria-describedby="conversionsMonth" />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="What is your current platform?" class="form-control" id="currentPlatform" name="currentPlatform" aria-describedby="currentPlatform" />
                        </div>
                        <div class="form-group">
                            <p>When do you plan to start with vene dash?<span style="color: tomato;">*</span></p>
                            <input required type="date" class="form-control" id="startDate" name="startDate" aria-describedby="startDate" />
                        </div>
                        <div class="form-check">
                            <input required class="form-check-input confirmation-checkbox" type="checkbox" id="confirmation" name="confirmation" />
                            <label class="form-check-label" for="confirmation">
                                By filling out this form, I confirm that I request to receive
                                a new vene dash instance with the above details
                            </label>
                        </div>
                        <div class="row d-flex flex-row justify-content-center">
                            <button id="submit-instance-form" class="btn big_cta custom_btn" type="submit">
                                Submit
                            </button>
                        </div>
                        <div class="form__message">
                            <img alt="Imagem de refresh" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/ring.svg" class="refresh" />
                            <div class="alert alert-dark alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <p id="message_contact">Success!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <script src="<?php echo get_template_directory_uri() ?>/assets/dist/js/vendors.js"></script>

    <script>
        theme_directory = "<?php echo get_template_directory_uri(); ?>";
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ['Hind Vadodara:300,400,500,600']
            }
        });
    </script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/dist/js/main.js"></script>

</body>

</html>