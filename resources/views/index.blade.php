<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>HRD</title>
    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="landing/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="landing/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="landing/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="landing/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="landing/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="landing/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="landing/vendors/prism/prism.css" rel="stylesheet">
    <link href="landing/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="landing/assets/css/theme.css" rel="stylesheet" />
    <link href="landing/assets/css/user.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"><img src="landing/assets/img/Logo.png" alt="" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white fs-3"></i></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="about.html">About</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="blogs.html">Blogs</a></li>
              <li class="nav-item mt-2 mt-lg-0"><a class="nav-link btn btn-light text-black w-md-25 w-50 w-lg-100" aria-current="page" href="{{ route('login') }}">Log In</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="bg-dark"><img class="img-fluid position-absolute end-0" src="landing/assets/img/hero/hero-bg.png" alt="" />
        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>
          <div class="container">
            <div class="row align-items-center py-lg-8 py-6">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white fs-5 fs-xl-6">Save time by building fast with Boldo Template</h1>
                <p class="text-white py-lg-3 py-2">Funding handshake buyer business-to-business metrics iPad partnership. First mover advantage innovator success deployment non-disclosure.</p>
                <div class="d-sm-flex align-items-center gap-3">
                  <button class="btn btn-success text-black mb-3 w-75">Join Us</button>
                  <button class="btn btn-outline-light mb-3 w-75">Explore</button>
                </div>
              </div>
              <div class="col-lg-6 text-center text-lg-end mt-3 mt-lg-0"><img class="img-fluid" src="landing/assets/img/hero/hero-graphics.png" alt="" /></div>
            </div>
            <div class="swiper">
              <div class="swiper-container swiper-shadow swiper-theme" data-swiper='{"slidesPerView":2,"breakpoints":{"640":{"slidesPerView":2,"spaceBetween":20},"768":{"slidesPerView":4,"spaceBetween":40},"992":{"slidesPerView":5,"spaceBetween":40},"1024":{"slidesPerView":4,"spaceBetween":50},"1025":{"slidesPerView":6,"spaceBetween":50}},"spaceBetween":10,"grabCursor":true,"pagination":{"el":".swiper-pagination","clickable":true},"loop":true,"freeMode":true,"autoplay":{"delay":2500,"disableOnInteraction":false}}'>
                <div class="swiper-wrapper">
                  <div class="swiper-slide text-center"><img src="landing/assets/img/logos/boldo.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="landing/assets/img/logos/presto.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="landing/assets/img/logos/boldo.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="landing/assets/img/logos/presto.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="landing/assets/img/logos/boldo.png" alt="" /></div>
                  <div class="swiper-slide text-center"><img src="landing/assets/img/logos/presto.png" alt="" /></div>
                </div>
              </div>
            </div>
          </div>
          <!-- end of .container-->
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
      </div>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="landing/vendors/popper/popper.min.js"></script>
    <script src="landing/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="landing/vendors/anchorjs/anchor.min.js"></script>
    <script src="landing/vendors/is/is.min.js"></script>
    <script src="landing/vendors/fontawesome/all.min.js"></script>
    <script src="landing/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="landing/vendors/prism/prism.js"></script>
    <script src="landing/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="landing/assets/js/theme.js"></script>

  </body>

</html>