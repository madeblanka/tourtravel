@extends('layouts')
@section('content')

<style>
    .project-thumb-mobile {
        height: 450px; /* Atur tinggi gambar */
        overflow: hidden; /* Sembunyikan bagian yang melampaui batas */
        width: 100%; /* Pastikan lebar elemen pembungkus mengambil 100% */
    }
    .project-thumb-mobile img {
        height: 100%; /* Gambar mengambil 100% tinggi elemen pembungkus */
        width: 100%; /* Gambar mengambil 100% lebar elemen pembungkus */
        object-fit: cover; /* Agar gambar terpotong sesuai dengan rasio aslinya */
    }

        /* Atur ukuran gambar slideshow */
        .carousel-item img {
            width: 100%; /* Sesuaikan dengan lebar container */
            height: 500px; /* Atur tinggi sesuai kebutuhan */
            object-fit: contain; /* Memastikan gambar memenuhi area tanpa distorsi */
        }
    </style>

<div id="carouselExample" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <!-- Indicators for each slide -->
        <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExample" data-slide-to="1"></li>
        <li data-target="#carouselExample" data-slide-to="2"></li>
        <li data-target="#carouselExample" data-slide-to="3"></li>
        <li data-target="#carouselExample" data-slide-to="4"></li>
        <li data-target="#carouselExample" data-slide-to="5"></li>
        <li data-target="#carouselExample" data-slide-to="6"></li>
        <li data-target="#carouselExample" data-slide-to="7"></li>
        <li data-target="#carouselExample" data-slide-to="8"></li>
        <li data-target="#carouselExample" data-slide-to="9"></li>
        <li data-target="#carouselExample" data-slide-to="10"></li>
        <li data-target="#carouselExample" data-slide-to="11"></li>
    </ol>

    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/1" class="d-block w-100" alt="Image 1">
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/2" class="d-block w-100" alt="Image 2">
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/3" class="d-block w-100" alt="Image 3">
        </div>
        <!-- Slide 4 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/4" class="d-block w-100" alt="Image 4">
        </div>
        <!-- Slide 5 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/5" class="d-block w-100" alt="Image 5">
        </div>
        <!-- Slide 6 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/6" class="d-block w-100" alt="Image 6">
        </div>
        <!-- Slide 7 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/7" class="d-block w-100" alt="Image 7">
        </div>
        <!-- Slide 8 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/8" class="d-block w-100" alt="Image 8">
        </div>
        <!-- Slide 9 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/9" class="d-block w-100" alt="Image 9">
        </div>
        <!-- Slide 10 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/10" class="d-block w-100" alt="Image 10">
        </div>
        <!-- Slide 11 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/11" class="d-block w-100" alt="Image 11">
        </div>
        <!-- Slide 12 -->
        <div class="carousel-item">
            <img src="{{ asset('front-end') }}/assets/img/slideshow/12" class="d-block w-100" alt="Image 12">
        </div>
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section class="hero-section padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="hero-left">
          <div class="hero-video-thumb wow fade-in-bottom" data-wow-delay="400ms">
            <img src="{{ asset('front-end') }}/assets/img/images/treehouse.jpg" alt="hero">
          </div>
          <div class="hero-thumb">
            <div class="hero-text wow fade-in-bottom" data-wow-delay="400ms">
              <div class="counter-item">
                <div class="plane wow slide-in-bottomleft" data-wow-delay="1000ms"
                     data-wow-duration="1000ms"></div>
                <div class="counter-content">
                  <h3 class="counter-title">
                    <span class="odometer" data-count="500">0</span>+
                  </h3>
                  <span class="package">Packages</span>
                </div>
              </div>
              <img src="{{ asset('front-end') }}/assets/img/images/nusapenida1.jpg" alt="hero">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="hero-content">
            <h1 class="hero-title wow fade-in-right" data-wow-delay="200ms">
            ABOUT US
            </h1>
          <p class="wow fade-in-right" data-wow-delay="400ms">
          WANNA BALI tour & travel is a tourism service platform that specializes in travel-related service based in Bali, Indonesia. The company's primary activities include handpick deals to our customers on food, traveling and all kinds of residencies which include staying’s at hotels, villas, resorts etc. to make their tour a memorable one. We are also providing the destination wedding services in Bali along with the additional services like pre-wedding photoshoot and bridal makeup.<span class="dots">...</span>
          <span class="more-content" style="display: none;">The company started with our founder hobby's of traveling and visiting countries all over the world such as in Europe, America,Central America, Asia, Australia. with over 21 years experiences in tourism industry domestically and international, Meets more than hundreds of thousands tourists from all over the world. <br>
          We have a team of destination-specific guides and expert tour managers who are skilled in helping our clients to plan their tour as per their requirements and purpose of travel. Years of experience and thousands of satisfied customers makes us one of the best tourism service providers in Bali.
          To give the most beautiful memories to our tourist guests by delivering highest level of satisfaction and enjoyment during their stay
          OUR VISION :

          To make your trips unforgettable and to become innovative dan trusted traveling agency in Bali by creating strong and satisfied client network.

          OUR VALUES : 

          - Customer satisfaction is our priority
          - Provide the best services from the booking process until the tour ends
          - We threats Our customers are a family and we along with our skilled team put all our efforts to ensure their satisfaction and happiness.
          - Our hight standard work flow and pleasant work environment for our employees. We appreciate their creativity and provide them with opportunities to grow by obtain an elegant work experience.

          why to choose us?

          WANNA BALI TOUR & TRAVELS AGENCY is a tour and travel operator management company  providing wide range of remarkable tours and travel services in Bali, Indonesia. We are one of the most trusted tour operator company in Bali having a large contribution in Balinese tourism. With our 21 year experiences traveling the world We understand the importance of your dreams and our team of experts gives their best to provide the services beyond your expectations.

          Our services :

          We rivet one's attention on provide the high quality services to our clients and tourist guests to ensure their comfort. 
          The services we provide includes :
          1. Multi-day tours (Including full day & half day tour packages)
          4. Accommodation
          5. Transportation
          2. Special Events including private parties
          3. Adventure and marine activities
          7. Organizing M.I.C.E or corporate meetings
          6. Destination weddings (along with some additional services)
          8. Bali and Beyond packages
          9. Stunning drone video on exotics tourism object

          Our services include :

          - Booking of best hotels, resorts villa’s in Bali
          - Special treats for FIT’s
          - Airport handling (Arrival & departures)
          - Booking of halls & ballrooms with relevant services required for conferences
          - Excursion & tour packages
          - Water sport activities and Under water Diving
          - River rafting,
          - Country side ATV thrilling rides
          - Dinner cruise,
          - Fishing adventures  
          - Special offers for Honeymoon & spa packages
          - Destination wedding and Pra Wedding Photography and Videography services with additional make up artist
          - Stunning Drone videography services

          </span>


          <span class="show-more" onclick="toggleReadMore()">Read More</span>

          </p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="hero-content">
            <h1 class="hero-title wow fade-in-right" data-wow-delay="200ms">
            ABOUT US
            </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-bottom">
    <div class="container" style="padding-bottom: 50px">
      <div class="row">
        <div class="col-lg-7">
          <div class="hero-author-info wow fade-in-left" data-wow-delay="600ms">
            <ul class="author-list">
              <li><img src="{{ asset('front-end') }}/assets/img/images/hero-author-1.png" alt="hero"></li>
              <li><img src="{{ asset('front-end') }}/assets/img/images/hero-author-2.png" alt="hero"></li>
              <li><img src="{{ asset('front-end') }}/assets/img/images/hero-author-3.png" alt="hero"></li>
              <li><img src="{{ asset('front-end') }}/assets/img/images/hero-author-4.png" alt="hero"></li>
            </ul>
            <div class="author-review">
              <h4 class="author">Our Happy Customers</h4>
              <span><i class="fa-solid fa-star"></i>4.9 (1.5k Reviews)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./ hero-section -->

<section class="promo-section padding">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="promo-item wow fade-in-bottom" data-wow-delay="200ms">
          <div class="promo-icon">
            <img src="{{ asset('front-end') }}/assets/img/icon/promo-icon-1.png" alt="img">
          </div>
          <div class="promo-content">
            <h3>Best Service</h3>
            <p>provides tailored tours of Bali’s top and hidden spots with expert guides.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="promo-item wow fade-in-bottom" data-wow-delay="400ms">
          <div class="promo-icon">
            <img src="{{ asset('front-end') }}/assets/img/icon/promo-icon-2.png" alt="img">
          </div>
          <div class="promo-content">
            <h3>A tour agency guarantee</h3>
            <p>A tour agency guarantee ensures customer satisfaction and safety during the trip.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="promo-item wow fade-in-bottom" data-wow-delay="500ms">
          <div class="promo-icon">
            <img src="{{ asset('front-end') }}/assets/img/icon/promo-icon-3.png" alt="img">
          </div>
          <div class="promo-content">
            <h3>A professional guide</h3>
            <p>Our guide provides expert insights and a seamless, enjoyable experience.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./ promo-section -->

<section class="project-section padding">
  <div class="container">
    <div class="project-top wow fade-in-bottom" data-wow-delay="200ms">
      <div class="section-heading">
        <h2 class="section-title">Tour Events for you</h2>
      </div>
      <!-- Carousel Arrows -->
      <div class="swiper-arrow">
        <div class="swiper-nav swiper-next"><i class="fa-regular fa-arrow-left-long"></i></div>
        <div class="swiper-nav swiper-prev"><i class="fa-regular fa-arrow-right-long"></i></div>
      </div>
    </div>
    <div class="project-carousel swiper wow fade-in-bottom" data-wow-delay="400ms">
      <div class="swiper-wrapper swiper-container">
        <div class="swiper-slide">
          <div class="row project-wrapper">
            <div class="col-lg-3">
              <div class="project-wrap wrap-1">
                <div class="project-box">
                  <div class="project-thumb">
                    <a href="event-details.html"><img src="{{ asset('front-end') }}/assets/img/images/treehouse1.jpg"
                                                      alt="project"></a>
                    <h3 class="rating"><i class="fa-solid fa-star"></i>Best</h3>
                    <div class="project-content">
                      <h4><a href="event-details.html" class="project-title">Tree House</a>
                      </h4>
                      <span>Nusa Penida</span>
                    </div>
                  </div>
                </div>
                <div class="project-box">
                  <div class="project-thumb">
                    <a href="event-details.html"><img src="{{ asset('front-end') }}/assets/img/images/kecak.jpeg"
                                                      alt="project"></a>
                    <h3 class="rating"><i class="fa-solid fa-star"></i>Popular</h3>
                    <div class="project-content">
                      <h4><a href="event-details.html" class="project-title">Tari Kecak</a></h4>
                      <span>Uluwatu</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="project-wrap wrap-2">
                <div class="project-box">
                  <div class="project-thumb">
                    <a href="event-details.html"><img src="{{ asset('front-end') }}/assets/img/images/kelingking.jpeg"
                                                      alt="project"></a>
                    <h3 class="rating"><i class="fa-solid fa-star"></i>Popular</h3>
                    <div class="project-content">
                      <h4><a href="event-details.html" class="project-title">Kelingking Beach</a></h4>
                      <span>Nusa Penida</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="project-wrap wrap-3">
                <div class="project-box">
                  <div class="project-thumb">
                    <a href="event-details.html"><img src="{{ asset('front-end') }}/assets/img/images/melasti.png"
                                                      alt="project"></a>
                    <h3 class="rating"><i class="fa-solid fa-star"></i>Best</h3>
                    <div class="project-content">
                      <h4><a href="event-details.html" class="project-title">Melasti</a></h4>
                      <span>Ungasan</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="project-box">
                      <div class="project-thumb">
                        <a href="event-details.html"><img
                            src="{{ asset('front-end') }}/assets/img/images/tanahlot.jpeg" alt="project"></a>
                        <h3 class="rating"><i class="fa-solid fa-star"></i>Popular</h3>
                        <div class="project-content">
                          <h4><a href="event-details.html" class="project-title">Tanah Lot</a>
                          </h4>
                          <span>Beraban,Tabana</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="project-box">
                      <div class="project-thumb">
                        <a href="event-details.html"><img
                            src="{{ asset('front-end') }}/assets/img/images/gwk.jpg" alt="project"></a>
                        <h3 class="rating"><i class="fa-solid fa-star"></i>Popular</h3>
                        <div class="project-content">
                          <h4><a href="event-details.html"
                                 class="project-title">Garuda Wisnu Kencana</a></h4>
                          <span>Uluwatu, Ungasan</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="project-bottom">
      <div class="project-single-carousel swiper">
        <div class="swiper-wrapper swiper-container">
          <div class="swiper-slide">
            <div class="project-wrap wrap-2">
              <div class="project-box">
                <div class="project-thumb-mobile">
                  <a href="event-details.html"><img src="{{ asset('front-end') }}/assets/img/images/treehouse.jpg" alt="hero">
                  </a>
                  <h3 class="rating"><i class="fa-solid fa-star"></i>Best</h3>
                  <div class="project-content">
                    <h4><a href="event-details.html" class="project-title">Tree House</a>
                    </h4>
                    <span>Nusa Penida</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="project-wrap wrap-2">
              <div class="project-box">
                <div class="project-thumb-mobile">
                  <a href="event-details.html"><img src="{{ asset('front-end') }}/assets/img/images/nusapenida1.jpg" alt="hero">
                  </a>
                  <h3 class="rating"><i class="fa-solid fa-star"></i>Best</h3>
                  <div class="project-content">
                    <h4><a href="event-details.html" class="project-title">Pantai Melasti</a>
                    </h4>
                    <span>Nusa Penida</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./project-section -->

<section class="travel-section bg-grey padding">
    <div class="container">
      <div class="travel-top wow fade-in-bottom" data-wow-delay="200ms">
        <div class="section-heading">
          <h2 class="section-title">New Travel Type</h2>
        </div>
        <!-- Carousel Arrows -->
        <div class="swiper-arrow">
            <div class="swiper-nav swiper-next"><i class="fa-regular fa-arrow-left-long"></i></div>
            <div class="swiper-nav swiper-prev"><i class="fa-regular fa-arrow-right-long"></i></div>
          </div>
      </div>
      <div class="travel-carousel-wrap wow fade-in-bottom" data-wow-delay="400ms">
        <div class="travel-carousel swiper">
          <div class="swiper-wrapper swiper-container">
            <div class="swiper-slide">
              <div class="travel-item text-center">
                <div class="travel-thumb">
                  <img src="{{ asset('front-end') }}/assets/img/images/travel-1.jpg" alt="travel">
                </div>
                <div class="travel-content">
                  <h3 class="travel-title"><a href="event-details.html">Full Day Tour</a></h3>
                  <p>Experience an unforgettable Full Day Tour exploring Bali's most iconic and breathtaking destinations.</p>
                  <a href="{{ route('fullday') }}" class="pxs-primary-btn">Detail <i
                      class="fa-regular fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="travel-item text-center">
                <div class="travel-thumb">
                  <img src="{{ asset('front-end') }}/assets/img/images/travel-2.jpg" alt="travel">
                </div>
                <div class="travel-content">
                  <h3 class="travel-title"><a href="event-details.html">Half Day Tour</a></h3>
                  <p>Enjoy a captivating Half Day Tour to discover Bali's highlights and hidden gems.</p>
                  <a href="{{ route('half') }}"  class="pxs-primary-btn">Detail <i
                      class="fa-regular fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="travel-item text-center">
                <div class="travel-thumb">
                  <img src="{{ asset('front-end') }}/assets/img/images/travel-3.jpg" alt="travel">
                </div>
                <div class="travel-content">
                  <h3 class="travel-title"><a href="event-details.html">Activities Tour</a></h3>
                  <p>Participate in thrilling Activities Tours for an adventurous and fun-filled Bali experience.</p>
                  <a href="{{ route('activities') }}"  class="pxs-primary-btn">Detail <i
                      class="fa-regular fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="travel-item text-center">
                <div class="travel-thumb">
                  <img src="{{ asset('front-end') }}/assets/img/images/travel-4.jpg" alt="travel">
                </div>
                <div class="travel-content">
                  <h3 class="travel-title"><a href="event-details.html">Tour Packages</a></h3>
                  <p>Explore our diverse Tour Packages for a comprehensive and unforgettable Bali vacation.</p>
                  <a href="{{ route('pakage') }}"  class="pxs-primary-btn">Detail <i
                      class="fa-regular fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ./ travel-section -->
@endsection
