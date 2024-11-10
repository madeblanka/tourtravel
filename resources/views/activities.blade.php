@extends('layouts')
@section('content')


<section class="blog-page-header bg-grey">
  <div class="container">
    <div class="header-content text-center">
      <h1 class="blog-page-title">Activities</h1>
      <p>
        Enjoy a concise yet enriching exploration of key attractions with our Half Day Tour. Ideal for those with limited time, this tour offers a glimpse into the highlights and unique experiences of the destination within a few hours. Perfect for a quick escape or a complementary activity to your main itinerary.    </div>
  </div>
</section>
<!-- ./ blog-page-header -->

<section class="event-section bg-grey padding">
    <div class="container">
      <div class="event-top wow fade-in-bottom" data-wow-delay="200ms">
        <div class="section-heading">
          <h2 class="section-title">Tour Events for you</h2>
        </div>
      </div>
      <div class="container">
        <div class="row d-flex justify-content-center">
            @for ($i = 0;$i<=5; $i++)
                <!-- Event Item {{$i}} -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-item">
                        <div class="event-thumb">
                            <div class="event-img">
                                <img src="{{ asset('front-end/assets/img/images/event-1.jpg') }}" alt="event" class="img-fluid">
                            </div>
                            <div class="event-text feature"><span>Activities</span></div>
                        </div>
                        <div class="event-content-wrap">
                            <div class="event-content d-flex justify-content-between">
                                <div class="event-content-left">
                                    <h3 class="event-title"><a href="event-details.html">Kerala River View Tour</a></h3>
                                    <h4 class="activity">
                                        <span>12 Places</span><span>3 Activities</span>
                                    </h4>
                                </div>
                                <div class="event-content-right">
                                    <i class="fa-regular fa-bookmark"></i>
                                </div>
                            </div>
                            <ul class="event-list">
                                <li>
                                    <i class="fa-regular fa-clock"></i>
                                    <span>3 Days 4 Nights</span>
                                </li>
                                <li>
                                    <i class="fa-regular fa-circle-user"></i>
                                    <span>Capacity 20</span>
                                </li>
                            </ul>
                            <div class="event-price-wrap">
                                <h4 class="price">$895.50</h4>
                                <a href="booking-customer-information.html" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Event Item {{$i}} -->
            @endfor
        </div>
    </div>

    </div>
  </section>
  <!-- ./ event-section -->

  @endsection
