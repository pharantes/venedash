<?php

/**
 * Template Name: Home
 */

/* Header */
get_header();

?>

<main>
  <section id="Presentation">
    <div class="presentation container-fluid mx-0 px-0">
      <div class="row promotion-row">
        <div class="col m-0 promotion-bar">
          <a href="https://venedash.io/get-started" class="modal-signup-form">
            Get your vene dash <span>premium features</span> for the <span>starter price</span>
          </a>
        </div>
      </div>
      <div class="row presentation_img">
        <div class="col d-flex flex-column justify-content-center align-items-center presentation_wrap">
          <h2 class="presentation_title section_title text-center">
            Performance Marketing Software
          </h2>
          <h3 class="presentation_subtitle">made in Germany</h3>
          <div class="awards">
            <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/award_experts_choice.png" alt="Expert's Choice Award" />
            <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/award_great_ux.png" alt="Great User Experience Award" />
          </div>
          <p class="w-50 presentation_text">
            vene dash empowers you to track, manage, analyze and optimize
            the result of your affiliate business in a smart and efficient
            way!
          </p>
          <a href="https://venedash.io/get-started" class="big_cta presentation_btn btn modal-signup-form">
            get started
          </a>
          <img class="pt-5 presentation_dashboard_img" src="<?php echo get_template_directory_uri() ?>/assets/dist/img/dashboard@2x.png" alt="" />
        </div>
      </div>
    </div>
  </section>
  <section id="features" class="features">
    <div class="container-fluid">
      <div class="row features_heading">
        <div class="container">
          <div class="row">
            <div class="col d-flex flex-column justify-content-center align-items-center">
              <p class="section_subtitle">
                Software inside
              </p>
              <h2 class="section_title text-center">
                Key features to get you started
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row features_row">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-md-12 d-flex flex-column justify-content-center align-items-start features_description">
              <div class="icons security"></div>
              <p class="section_subtitle">Security</p>
              <h2 class="section_title">
                Fraud Protection and traffic risk assessment
              </h2>
              <p>
                Fraud protection can be enabled and disabled either network-wide
                or only on certain entities. The strictness of each fraud
                scenario can be individually adjusted
              </p>
              <div class="powered_overwatch d-flex flex-row align-items-start">
                <small>Powered by </small>
                <div class="features_powered_by"></div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12 features_img fraud_img"></div>
          </div>
        </div>
      </div>
      <div class="row features_row accounting_row bg__blue">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-12 position-relative features_img accounting_img"></div>
            <div class="col-lg-4 col-md-12 d-flex flex-column justify-content-center align-items-start features_description">
              <div class="icons accounting"></div>
              <p class="section_subtitle">Accounting</p>
              <h2 class="section_title">
                Billing and Invoicing Feature
              </h2>
              <p>
                The billing and invoicing feature enables publishers to manage
                their billing information as well as request payments for
                previous periods all in one place. No more manual invoices! In
                addition to bank transfer we enabled cryptocurrency payments.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row features_row">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center align-items-start features_description">
              <div class="icons innovation"></div>
              <p class="section_subtitle">Innovation</p>
              <h2 class="section_title">
                Simplify your Workflow with Intelligent Smartlinks
              </h2>
              <p>
                Create intelligent tracking URLs that distribute your traffic
                based on the best performing offers, making sure you get maximum
                revenue for your advertising investments. Split actions based on
                meta-data like OS, GEO, Time, IP, Channel, Browser.
                Alternatively, run traffic through weighted splitters.
              </p>
            </div>
            <div class="col-lg-6 col-md-12 features_img innovation_img">
              <div class="innovation_img_details"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row features_row url_checker_row bg__blue">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 features_img url_checker_img">
              <div class="gradient2"></div>
            </div>
            <div class="col-lg-5 col-md-12 d-flex flex-column justify-content-center align-items-start features_description">
              <div class="icons checker"></div>
              <p class="section_subtitle">URL-Checker</p>
              <h2 class="section_title">
                Advanced Destination Site Monitoring
              </h2>
              <p>
                The destination site monitor and URL checker ensure the validity
                of all offer destinations. vene dash automatically runs checks
                for all destination URLs providing alerts on changes to the
                destination site and renders screenshots for fast comparison.
                The URL checker reports on the number of hops and discloses all
                re-direct URL. All checks consider GEO tags of the offers and
                emulate GEO locations to render the destination sites.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="Benefits" class="benefits">
    <div class="container">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center pt-3 pb-5">
          <p class="section_subtitle">
            What's in it for you
          </p>
          <h2 class="section_title text-center">
            If you choose venedash, you choose:
          </h2>
        </div>
      </div>
      <div class="row benefits_mobile_row none">
        <div class="carousel_benefits container card-deck">
          <div class="card benefits_card position-relative">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/infographic_made_in_germany.svg" class="card_made_in_germany_img" alt="germany" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Made in Germany
              </h5>
              <p class="card-text">
                A software made in Germany, adhering to the strictest data
                protection policies.
              </p>
            </div>
          </div>
          <div class="card benefits_card position-relative d-flex flex-column align-items-center">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_team.svg" class="card_team_img" alt="dynamic team" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Motivated Team
              </h5>
              <p class="card-text">
                A young and dynamic team committed to make your business a
                success.
              </p>
            </div>
          </div>
          <div class="card benefits_card position-relative d-flex flex-column align-items-center">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_development.svg" class="card_development_img" alt="group" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Agile Development
              </h5>
              <p class="card-text">
                A company working with agile methodology, releasing new
                features every two weeks.
              </p>
            </div>
          </div>
          <div class="card benefits_card position-relative d-flex flex-column align-items-center">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_strong_partner.svg" class="card_strong_partner_img" alt="strong partner" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Strong Partner
              </h5>
              <p class="card-text">
                A partner that will be with you through all the stages of
                your business.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center align-items-center benefits_desktop_row">
        <div class="card-deck mb-4">
          <div class="card benefits_card position-relative d-flex flex-column align-items-center">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/infographic_made_in_germany.svg" class="card_made_in_germany_img" alt="germany" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Made in Germany
              </h5>
              <p class="card-text">
                A software made in Germany, adhering to the strictest data
                protection policies.
              </p>
            </div>
          </div>
          <div class="card benefits_card position-relative d-flex flex-column align-items-center">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_team.svg" class="card_team_img" alt="dynamic team" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Motivated Team
              </h5>
              <p class="card-text">
                A young and dynamic team committed to make your business a
                success.
              </p>
            </div>
          </div>
          <div class="card benefits_card position-relative d-flex flex-column align-items-center">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_development.svg" class="card_development_img" alt="group" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Agile Development
              </h5>
              <p class="card-text">
                A company working with agile methodology, releasing new
                features every two weeks.
              </p>
            </div>
          </div>
          <div class="card benefits_card position-relative d-flex flex-column align-items-center">
            <div class="card-img-top text-center">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_strong_partner.svg" class="card_strong_partner_img" alt="strong partner" />
            </div>
            <div class="card-body text-center">
              <h5 class="section_subtitle" class="card-title">
                Strong Partner
              </h5>
              <p class="card-text">
                A partner that will be with you through all the stages of
                your business.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <a class="big_cta btn modal-signup-form" href="https://venedash.io/get-started">
            get started
          </a>
        </div>
      </div>
    </div>
  </section>
  <section id="Details" class="details py-5">
    <div class="container">
      <div class="row py-5">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <p class="section_subtitle">
            Feature Details
          </p>
          <h2 class="section_title text-center">
            Important topics that boost your business
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="dropdown details_dropdown none pb-4">
          <button class="btn btn_dropdown_mobile dropdown-toggle track_color d-inline-flex justify-content-between" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
            <span class="dropdown-inner">
              <strong>Track</strong> all your affiliate campaigns
            </span>
            <svg width="15" height="23" viewBox="0 0 15 23" class="dropdown_toggle_img">
              <path d="M7.5 0L13.9952 9H1.00481L7.5 0Z" />
              <path d="M7.5 23L1.00481 14L13.9952 14L7.5 23Z" />
            </svg>
          </button>
          <div id="dropDown" class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton">
            <a data-name="track" class="dropdown-item categories_btn track_color">
              <strong>Track</strong> all your affiliate campaigns
            </a>
            <a data-name="manage" class="dropdown-item categories_btn manage_color">
              <strong>Manage</strong> and scale for higher profits
            </a>
            <a data-name="analyze" class="dropdown-item categories_btn analyze_color">
              <strong>Analyze</strong> data for actionable insights
            </a>
            <a data-name="optimize" class="dropdown-item categories_btn optimize_color">
              <strong>Optimize</strong> your ad performance
            </a>
          </div>
        </div>

        <div class="col-md-4 d-flex flex-column justify-content-start align-items-start w-100 details_btn_group">
          <button data-name="track" class="btn_details_list categories_btn track_color active">
            <strong>Track</strong> all your affiliate campaigns
          </button>
          <button data-name="manage" class="btn_details_list categories_btn manage_color">
            <strong>Manage</strong> and scale for higher profits
          </button>
          <button data-name="analyze" class="btn_details_list categories_btn analyze_color">
            <strong>Analyze</strong> data for actionable insights
          </button>
          <button data-name="optimize" class="btn_details_list categories_btn optimize_color">
            <strong>Optimize</strong> your ad performance
          </button>
        </div>
        <div class="col-md-8">
          <div class="card-columns feature-detail-content track_details">
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_server_to_server_tracking.svg" alt="icon caps management" />
                  Server-to-server tracking system
                </h5>
                <p class="card-text details_card_text">
                  vene dash server-to-server tracking system ensures all
                  communication between your network, advertisers and
                  publishers is absolutely secure.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/pixel_tracking.svg" alt="icon documentation" />
                  Pixel tracking
                </h5>
                <p class="card-text details_card_text">
                  Easily track user behavior and conversions with vene dash
                  pixel tracking
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/impression_tracking.svg" alt="icon documentation" />
                  Impression tracking
                </h5>
                <p class="card-text details_card_text">
                  Impressions are used to track the first interaction with a potentially converting user.
                  vene dash empowers you to track impressions alongside other KPIs and see the full cost
                  of your campaigns in one user-friendly interface.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_multiple_event_tracking.svg" alt="icon Built-in notification system" />
                  Multiple event tracking
                </h5>
                <p class="card-text details_card_text">
                  Perform multiple actions with just one link! vene dash
                  enables you to use ONE tracking link for tracking numerous
                  events within a single offer
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/One_tracking_domain_SSL.svg" alt="icon blacklisting" />
                  One tracking domain with SSL
                </h5>
                <p class="card-text details_card_text">
                  We value your data and therefore provide a secured 'https'
                  domain free of charge
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_unlimited_media_storage.svg" alt="icon smartlinks" />
                  Unlimited Media Storage
                </h5>
                <p class="card-text details_card_text">
                  All creatives are safe and available 24/7 when you utilize
                  our cloud storage
                </p>
              </div>
            </div>
          </div>
          <div class="card-columns feature-detail-content manage_details none">
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_multiple_payout_models.svg" alt="icon caps management" />
                  Multiple Payout Models
                </h5>
                <p class="card-text details_card_text">
                  vene dash supports multiple payout models: CPI, CPA, CPO,
                  Revenue Share and combinations
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_billing_feature.svg" alt="icon documentation" />
                  Billing & Invoicing Feature
                </h5>
                <p class="card-text details_card_text">
                  "The billing and invoicing feature enables publishers to
                  manage their billing information as well as request
                  payments for previous periods all in one place. No more
                  manual invoices! In addition to bank transfer we enabled
                  cryptocurrency payments."
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_cryptopayment.svg" alt="icon Built-in notification system" />
                  Crypto Payments
                </h5>
                <p class="card-text details_card_text">
                  Crypto payments offer unlimited and highly secured
                  transactions, lower operational costs & fees and an
                  extended publisher reach. All payments within the platform
                  are possible in Bitcoin (BTC), Litecoin (LTC) and
                  Dodgecoin (DOGE).
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_traffic_blacklisting_3.svg" alt="icon blacklisting" />
                  Traffic Blacklisting
                </h5>
                <p class="card-text details_card_text">
                  Blacklist fraudulent and non-converting traffic sources
                  with a single click and direct it to an exit URL.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_smartlinks.svg" alt="icon smartlinks" />
                  Smartlinks
                </h5>
                <p class="card-text details_card_text">
                  The vene dash URL Checker is an automated offer validation
                  tool checking whether offers redirect to the correct URL.
                  You can create intelligent tracking URLs that distribute
                  traffic according to individual criteria. Split actions
                  based on meta-data like OS, GEO, Time, IP, Channel,
                  Browser. Alternatively, run traffic through weighted
                  splitters
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_multiple_user_roles.svg" alt="icon smartlinks" />
                  Multiple User Roles
                </h5>
                <p class="card-text details_card_text">
                  vene dash offers multiple user roles, meaning each user
                  gets access according to their need. You are in full
                  control over the type of access each user gets with a
                  simple click of a mouse.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_publisher_portal.svg" alt="icon smartlinks" />
                  Publisher portal
                </h5>
                <p class="card-text details_card_text">
                  Publisher portal is an additional interface that you get
                  with your vene dash subscription and is there to help you
                  deepen your relationships with your publishers. Your
                  publishers will get their own dashboard and an offer wall
                  where you can promote and share your offers from vene
                  dash. It's an easy way for the publishers to search around
                  the portal, find a fitting offer, set up the postback and
                  start running it. In addition, they also have a
                  "Analytics" part, which gives them an overview about the
                  offers performance they are running.
                </p>
              </div>
            </div>
          </div>
          <div class="card-columns feature-detail-content none analyze_details">
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_campanion_app.svg" alt="icon caps management" />
                  Companion App
                </h5>
                <p class="card-text details_card_text">
                  Our mobile application, available for iOS & Android, is
                  the perfect companion to check performance and stats of
                  your network operation on the go
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_analytics_reporting.svg" alt="icon documentation" />
                  Analytics & Reporting
                </h5>
                <p class="card-text details_card_text">
                  Get access to your most important data, including
                  click-level reporting with just a few clicks. Choose
                  individual filters, criteria and KPIs only once, and save
                  as many custom reports as you need
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_comprehensive_dashboard.svg" alt="icon Built-in notification system" />
                  Comprehensive dashboard with toggle button
                </h5>
                <p class="card-text details_card_text">
                  vene dash offers a comprehensive dashboard with a toggle
                  button allowing you to switch from the company view to the
                  Account Manager view on the same screen
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_dedicated_support.svg" alt="icon blacklisting" />
                  Dedicated Email, Skype & Ticket Support
                </h5>
                <p class="card-text details_card_text">
                  Choose the type of support that fits your daily routine
                  between email, Skype or Ticket Support
                </p>
              </div>
            </div>
          </div>
          <div class="card-columns feature-detail-content optimize_details none">
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_fraud_protection.svg" alt="icon caps management" />
                  Fraud protection
                </h5>
                <p class="card-text details_card_text">
                  Our multilevel 24/7 anti-fraud monitoring with integrated
                  enhanced algorithms assures that you only receive clean
                  converting traffic.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_trigger_function.svg" alt="icon documentation" />
                  Trigger function
                </h5>
                <p class="card-text details_card_text">
                  Gain full control of your conversion delivery by setting
                  Security Rules, thresholds for conversion rates,
                  attribution window and over cap.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_URL_checker_2.svg" alt="icon Built-in notification system" />
                  URL Checker
                </h5>
                <p class="card-text details_card_text">
                  Stop wasting your money on offers that are not active
                  anymore. Our url checker will validate if the traffic is
                  redirected to the correct landingpage.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_targeting_options.svg" alt="icon blacklisting" />
                  Powerful Targeting Options
                </h5>
                <p class="card-text details_card_text">
                  vene dash offers powerful targeting options to make sure
                  you can optimize your offer targeting to suit your needs.
                  Choose among multiple targeting options like ISP, Devide
                  OS, day, time and many more.
                </p>
              </div>
            </div>
            <div class="card details_card">
              <div class="card-body">
                <h5 class="card-title details_card_title">
                  <img class="icon1" src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/icon_traffic_blacklisting_4.svg" alt="icon smartlinks" />
                  Traffic Blacklisting
                </h5>
                <p class="card-text details_card_text">
                  Blacklist fraudulent and non-converting traffic sources
                  with a single click
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="pricing" class="pricing">
    <div class="container-fluid">
      <div class="row bg__blue">
        <div class="container">
          <div class="row py-5">
            <div class="col d-flex flex-column justify-content-center align-items-center section_header">
              <p class="section_subtitle">
                Pricing
              </p>
              <h2 class="section_title text-center">
                Perfect Fit For Your Budget!
              </h2>
            </div>
          </div>

          <div class="row d-flex flex-row justify-content-center align-items-center pricing_btn_wrap mb-5">
            <label class="toggler toggler--is-active" id="filt-monthly">Monthly</label>
            <div class="toggle">
              <input type="checkbox" id="switcher" class="check" />
              <b class="b switch"></b>
            </div>
            <div class="annualy-wrapper">
              <label class="toggler" id="filt-annually">Annually
                <span class="save-up-to-desktop" style="color: inherit; font-weight: normal;">(save up to 20%)</span></label>
              <p id="save-mobile" class="save-up-to-mobile">(save &#126; 20%)</p>
            </div>
          </div>

          <div class="carousel_pricing_mobile none w-100">
            <div class="carousel_pricing mx-auto">
              <div class="pricing_card_mobile position-relative">
                <h5 class="py-2">Starter</h5>
                <div class="starter_img pricing_imgs mx-auto"></div>
                <ul class="pricing_list_1 p-3 text-center monthly-pricing">
                  <li><strong class="price_text_title">199€</strong></li>
                  <li class="price_text">per month</li>
                  <li class="price_text">10,000 conversions/month</li>
                  <li class="price_text">100M clicks/month</li>
                  <li class="price_text">2M impressions/month</li>
                </ul>
                <ul class="pricing_list_1 p-3 text-center none annually-pricing">
                  <li><strong class="price_text_title">167€</strong></li>
                  <li class="price_text">per month</li>
                  <li class="price_text">10,000 conversions/month</li>
                  <li class="price_text">100M clicks/month</li>
                  <li class="price_text">2M impressions/month</li>

                </ul>
                <ul class="pricing_list_2">
                  <li>
                    <i class="fa fa-check"></i>
                    Additional conversions 0.018 EUR
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Traffic risk assessment fraud protection
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    URL checker
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Built-in Mailing system for notifications and
                    newsletters
                  </li>
                </ul>
              </div>
              <div class="pricing_card_mobile position-relative pricing_enterprise_mobile">
                <div class="pricing_badge_mobile"></div>
                <h5 class="py-2">Enterprise</h5>
                <div class="enterprise_img pricing_imgs mx-auto"></div>
                <ul class="pricing_list_1 p-3 text-center monthly-pricing">
                  <li><strong class="price_text_title">449€</strong></li>
                  <li class="price_text">per month</li>
                  <li class="price_text">40,000 conversions/month</li>
                  <li class="price_text">
                    Unlimited Clicks, Users, Advertisers, Publishers &
                    Offers
                  </li>
                  <li class="price_text">20M impressions/month</li>
                </ul>
                <ul class="pricing_list_1 p-3 text-center none annually-pricing">
                  <li><strong class="price_text_title">375€</strong></li>
                  <li class="price_text">per month</li>
                  <li class="price_text">40,000 conversions/month</li>
                  <li class="price_text">
                    Unlimited Clicks, Users, Advertisers, Publishers &
                    Offers
                  </li>
                  <li class="price_text">20M impressions/month</li>
                </ul>
                <ul class="pricing_list_2">
                  <li>
                    <i class="fa fa-check"></i>
                    Additional conversions 0.016 EUR
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Traffic risk assessment fraud protection & full Vene
                    Overwatch reporting
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    URL checker
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Intelligent Smartlinks, Billing & Invoicing feature,
                    Recommendation E-mail, Public Offerwall and more...
                  </li>
                </ul>
              </div>
              <div class="pricing_card_mobile position-relative">
                <h5 class="card-title py-2">Custom</h5>
                <div class="custom_img pricing_imgs mx-auto"></div>
                <ul class="pricing_list_1 p-3">
                  <li class="position-relative text-center">
                    <a href="https://venedash.io/get-started" class="btn price_custom_btn mb-2 modal-signup-form">
                      Personal request
                    </a>
                  </li>
                  <li class="price_text">
                    When you strive for more, we will be happy to provide
                    you with a custom offer.
                  </li>
                </ul>
                <ul class="pricing_list_2 custom_pricing_list">
                  <li>
                    <i class="fa fa-check"></i>
                    Personalized tracking solution
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Limitless feature access
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Custom made integrations
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Allocated resources for high performance
                  </li>
                  <li>
                    <i class="fa fa-check"></i>
                    Dedicated premium support
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row pricing_desktop">
            <div class="card-deck">
              <div class="card pricing_card col-md-6 starter">
                <div class="card-body text-center position-relative">
                  <h5 class="card-title py-2">Starter</h5>
                  <div class="starter_img pricing_imgs mx-auto"></div>
                  <ul class="pricing_list_1 p-3 text-center monthly-pricing">
                    <li><strong class="price_text_title">199€</strong></li>
                    <li class="price_text">per month</li>
                    <li class="price_text">10,000 conversions/month</li>
                    <li class="price_text">100M clicks/month</li>
                    <li class="price_text">2M impressions/month</li>
                  </ul>
                  <ul class="pricing_list_1 p-3 text-center none annually-pricing">
                    <li><strong class="price_text_title">167€</strong></li>
                    <li class="price_text">per month</li>
                    <li class="price_text">10,000 conversions/month</li>
                    <li class="price_text">100M clicks/month</li>
                    <li class="price_text">2M impressions/month</li>

                  </ul>
                  <ul class="pricing_list_2">
                    <li>
                      <i class="fa fa-check"></i>
                      Additional conversions 0.018 EUR
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Traffic risk assessment fraud protection
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      URL checker
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Built-in Mailing system for notifications and
                      newsletters
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card pricing_card col-md-6">
                <div class="card-body text-center position-relative">
                  <div class="pricing_badge"></div>
                  <h5 class="card-title py-2">Enterprise</h5>
                  <div class="enterprise_img pricing_imgs mx-auto"></div>
                  <ul class="pricing_list_1 p-3 text-center monthly-pricing">
                    <li><strong class="price_text_title">449€</strong></li>
                    <li class="price_text">per month</li>
                    <li class="price_text">40,000 conversions/month</li>
                    <li class="price_text">
                      Unlimited Clicks, Users, Advertisers, Publishers &
                      Offers
                    </li>
                    <li class="price_text">20M impressions/month</li>
                  </ul>
                  <ul class="pricing_list_1 p-3 text-center none annually-pricing">
                    <li><strong class="price_text_title">375€</strong></li>
                    <li class="price_text">per month</li>
                    <li class="price_text">40,000 conversions/month</li>
                    <li class="price_text">
                      Unlimited Clicks, Users, Advertisers, Publishers &
                      Offers
                    </li>
                    <li class="price_text">20M impressions/month</li>
                  </ul>
                  <ul class="pricing_list_2">
                    <li>
                      <i class="fa fa-check"></i>
                      Additional conversions 0.016 EUR
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Traffic risk assessment fraud protection & full vene
                      overwatch reporting
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      URL checker
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Intelligent Smartlinks, Billing & Invoicing feature,
                      Recommendation E-mail, Public Offerwall and more...
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card pricing_card col-md-6 custom_request">
                <div class="card-body text-center d-flex flex-column justify-content-around">
                  <h5 class="card-title py-2">Custom</h5>
                  <div class="custom_img pricing_imgs mx-auto"></div>
                  <ul class="pricing_list_1 p-3">
                    <li>
                      <a href="https://venedash.io/get-started" class="btn price_custom_btn mb-2 modal-signup-form">
                        Personal request
                      </a>
                    </li>
                    <li class="price_text">
                      When you strive for more, we will be happy to provide
                      you with a custom offer.
                    </li>
                  </ul>
                  <ul class="pricing_list_2 custom_pricing_list">
                    <li>
                      <i class="fa fa-check"></i>
                      Personalized tracking solution
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Limitless feature access
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Custom made integrations
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Allocated resources for high performance
                    </li>
                    <li>
                      <i class="fa fa-check"></i>
                      Dedicated premium support
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="row m-0 py-4">
            <div class="col p-0 d-flex flex-column justify-content-center align-items-center section_header">
              <a href="https://venedash.io/get-started" class="big_cta btn modal-signup-form">
                get started
              </a>
              <ul class="row d-flex flex-row justify-content-around align-items-start mobile_list px-0 mt-3">
                <li>
                  <i class="fa fa-check"></i>
                  Dedicated Support
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  Easy Set-Up
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  Professional Tutorials
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  Migration support
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="testimonials" class="testimonials">
    <div class="container py-5">
      <div class="row testimonial_mobile_row">
        <div class="col-md-6 p-0">
          <div class="carousel_testimonials">
            <div class="first position-relative">
              <div class="carousel_content d-flex flex-column justify-content-center align-items-start">
                <blockquote class="">
                  “We chose vene dash for its stability and ease of use. We
                  no longer need to worry about the platform being down and
                  blocking us from running our business. In addition, the
                  pricing is really competitive and we receive professional
                  support from the customer service team. All things
                  considered, a great addition to our business!”
                </blockquote>
                <div class="d-flex flex-row justify-content-start align-items-start">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/profile_enric_sabate@2x.png" height="62" width="62" alt="avatar" class="" />
                  <div class="d-flex flex-column">
                    <small>Enric Sabaté</small>
                    <small class="role">Head of Sales, sureyield</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="second position-relative">
              <div class="carousel_content">
                <blockquote class="">
                  “Vene has made a huge difference to managing our online campaigns. We now use Vene for all our online campaigns, and wouldn't run online without it.”
                </blockquote>
                <div class="d-flex flex-row justify-content-start align-items-start">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/avatar_3.png" height="62" width="62" alt="avatar" class="avatar_gozomo" />
                  <div class="d-flex flex-column">
                    <small>David Muller</small>
                    <small class="role">Managing director, Gozomo SA</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="third position-relative">
              <div class="carousel_content">
                <blockquote class="">
                  “We moved to vene dash about a month ago and are very
                  happy so far. The platform is relatively new but has all
                  the necessary features alongside some extras. The customer
                  support team is outstanding and it makes all the
                  difference! All in all, we are happy with vene dash
                  solution and are curious to see how the product will
                  develop in the future.”
                </blockquote>
                <div class="d-flex flex-row justify-content-start align-items-start">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/avatar_2.png" height="62" width="62" alt="avatar" class="" />
                  <div class="d-flex flex-column">
                    <small>Gabor Vasas</small>
                    <small class="role">GM graylock.media</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="fourth position-relative">
              <div class="carousel_content">
                <blockquote class="">
                  “vene dash is one of the most agile solutions on the market today with a modern and sleek UI. Add the excellent customer service, custom features and API integrations on demand and you get a holistic platform that is custom made to your needs. Working with the vene dash team is a pleasure and the platform itself is stable and robust.”
                </blockquote>
                <div class="d-flex flex-row justify-content-start align-items-start">
                  <img style="border-radius: 50%" src="<?php echo get_template_directory_uri() ?>/assets/dist/img/Ben_Weinstock.png" height="62" width="62" alt="avatar" class="" />
                  <div class="d-flex flex-column">
                    <small>Ben Weinstock</small>
                    <small class="role">Ad tech veteran, Inch Digital</small>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center position-relative">
          <div class="testimonial_text">
            <div class="icons testimonials_icon"></div>
            <p class="section_subtitle">
              Testimonials
            </p>
            <h2 class="section_title">
              Find out what our clients say
            </h2>
            <p class="py-4">
              vene dash customers around the globe use the platform to increase their business and at the
              same time create strong partnerships which transform affiliate marketing.
            </p>
            <div class="seals-container">
              <div class="capterra-box">
                <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/capterra_logo@2x.jpg" alt="Capterra" width="121" height="48" />
              </div>
              <div class="quality-box">
                <img class="quality-seal" src="https://financesonline.com/seal/seal.png">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row d-flex flex-row justify-content-around align-items-center logos_testimonial mx-auto w-100">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/logo_telefuture@2x.png" alt="" /></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/logo_adaction@2x.png" alt="" /></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/logo_digitem@2x.png" alt="" /></div>
        <div class="mobile_none">
          <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/logo_glm@2x.png" alt="" />
        </div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/logo_sureyield@2x.png" alt="" /></div>
      </div>
    </div>
  </section>
  <section id="Contact" class="contact">
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
  </section>
  <section class="container_fluid vene_awards">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="awards-title">
            <img class="vene_award" src="<?php echo get_template_directory_uri() ?>/assets/dist/img/award.png" alt="award icon" />
            <p class="sec_subtitle">Awards and quality certificates</p>
          </div>

          <div class="awards-container">
            <div class="award-box">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/expert2020-1.png" alt="Expert's Choice 2020 Award" /><br />
            </div>

            <div class="award-box">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/supreme2020-1.png" alt="Supreme Software 2020 Award" /><br />
            </div>

            <div class="award-box">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/User-Experience-1.png" alt="Great User Experience 2020 Award" /><br />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
?>