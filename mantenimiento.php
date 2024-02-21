<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/page-coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 14:20:43 GMT -->
<head>
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XP4E6YC00F"></script>
  <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-XP4E6YC00F'); </script>

  <!-- Title -->
  <title>Mantenimiento | JDL Technology</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
</head>
<body>
  <span class="name_page" style="display: none;" >Mantenimiento</span>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-bg-transparent header-abs-top py-3">
    <div class="header-section">
      <div id="logoAndNav" class="container">
        <nav class="navbar">
          <a class="navbar-brand" href="index.php" aria-label="Front">
            <img src="assets/svg/logos/logo.svg" alt="Logo">
          </a>
        </nav>
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex">
      <div class="container d-lg-flex align-items-lg-center vh-lg-100 space-bottom-1 space-top-3 space-bottom-lg-3 space-lg-0">
        <div class="row justify-content-lg-between align-items-lg-center w-100 mt-lg-9">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img class="img-fluid" src="assets/svg/illustrations/maintenance-mode.svg" alt="SVG Illustration">
          </div>

          <div class="col-lg-5">
            <!-- Title -->
            <div class="mb-4">
              <h1>Estamos aún en desarrollo</h1>
              <p>Nuestro sitio web está en construcción. Estaremos aquí pronto con nuestro nuevo sitio increíble, suscríbase para recibir notificaciones.</p>
            </div>
            <!-- End Title -->

            <!-- Countdown -->
            <div class="js-countdown row mb-5" data-hs-countdown-options='{ "endDate": "2023/01/30" }'>
              <div class="col-3">
                <span class="js-cd-days font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Dia</span>
              </div>
              <div class="col-3">
                <span class="js-cd-hours font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Hora</span>
              </div>
              <div class="col-3">
                <span class="js-cd-minutes font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Minuto</span>
              </div>
              <div class="col-3">
                <span class="js-cd-seconds font-size-3 text-primary font-weight-bold mb-0"></span>
                <span class="h5 d-block mb-0">Secs</span>
              </div>
            </div>
            <!-- End Countdown -->

            <!-- Input -->
            <form class="js-validate js-form-message">
              <label class="sr-only" for="subscribeSrEmail">Tu email</label>
              <div class="input-group">
                <input type="text" class="form-control" name="name" id="subscribeSrEmail" placeholder="Tu email" aria-label="Tu email" aria-describedby="subscribeEmailButton" required
                       data-msg="Porfavor ingrese un email valido.">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-primary" id="subscribeEmailButton">Contactanos</button>
                </div>
              </div>
            </form>
            <!-- End Input -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <?php require 'footer_v6.php'; ?>
  <!-- ========== END FOOTER ========== -->

  <?php require 'script_vista.php'; ?>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function () { var validation = $.HSCore.components.HSValidation.init($(this)); });


      // INITIALIZATION OF COUNTDOWNS
      // =======================================================
      $('.js-countdown').each(function () { var countdown = $.HSCore.components.HSCountdown.init($(this)); });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front/page-coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 May 2021 14:20:43 GMT -->
</html>