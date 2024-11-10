<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wanna Bali Tour</title>
  <meta name="description"
        content="Wanna bali tour">

  <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="wanna bali tour">
  <meta itemprop="description"
        content="Wanna bali tour">
  {{-- <meta itemprop="image" content="{{ asset('front-end') }}/assets/img/seo-share-image.png"> --}}

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="index.html">
  <meta property="og:type" content="website">
  <meta property="og:title" content="wanna bali tour">
  <meta property="og:description"
        content="Wanna bali tour">
  {{-- <meta property="og:image" content="{{ asset('front-end') }}/assets/img/seo-share-image.png"> --}}

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="wanna bali tour">
  <meta name="twitter:description"
        content="Wanna bali tour">
  {{-- <meta name="twitter:image" content="{{ asset('front-end') }}/assets/img/seo-share-image.png"> --}}
  <!--  <meta name="twitter:site" content="@yourhandle">-->

  <!-- Additional Tags -->
  <link rel="icon" type="image/png" href="{{ asset('front-end') }}/assets/img/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front-end') }}/assets/img/apple-touch-icon.png">

  <meta name="author" content="Pakxaros">
  <meta name="copyright" content="Copyright © Pakxaros">
  <meta name="robots" content="index, follow">

  <meta name="theme-color" content="#399f6e">

  <meta name="keywords" content="wanna bali tour">

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/fontawesome-6.3.0.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/keyframe-animation.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/animate.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/meanmenu.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/daterangepicker.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/odometer.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/venobox.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/swiper.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/nice-select.min.css">
  <link rel="stylesheet" href="{{ asset('front-end') }}/assets/css/main.min.css">

  <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">-->

</head>

<body>
   <!-- header-area-start -->
<header class="header sticky-active">
    <div class="top-bar">
      <div class="container">
        <div class="top-bar-inner">
          <div class="top-left-content">
            <ul class="top-left-list">
              <li>
                <a href="tel:+1116581254878"><i class="fa-regular fa-phone"></i>(+111 658 1254 878)</a>
              </li>
              <li>
                <a href="mailto:support@example.com"><i class="fa-regular fa-envelope"></i>support@example.com</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="primary-header">
        <div class="primary-header-inner">
          <br><br>
          <div class="header-logo d-none d-lg-block">
          <a href="index-2.html">
              <img src="{{ asset('front-end') }}/assets/img/logo/logo.png" alt="Logo">
            </a>
          </div>
          <!-- /.header-menu-wrap -->
        </div>
        <!-- /.primary-header-inner -->
      </div>
      <!-- /.primary-header -->
    </div>
    <div class="container">
      <div class="primary-header">
        <div class="primary-header-inner">
          <div class="header-menu-wrap">
            <div class="mobile-menu-items">
                <ul class="sub-menu">
                    <li class="active">
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                      <a href="{{ route('fullday') }}">Full Day Tour</a>
                    </li>
                    <li>
                      <a href="{{ route('half') }}">Half Day Tour</a>
                    </li>
                    <li>
                        <a href="{{ route('pakage') }}">Tour Packages</a>
                    </li>
                    <li>
                        <a href="{{ route('activities') }}">Activities</a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="header-right d-flex align-items-center">
              <div class="header-logo d-lg-none">
                <a href="#">
                  <img src="{{ asset('front-end') }}/assets/img/logo/logo.png" alt="Logo"/>
                </a>
              </div>
              <div class="header-right-item">
                <a href="javascript:void(0)" class="mobile-side-menu-toggle d-lg-none"><i
                    class="fa-solid fa-bars"></i></a>
              </div>
            </div>
            <!-- /.header-right -->
          </div>
          <!-- /.header-menu-wrap -->
        </div>
        <!-- /.primary-header-inner -->
      </div>
      <!-- /.primary-header -->
    </div>
  </header>
<!-- /.Main Header -->

<div id="popup-search-box">
  <div class="box-inner-wrap d-flex align-items-center">
    <form id="form" class="popup-search" action="#" method="get" role="search">
      <input id="popup-search" type="text" name="s" placeholder="Search here...">
      <button id="popup-search-button" type="submit" name="submit"></button>
    </form>
  </div>
</div>
<!-- /#popup-search-box -->

<div class="signin-box modal fade" id="signModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="bg"></div>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="signin-body-wrap">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="signin-carousel-wrapper">
                <div class="signin-carousel swiper">
                  <div class="swiper-wrapper swiper-container">
                    <div class="swiper-slide">
                      <div class="signin-item">
                        <div class="signin-thumb">
                          <img src="{{ asset('front-end') }}/assets/img/images/sign-up-img.png" alt="sign">
                        </div>
                        <div class="signin-left-content text-center">
                          <h3 class="title">Customizable Multipurpose Dashboard</h3>
                          <p>
                            Everything you need in an easily customizable dashboard.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="signin-item">
                        <div class="signin-thumb">
                          <img src="{{ asset('front-end') }}/assets/img/images/sign-up-img.png" alt="sign">
                        </div>
                        <div class="signin-left-content text-center">
                          <h3 class="title">Customizable Multipurpose Dashboard</h3>
                          <p>
                            Everything you need in an easily customizable dashboard.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Carousel Dots -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="signin-form-box">
                <h3 class="title">Sign in</h3>
                <h4 class="account">New user? <a href="sign-up.html">Create an account</a></h4>
                <div class="signin-form">
                  <div class="mail-form">
                    <input type="email" id="email-2" name="email" class="form-control"
                           placeholder="Phone / Email address">
                  </div>
                  <button class="pxs-primary-btn">Continue</button>
                </div>
                <div class="signup-btn-box">
                  <div class="separator title-border">
                    <span>Or</span>
                  </div>
                  <a href="#" class="signup-btn google">
                    <img src="{{ asset('front-end') }}/assets/img/icon/google-icon.png" alt="icon">Continue with
                    google
                  </a>
                  <a href="#" class="signup-btn facebook">
                    <img src="{{ asset('front-end') }}/assets/img/icon/facebook-icon.png" alt="icon">Continue with
                    google
                  </a>
                  <a href="#" class="signup-btn apple">
                    <img src="{{ asset('front-end') }}/assets/img/icon/apple-icon.png" alt="icon">Continue with
                    google
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ./ sign-in-box -->

<div class="mobile-side-menu">
  <div class="side-menu-content">
    <div class="side-menu-head">
      <button class="mobile-side-menu-close"><i class="fa fa-times"></i></button>
    </div>
    <div class="side-menu-wrap"></div>
  </div>
</div>
<!-- /.mobile-side-menu -->
<div class="mobile-side-menu-overlay"></div>

    @yield('content')

<footer class="footer-section">
    <div class="footer-shape"></div>
    <div class="container">
        <div class="footer-top padding">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="widget-item wow fade-in-bottom" data-wow-delay="200ms">
                <h3 class="widget-header">About Tour Agency</h3>
                <p class="desc">
                    Our Bali tour agency specializes in creating personalized travel experiences, offering a variety of tour packages, accommodations, and activities. Let us guide you through Bali’s stunning landscapes, rich culture, and hidden treasures.
                </p>
                <a href="https://maps.app.goo.gl/W45PTiXURd1MQJqX6" target="_blank"><img
                    src="{{ asset('front-end') }}/assets/img/icon/widget-icon.png" alt="icon">Check on google map</a>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="widget-item item-2 wow fade-in-bottom" data-wow-delay="400ms">
                <h3 class="widget-header">Explore</h3>
                <ul class="widget-list">
                <li><a href="index-2.html">Home</a></li>
                <li><a href="booking-customer-information.html">Full Day Tour</a></li>
                <li><a href="event-details.html">Half Day Tour</a></li>
                <li><a href="event-details.html">Tour Packages</a></li>
                <li><a href="about.html">Activities</a></li>
                <li><a href="contact.html">Gallery</a></li>
                <li><a href="contact.html"> Contact Us</a></li>
                </ul>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="widget-item item-2 wow fade-in-bottom" data-wow-delay="500ms">
                <h3 class="widget-header">Contact</h3>
                <span class="address">Gg. VIII, Saba, Kec. Blahbatuh, Kabupaten Gianyar, Bali 80581</span>
                <a href="tel:8551004444" class="phone-call"><img src="{{ asset('front-end') }}/assets/img/icon/phone.png"
                                                                alt="phone">855 100 4444</a>
                <a href="mailto:info@hoteladmin.com" class="mail">touragency@gmail.com</a>
                <ul class="widget-social">
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        </div>
        <div class="footer-bottom">
        <span class="portfolio">© 2024 Tour Agency @ All Rights Reserved</span>
        </div>
    </div>
    </footer>
    <!-- ./ footer-section -->

    <!-- JS here -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function toggleReadMore() {
        var dots = document.querySelector('.dots');
        var moreContent = document.querySelector('.more-content');
        var btnText = document.querySelector('.show-more');

        if (moreContent.style.display === "none") {
            moreContent.style.display = "inline";  // Menampilkan konten tambahan
            dots.style.display = "none";           // Menyembunyikan tanda titik
            btnText.textContent = "Read Less";     // Mengubah teks tombol
        } else {
            moreContent.style.display = "none";    // Menyembunyikan konten tambahan
            dots.style.display = "inline";         // Menampilkan tanda titik
            btnText.textContent = "Read More";     // Mengubah teks tombol
        }
    }
</script>


    <script src="{{ asset('front-end') }}/assets/js/jquary-3.6.0.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/jquery.isotope.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/moment.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/daterangepicker.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/waypoints.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/meanmenu.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/smooth-scroll.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/nice-select.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/odometer.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/venobox.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/swiper.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('front-end') }}/assets/js/main.js"></script>
    </body>
    </html>
