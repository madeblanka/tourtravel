@extends('layouts')
@section('content')

<section class="blog-page-header bg-grey">
  <div class="container">
    <div class="header-content text-center">
      <h1 class="blog-page-title">Contact<span>Us</span></h1>
      <p>
        Thank you for your interest in reaching out to us. We are delighted to hear from you and are ready to assist with any questions, provide additional information, or listen to your feedback. Here are several ways to get in touch with us:    </div>
  </div>
</section>
<!-- ./ blog-page-header -->
<section class="contact-section padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="contact-content">
                    <h3 class="contact-title">
                        Have a Question in <br />
                        mind? Reach Us now!
                    </h3>
                    <p>We're a focused on establishing long-term <br />relationships with patients.</p>
                    <ul class="contact-list">
                        <li>
                            <img src="{{ asset('front-end') }}/assets/img/icon/contact-location.png" alt="contact" />
                            <span>4517 Washington Ave. Manchester, <br />
                                Kentucky 39495
                            </span>
                        </li>
                        <li>
                            <img src="{{ asset('front-end') }}/assets/img/icon/contact-phone.png" alt="contact" />
                            <a href="tel:2395550108">(239) 555-0108 </a>
                        </li>
                        <li>
                            <img src="{{ asset('front-end') }}/assets/img/icon/contact-envelope.png" alt="contact" />
                            <a href="mailto:contact@lepus.com">contact@lepus.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form">
                    <div class="pxs-contact-form">
                        <form action="https://traveli.pakxaros.com/contact.php" method="post" id="ajax_contact" class="form-horizontal">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" id="firstname" name="firstname" class="form-control"
                                        placeholder="Full Name" required />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" id="lastname" name="lastname" class="form-control"
                                        placeholder="Last Name"/>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Email" required />
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Phone" required />
                                </div>
                                <div class="form-group col-12">
                                    <textarea id="message" name="message" cols="30" rows="5"
                                        class="form-control address" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="action" value="mailchimpsubscribe" />
                            <div class="form-item">
                                <button class="pxs-primary-btn submit" type="submit">Submit</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ./ contact-section -->
@endsection
