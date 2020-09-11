<footer id="footer" class="footer">
  <div class="container">
    <div class="row d-flex flex-row justify-content-between align-items-center footer_header">
      <div id="subscribe" class="col d-flex flex-column justify-content-center align-items-center">
        <p class="section_subtitle text-center">
          Our Newsletter
        </p>
        <h2 class="section_title text-center text-light mb-5">
          Would you like to stay up to date?
        </h2>
        <div class="d-flex flex-row justify-content-between align-items-center">
          <button id="open-popup" class="btn subscribe_btn">Subscribe</button>
        </div>
        <p class="footer_text">
          Be the first one to know about promos, new features, industry news
          and much more with our newsletter
        </p>
      </div>
    </div>
    <div class="row d-flex flex-row">
      <div class="col-6 col-md-3">
        <ul>
          <li class="footer-ul-title">Quick Links</li>
          <li><a class="footer-item" href="/"> Home</a></li>
          <li><a class="footer-item" href="<?php echo home_url('#features'); ?>"> Features</a></li>
          <li><a class="footer-item" href="<?php echo home_url('#pricing'); ?>"> Pricing</a></li>
          <li><a class="footer-item" href="<?php echo home_url('blog'); ?>">Blog</a></li>
          <li><a class="footer-item" href="<?php echo home_url('referral'); ?>" target="_blank">Referral</a></li>
          <li><a class="footer-item" href="<?php echo home_url('about'); ?>" target="_blank">About</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <ul>
          <li class="footer-ul-title">Resources</li>
          <li><a href="<?php echo home_url('blog'); ?>" class="footer-item"> Blog</a></li>
          <li><a href="<?php echo home_url('faq'); ?>" class="footer-item"> FAQ</a></li>
          <li>
            <a href="https://www.youtube.com/watch?v=cZ0Gms1Evww" target="_blank" class="footer-item">
              Watch a demo</a>
          </li>
          <li class="footer-ul-title">Compare</li>
          <li>
            <a href="<?php echo home_url('comparison'); ?>" class="footer-item">
            vene dash vs. affiliate trackers</a>
          </li>

          <!-- <li>
            <a href="<?php echo home_url('comparison'); ?>" class="footer-item">
              Voluum vs vene dash</a>
          </li>
          <li>
            <a href="<?php echo home_url('comparison'); ?>" class="footer-item">
              Everflow vs vene dash</a>
          </li>
          <li>
            <a href="<?php echo home_url('comparison'); ?>" class="footer-item">
              Compare more</a>
          </li> -->
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <ul>
          <li class="footer-ul-title">Follow Us</li>
          <li>
            <a target="_blank" href="https://www.facebook.com/vene.io/" class="footer-item"><i class="mr-1 fab fa-facebook-f"></i> Facebook</a>
          </li>
          <li>
            <a target="_blank" href="https://www.instagram.com/vene.io/" class="footer-item"><i class="mr-1 fab fa-instagram"></i> Instagram</a>
          </li>
          <li>
            <a target="_blank" href="https://www.linkedin.com/company/veneio" class="footer-item"><i class="mr-1 fab fa-linkedin"></i> LinkedIn</a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/vene_io" class="footer-item"><i class="mr-1 fab fa-twitter"></i> Twitter</a>
          </li>
          <li>
            <a target="_blank" href="https://www.youtube.com/channel/UC8HMWSN5xoljaAl2ZpO5bjA" class="footer-item"><i class="mr-1 fab fa-youtube"></i> YouTube</a>
          </li>
        </ul>
      </div>
      <div class="col-6 col-md-3">
        <ul class="fit_content">
          <li class="footer-ul-title">Companies</li>
          <li>
            <a href="" class="footer-item vene_logos_footer">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/img/logos_vene@2x.png" alt="" />
            </a>
          </li>
          <li>
            <a href="" class="footer-item">
              <p class="logos_alt">
                Proudly built in Berlin by Vene International GmbH, a
                company of
              </p>
            </a>
          </li>
          <li>
            <a href="https://www.freenet-group.de/en/index.html" target="_blank" class="footer-item">
              <img src="<?php echo get_template_directory_uri() ?>/assets/dist/svg/freenet_group 1.svg" alt="" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row d-flex flex-row justify-content-between align-items-center footer-bottom">
      <div class="col-md-6">
        <p class="copyright">
          Copyright © 2020 Vene International GmbH. All rights reserved.
        </p>
      </div>
      <div class="col-md-6 d-flex flex-row">
        <p class="ml-auto legal">
          <a href="<?php echo home_url('impressum'); ?>">Legal Notice</a> |
          <a href="<?php echo home_url('privacy-policy'); ?>">Privacy Policy</a> |
          <a href="<?php echo home_url('terms-and-conditions'); ?>">Terms & Conditions</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<script src="<?php echo get_template_directory_uri() ?>/assets/dist/js/vendors.js"></script>

<script defer type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
<script type="text/javascript">
  function onElementInserted(containerSelector, elementSelector, callback) {

    var onMutationsObserved = function(mutations) {
      mutations.forEach(function(mutation) {
        if (mutation.addedNodes.length) {
          var elements = $(mutation.addedNodes).find(elementSelector);
          for (var i = 0, len = elements.length; i < len; i++) {
            callback(elements[i]);
          }
        }
      });
    };

    var target = $(containerSelector)[0];
    var config = {
      childList: true,
      subtree: true
    };
    var MutationObserver = window.MutationObserver || window.WebKitMutationObserver;
    var observer = new MutationObserver(onMutationsObserved);
    observer.observe(target, config);

  }

  onElementInserted('body', '.mc-modal', function(element) {
    $(".mc-modal").css("visibility", "visible");
  });

  onElementInserted('body', '.mc-banner', function(element) {
    $(".mc-banner").css("visibility", "hidden");
  });

  function showMailingPopUp() {
    dojoRequire(["mojo/signup-forms/Loader"], function(L) {
      L.start({
        "baseUrl": "mc.us12.list-manage.com",
        "uuid": "73567301dfb7c70009f3b1bfb",
        "lid": "492947e8a3",
        "uniqueMethods": true
      })
    })
    document.cookie = 'MCPopupClosed=;path=/;expires=Thu, 01 Jan 1970 00:00:00 UTC;';
    document.cookie = 'MCPopupSubscribed=;path=/;expires=Thu, 01 Jan 1970 00:00:00 UTC;';
  };
  document.getElementById("open-popup").onclick = function() {
    showMailingPopUp()
  };
</script>

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
<script defer src="//code.tidio.co/a7vdyfg6zqvy8sboxwnq56urhuetjyk2.js"></script>
<script type="text/javascript" src="//script.crazyegg.com/pages/scripts/0030/2908.js" async="async"></script>
</body>

</html>