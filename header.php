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

  <meta name="facebook-domain-verification" content="es7sl0y910huas16lp0arqampfxocp" />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/dist/css/vendors.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/dist/css/main.css" />

  <?php wp_head(); ?>

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
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-535QM9V" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php wp_body_open(); ?>
  <header>
    <nav class="d-flex flex-column navbar-fixed-top navbar-default navbar navbar-expand-md navbar-light bg-light">
      <div class="container px-2 p-0">
        <a class="navbar-brand" href="<?php echo home_url('home'); ?>"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">×</button>
          <ul class="navbar-nav">
            <li class="nav-item active mobile-home">
              <a class="nav-link" href="<?php echo home_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url('home'); ?>/#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url('home'); ?>/#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url('blog'); ?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo home_url('about'); ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/referral">Referral</a>
            </li>
            <li class="nav-item get-started">
              <a href="https://venedash.io/get-started" class="btn btn_nav modal-signup-form mt-1">
                get started
              </a>
            </li>
          </ul>
        </div>
      </div>

    </nav>
  </header>
