@extends('layouts')
@section('content')
<style>
  .gallery {
        margin-top: 20px;
    }
    .gallery img {
        width: 100%;
        height: 300px; /* Anda dapat mengatur tinggi sesuai kebutuhan */
        object-fit: cover;
        margin-bottom: 25px; /* Tambahkan margin bawah untuk jarak antar gambar */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0,0,0,0.3);
    }
</style>
<section class="blog-page-header bg-grey">
  <div class="container">
    <div class="header-content text-center">
      <h1 class="blog-page-title">Our<span>Gallery</span></h1>
      <p>
        Join a captivating full-day tour and discover Bali's beauty from every angle. From iconic landmarks to deep cultural experiences, enjoy a comprehensive journey designed to provide unforgettable moments.</p>
    </div>
  </div>
</section>
<!-- ./ blog-page-header -->
<section>
    <div class="container gallery">
        <div class="row">
            @for ($i = 0;$i<=7; $i++)
                <!-- Event Item {{$i}} -->
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="{{ asset('front-end') }}/assets/img/images/tanahlot.jpeg" alt="project">
                </div>
                <!-- end Event Item {{$i}} -->
            @endfor
        </div>
    </div>
</section>
@endsection
