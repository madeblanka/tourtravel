@extends('layouts')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
     .location {
        display: flex;
        align-items: center;
        font-size: 16px;
        color: gray;
    }
    .location i {
        margin-right: 5px;
        color: gray;
    },
    .responsive-img {
        width: 100%;
        height: auto; /* This will make the image responsive */
    }

    @media (min-width: 992px) { /* For large devices like desktops */
        .responsive-img {
            height: 450px; /* Set the height to 500px */
            object-fit: cover; /* Ensures the image covers the specified height while maintaining aspect ratio */
        }
    }

    ul {
        list-style: none;
        padding: 0;
    }
    ul li {
        display: flex;
        align-items: center;
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
    }
    ul li:last-child {
        border-bottom: none;
    }
    ul li svg {
        width: 24px;
        height: 24px;
        margin-right: 10px;
        fill: #006400;
        flex-shrink: 0;
    }
    @media (max-width: 600px) {
        ul li svg {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        ul li {
            padding: 5px 0;
        }
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        font-size: 16px; /* Ukuran font 16 */
        font-weight: 600
    }
    th {
        background-color: #f2f2f2;
    }

</style>
<section class="blog-details padding bg-dark-deep">
    <div class="container">
        <div class="row blog-details-wrap">
            <div class="col-lg-8">
                <div class="blog-wrapper">
                    <div class="pxs-blog">
                        <div class="blog-details-thumb w-img">
                            <img src="{{ asset('front-end') }}/assets/img/images/kecak.jpeg" alt="detail package" class="responsive-img">
                        </div>
                        <h2 class="pxs-blog-title">Full Day Uluwatu Tour</h2>
                        <div class="location mb-4">
                            <a href="">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Uluwatu, Bali</span>
                            </a>
                        </div>
                        <div class="d-flex col gap-2 mb-4">
                            <button href="https://wa.me/1234567890" target="_blank" type="button" class="btn btn-success"><i class="fa-brands fa-whatsapp"></i> Success</button>
                            <button href="https://wa.me/1234567890" target="_blank" type="button" class="btn btn-secondary"><i class="fa-regular fa-phone"></i> Phone</button>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet tristique
                            neque, in suscipit sem. Fusce ut tellus neque. Suspendisse rhoncus purus porta neque
                            ultricies pretium. In iaculis a turpis quis ultrices. Sed consequat, justo et
                            gravida sollicitudin, tellus ipsum semper nulla, id pharetra velit dolor et purus.
                            Mauris tincidunt, quam at consectetur dapibus, urna nunc consequat purus, vitae
                            sodales nisl elit quis nisl. Orci varius natoque penatibus et magnis dis parturient
                            montes, nascetur ridiculus mus. Aenean at nisl ut urna suscipit tempus. Etiam
                            fermentum sagittis commodo.
                        </p>
                        <h4>Include :</h4>
                        <ul>
                            <li style="font-size: 16px; font-weight: 405">Private car with english speaking driver who can help you to take a picture at tourism object</li>
                            <li style="font-size: 16px; font-weight: 405">Mineral water (1 bottle/person/day)</li>
                            <li style="font-size: 16px; font-weight: 405">Parking fee at airport and all tourism object</li>
                        </ul>
                        <br>
                        <h4>Note :</h4>
                        <ul>
                            <li style="font-size: 16px; font-weight: 405">We will received down payment minimum 10% for guarantee at least 1 day before you arrive at Bali. The rest payment will settle upon you arrive and collect by our driver.</li>
                            <li style="font-size: 16px; font-weight: 405">Lunch and Dinner are optional you can choose and pay directly at the restaurant on the day you tour. (Except Nusa Penida Tour).</li>
                            <li style="font-size: 16px; font-weight: 405">The tour package are not the final confirmation. It still can change any time depend on what you need, as long as the time and budget are sufficient.</li>
                            <li style="font-size: 16px; font-weight: 405">Price not include personal expenses activities, entrance ticket, and tip to the drivert</li>
                        </ul>
                    </div>
                </div>
                <!-- ./ blog-wrapper -->
            </div>
            <div class="col-lg-4">
                <div class="sidebar-wrapper">
                    <div class="cancel-wrap">
                        <div class="cancel-item">
                          <h3 class="cancel-title">Itinerary</h3>
                          <ul>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.25 2.4 6.45 6.53 11.54L12 22l.47-.46C16.6 15.45 19 12.25 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                                Pick up at Hotel at 09:00
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.25 2.4 6.45 6.53 11.54L12 22l.47-.46C16.6 15.45 19 12.25 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                                Tanjung Benoa Water Sports
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.25 2.4 6.45 6.53 11.54L12 22l.47-.46C16.6 15.45 19 12.25 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                                Take a lunch (optional)
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.25 2.4 6.45 6.53 11.54L12 22l.47-.46C16.6 15.45 19 12.25 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                                GWK (Garuda Wisnu Kencana Statue)
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.25 2.4 6.45 6.53 11.54L12 22l.47-.46C16.6 15.45 19 12.25 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                                Uluwatu Temple & Kecak Fire Dance at Uluwatu
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.25 2.4 6.45 6.53 11.54L12 22l.47-.46C16.6 15.45 19 12.25 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                                Dinner (optional)
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 3.25 2.4 6.45 6.53 11.54L12 22l.47-.46C16.6 15.45 19 12.25 19 9c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                                Back to Hotel
                            </li>
                        </ul>
                        </div>
                        <div class="cancel-item">
                          <h3 class="list-title">Tour Prices</h3>
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Description</th>
                                <th scope="col">Price / Pax</th>
                              </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0;$i<=5; $i++)
                                <!-- Event Item {{$i}} -->
                                    <tr>
                                        <td>1 Pax</td>
                                        <td>USD 42</td>
                                    </tr>
                                 <!-- end Event Item {{$i}} -->
                                @endfor
                            </tbody>
                          </table>
                        </div>
                      </div>

                </div>
            </div>
            <!--Sidebar-->
        </div>

    </div>
</section>
@endsection
