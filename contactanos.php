<?php require 'head.php'; ?>
<body id="homeSection">
  <!-- Search Content -->
  <div id="searchSlideDown" class="hs-unfold-content dropdown-unfold search-slide-down">
    <form>
      <!-- Input Group -->
      <div class="input-group input-group-borderless search-slide-down-input bg-white rounded mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text">
              <i class="fas fa-search"></i>
            </span>
        </div>
        <input id="searchSlideDownControl" type="search" class="form-control" placeholder="Search Front" aria-label="Search Front">
        <div class="input-group-append">
          <a class="js-hs-search-unfold-invoker input-group-text" href="javascript:;"
             data-hs-unfold-options='{
                 "target": "#searchSlideDown",
                 "type": "css-animation",
                 "animationIn": "fadeIn search-slide-down-show",
                 "animationOut": "fadeOutUp",
                 "cssAnimatedClass": null,
                 "hasOverlay": true,
                 "overlayClass": ".search-slide-down-bg-overlay",
                 "overlayStyles": {
                   "background": "rgba(33, 50, 91, .7)"
                 },
                 "duration": 800,
                 "hideOnScroll": false
               }'>
            <i class="fas fa-times" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <!-- End Input Group -->

      <!-- Suggestions Content -->
      <div class="rounded bg-white search-slide-down-suggestions py-3 px-5">
        <ul class="list-unstyled list-sm-article mb-0">
          <li><a href="#">About Front</a></li>
          <li><a href="#">Getting Started</a></li>
          <li><a href="#">Documentation</a></li>
        </ul>
      </div>
      <!-- End Suggestions Content -->
    </form>
  </div>
  <!-- End Search Content -->

  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-box-shadow-on-scroll header-abs-top-lg header-show-hide-lg"
          data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <div class="header-section">
      <!-- Topbar -->
      <div class="container header-hide-content">
        <nav class="js-mega-menu navbar navbar-expand-lg z-index-999">
          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <div id="topBar" class="collapse navbar-collapse">
            <ul class="navbar-nav w-100">
              <!-- Back To Main Demo -->
              <li class="navbar-nav-item mr-auto">
                  <a class="nav-link font-size-1 py-2 pl-0" href="index.php">
                    <div class="d-flex align-items-center">
                      <svg class="mb-0 mr-1" width="16px" height="16px" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M8.22,12.72A.75.75,0,0,1,8,12.19v-.38a.77.77,0,0,1,.22-.53l5.14-5.13a.5.5,0,0,1,.71,0l.71.71a.49.49,0,0,1,0,.7L10.33,12l4.45,4.44a.5.5,0,0,1,0,.71l-.71.7a.5.5,0,0,1-.71,0Z"/>
                      </svg> Main Demo
                    </div>
                  </a>
                </li>
              <!-- End Back To Main Demo -->

              <!-- Demos -->
              <li class="hs-has-mega-menu navbar-nav-item"
                  data-hs-mega-menu-item-options='{
                    "desktop": {
                      "position": "right",
                      "maxWidth": "900px"
                    }
                  }'>
                <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-size-1 py-2" href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                <!-- Demos - Mega Menu -->
                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu">
                  <div class="row no-gutters">
                    <div class="col-lg-8">
                      <div class="navbar-promo-card-deck">
                        <!-- Promo Item -->
                        <div class="navbar-promo-card navbar-promo-item">
                          <a class="navbar-promo-link" href="demo-course/index.php">
                            <div class="media align-items-center">
                              <img class="navbar-promo-icon" src="assets/svg/icons/icon-67.svg" alt="SVG">
                              <div class="media-body">
                                <span class="navbar-promo-title">Course</span>
                                <span class="navbar-promo-text">Learn On-demand demo</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Promo Item -->

                        <!-- Promo Item -->
                        <div class="navbar-promo-card navbar-promo-item">
                          <a class="navbar-promo-link" href="demo-app-marketplace/index.php">
                            <div class="media align-items-center">
                              <img class="navbar-promo-icon" src="assets/svg/icons/icon-45.svg" alt="SVG">
                              <div class="media-body">
                                <span class="navbar-promo-title">App Marketplace</span>
                                <span class="navbar-promo-text">Marketplace app demo</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Promo Item -->
                      </div>

                      <div class="navbar-promo-card-deck">
                        <!-- Promo Item -->
                        <div class="navbar-promo-card navbar-promo-item">
                          <a class="navbar-promo-link" href="index.php">
                            <div class="media align-items-center">
                              <img class="navbar-promo-icon" src="assets/svg/icons/icon-4.svg" alt="SVG">
                              <div class="media-body">
                                <span class="navbar-promo-title">Help Desk</span>
                                <span class="navbar-promo-text">Help desk demo</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Promo Item -->

                        <!-- Promo Item -->
                        <div class="navbar-promo-card navbar-promo-item">
                          <a class="navbar-promo-link" href="demo-real-estate/index.php">
                            <div class="media align-items-center">
                              <img class="navbar-promo-icon" src="assets/svg/icons/icon-13.svg" alt="SVG">
                              <div class="media-body">
                                <span class="navbar-promo-title">Real Estate <span class="badge badge-success badge-pill ml-1">New</span></span>
                                <span class="navbar-promo-text">Real estate demo</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Promo Item -->
                      </div>

                      <div class="navbar-promo-card-deck">
                        <!-- Promo Item -->
                        <div class="navbar-promo-card navbar-promo-item">
                          <a class="navbar-promo-link" href="demo-jobs/index.php">
                            <div class="media align-items-center">
                              <img class="navbar-promo-icon" src="assets/svg/icons/icon-19.svg" alt="SVG">
                              <div class="media-body">
                                <span class="navbar-promo-title">Jobs <span class="badge badge-success badge-pill ml-1">New</span></span>
                                <span class="navbar-promo-text">Jobs demo</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Promo Item -->

                        <!-- Promo Item -->
                        <div class="navbar-promo-card navbar-promo-item">
                          <a class="navbar-promo-link disabled" href="javascript:;">
                            <div class="media align-items-center">
                              <img class="navbar-promo-icon" src="assets/svg/icons/icon-28.svg" alt="SVG">
                              <div class="media-body">
                                <span class="navbar-promo-title">New demo</span>
                                <span class="navbar-promo-text">Coming soon...</span>
                              </div>
                            </div>
                          </a>
                        </div>
                        <!-- End Promo Item -->
                      </div>
                    </div>

                    <!-- Promo -->
                    <div class="col-lg-4 navbar-promo d-none d-lg-block">
                      <a class="d-block navbar-promo-inner" href="#">
                        <div class="position-relative">
                          <img class="img-fluid rounded mb-3" src="assets/img/380x227/img1.jpg" alt="Image Description">
                        </div>
                        <span class="navbar-promo-text font-size-1">Front makes you look at things from a different perspectives.</span>
                      </a>
                    </div>
                    <!-- End Promo -->
                  </div>
                </div>
                <!-- End Demos - Mega Menu -->
              </li>
              <!-- End Demos -->

              <!-- Docs -->
              <li class="hs-has-mega-menu navbar-nav-item"
                  data-hs-mega-menu-item-options='{
                    "desktop": {
                      "position": "right",
                      "maxWidth": "260px"
                    }
                  }'>
                <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle font-size-1 py-2 pr-0" href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

                <!-- Docs - Submenu -->
                <div class="hs-mega-menu dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                  <!-- Promo Item -->
                  <div class="navbar-promo-item">
                    <a class="navbar-promo-link" href="documentation/index.php">
                      <div class="media align-items-center">
                        <img class="navbar-promo-icon" src="assets/svg/icons/icon-2.svg" alt="SVG">
                        <div class="media-body">
                          <span class="navbar-promo-title">
                            Documentation
                            <span class="badge badge-primary badge-pill ml-1">v3.3</span>
                          </span>
                          <small class="navbar-promo-text">Development guides</small>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Promo Item -->

                  <!-- Promo Item -->
                  <div class="navbar-promo-item">
                    <a class="navbar-promo-link" href="snippets/index.php">
                      <div class="media align-items-center">
                        <img class="navbar-promo-icon" src="assets/svg/icons/icon-1.svg" alt="SVG">
                        <div class="media-body">
                          <span class="navbar-promo-title">Snippets</span>
                          <small class="navbar-promo-text">Start building</small>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Promo Item -->

                  <div class="navbar-promo-footer">
                    <!-- List -->
                    <div class="row no-gutters">
                      <div class="col-6">
                        <div class="navbar-promo-footer-item">
                          <span class="navbar-promo-footer-text">Check what's new</span>
                          <a class="navbar-promo-footer-text" href="documentation/changelog.html"> Changelog</a>
                        </div>
                      </div>
                      <div class="col-6 navbar-promo-footer-ver-divider">
                        <div class="navbar-promo-footer-item">
                          <span class="navbar-promo-footer-text">Have a question?</span>
                          <a class="navbar-promo-footer-text" href="http://htmlstream.com/contact-us"> Contact us</a>
                        </div>
                      </div>
                    </div>
                    <!-- End List -->
                  </div>
                </div>
                <!-- End Docs - Submenu -->
              </li>
              <!-- End Docs -->
            </ul>
          </div>
        </nav>
      </div>
      <!-- End Topbar -->

      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <div class="navbar-nav-wrap">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php" aria-label="Front">
              <img src="assets/svg/logos/logo.svg" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Secondary Content -->
            <div class="navbar-nav-wrap-content text-center">
              <!-- Search -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-xs btn-icon btn-ghost-secondary" href="javascript:;"
                   data-hs-unfold-options='{
                    "target": "#searchSlideDown",
                    "type": "css-animation",
                    "animationIn": "fadeIn search-slide-down-show",
                    "animationOut": "fadeOutUp",
                    "cssAnimatedClass": null,
                    "hasOverlay": true,
                    "overlayClass": ".search-slide-down-bg-overlay",
                    "overlayStyles": {
                      "background": "rgba(33, 50, 91, .7)"
                    },
                    "duration": 800,
                    "hideOnScroll": false
                   }'>
                  <i class="fas fa-search"></i>
                </a>
              </div>
              <!-- End Search -->
            </div>
            <!-- End Secondary Content -->

            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler navbar-nav-wrap-toggler btn btn-icon btn-sm rounded-circle"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="navBar"
                    data-toggle="collapse"
                    data-target="#navBar">
              <span class="navbar-toggler-default">
                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
                </svg>
              </span>
              <span class="navbar-toggler-toggled">
                <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                  <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                </svg>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Navigation -->
            <div id="navBar" class="collapse navbar-collapse navbar-nav-wrap-collapse">
              <div class="navbar-body header-abs-top-inner">
                <ul class="js-scroll-nav navbar-nav header-navbar-nav">
                  <li class="navbar-nav-item">
                    <a class="nav-link" href="#homeSection">Contacts</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Navigation -->
          </div>
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Map Section -->
    <div id="contactsSection" class="position-relative mx-3 mx-md-8">
      <div class="container space-1 space-lg-3">
        <div class="row justify-content-md-end">
          <div class="col-md-6 col-lg-5">
            <div class="card bg-white position-relative z-index-999 p-5 p-sm-7">
              <div class="mb-5">
                <span class="d-block font-size-2 text-dark text-lh-sm">3 medios para</span>
                <span class="d-block font-size-4 text-dark font-weight-bold text-lh-sm">contactarse</span>
              </div> 

              <!-- Contacts -->
              <div class="media mb-5">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-phone"></i>
                </span>
                <div class="media-body">
                  <h5 class=" mb-1">Ll??manos</h5>
                  <span class="d-block text-body font-size-1">+51 921 305 769 </span>
                </div>
              </div>
              <!-- End Contacts -->

              <!-- Contacts -->
              <div class="media mb-5">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-envelope"></i>
                </span>
                <div class="media-body text-truncate">
                  <h5 class=" mb-1">Correo</h5>
                  <span class="d-block text-body font-size-1">jdltechnology19@gmail.com</span>
                </div>
              </div>
              <!-- End Contacts -->

              <!-- Contacts -->
              <div class="media">
                <span class="icon icon-xs icon-soft-primary icon-circle mr-3">
                  <i class="fas fa-map-marker-alt"></i>
                </span>
                <div class="media-body">
                  <h5 class=" mb-1">Vis??tanos</h5>
                  <span class="d-block text-body font-size-1">Jr. Los M??rtires 240, Tarapoto 22201</span>
                </div>
              </div>
              <!-- End Contacts -->
            </div>
          </div>
        </div>
      </div>

      <!-- Gmap -->
      <div class="position-md-absolute top-0 right-0 bottom-0 left-0 space-bottom-3">
        <div id="map" class="min-h-300rem h-100 rounded-lg"
             data-hs-leaflet-options='{
               "map": {
                 "scrollWheelZoom": true,
                 "coords": [-6.472899, -76.394984]
               },
               "marker": [
                 {
                   "coords": [-6.472899, -76.394984],
                   "icon": {
                     "iconUrl": "assets/svg/components/ubi.png",
                     "iconSize": [50, 45]
                   },
                   "popup": {
                     "text": "Jr. Los M??rtires 240, Tarapoto 22201",
                     "title": "JDL Technology"
                   }
                 }
               ]
              }'></div>
      </div>
      <!-- End Gmap -->
    </div>
    <!-- End Map Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <?php require 'footer_v5.php';?>
  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->


  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/vendor/hs-scroll-nav/dist/hs-scroll-nav.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        breakpoint: 'md'
      }).init();


      // INITIALIZATION OF UNFOLD
      // =======================================================
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


      // INITIALIZATION OF UNFOLD
      // =======================================================
      $('.js-hs-search-unfold-invoker').each(function() {
        var searchUnfold = new HSUnfold($(this), {
          afterOpen: function() {
            $('#searchSlideDownControl').focus();
          }
        }).init();
      });


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function () {
        var validation = $.HSCore.components.HSValidation.init($(this));
      });


      // INITIALIZATION OF SCROLL NAV
      // =======================================================
      var isClosed = false;

      $('.js-scroll-nav').each(function () {
        var scrollNav = new HSScrollNav($(this), {
          beforeShow: function () {
            if (window.innerWidth < 768) {
              $('#navBar').collapse('hide').on('hidden.bs.collapse', function () {
                isClosed = true;
              });
            } else {
              isClosed = true;
            }

            return isClosed;
          },
          afterShow: function () {
            isClosed = false;
          }
        }).init();
      });


      // INITIALIZATION OF LEAFLET
      // =======================================================
      var leaflet = $.HSCore.components.HSLeaflet.init($('#map')[0]);

      leaflet.fire('movestart');
      leaflet._rawPanBy([leaflet.getCenter().lng + 250, leaflet.getCenter().lat]);
      leaflet.fire('move');
      leaflet.fire('moveend');

      L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/light-v9'
      }).addTo(leaflet);


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front/landing-onepage-corporate.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 14:18:20 GMT -->
</html>