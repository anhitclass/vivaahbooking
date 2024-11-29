@extends('layouts.app') 
@section('content')

  <div class="home-header-video">
            <video autoplay muted loop id="backgroundVideo">
                <source src="https://videos.pexels.com/video-files/9206885/9206885-hd_1920_1080_25fps.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
  <!-- services  -->
  <div class="our-services1" id="couple">
    <div class="content">
        <h2 class="text-center" style="font-family: sans-serif;">Our Services</h2>
        
        <div class="card-box-main">
    <div class="card-grid">
        @foreach($services as $service)
            <a href="{{ route('VendorsGet', ['id' => $service->id]) }}" class="service-item" data-id="{{ $service->id }}">
                {{-- Hardcoded image paths --}}

                 @if($loop->iteration == 1)
                    <img src="https://images.pexels.com/photos/29171610/pexels-photo-29171610/free-photo-of-outdoor-wedding-ceremony-at-sunset.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 1" class="service-image">

                @elseif($loop->iteration == 2)
                <img src="https://images.pexels.com/photos/16935894/pexels-photo-16935894/free-photo-of-interior-of-a-restaurant.jpeg" alt="Service 2" class="service-image">

                @elseif($loop->iteration == 3)
                    <img src="https://images.pexels.com/photos/237272/pexels-photo-237272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 3" class="service-image">

                    @elseif($loop->iteration == 4)
                    <img src="https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 4" class="service-image">

                    @elseif($loop->iteration == 5)
                    <img src="https://images.pexels.com/photos/15698719/pexels-photo-15698719/free-photo-of-bride-and-orchestra.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 5" class="service-image">

                    @elseif($loop->iteration == 6)
                    <img src="https://images.pexels.com/photos/24334600/pexels-photo-24334600/free-photo-of-groom-in-white-clothing-standing-on-cart-at-indian-wedding.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 6" class="service-image">

                    @elseif($loop->iteration == 7)
                    <img src="https://images.pexels.com/photos/6550354/pexels-photo-6550354.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Service 7" class="service-image">

                    @elseif($loop->iteration == 8)
                    <img src="https://images.pexels.com/photos/14745476/pexels-photo-14745476.jpeg" alt="Service 8" class="service-image">

                    @elseif($loop->iteration == 9)
                    <img src="https://images.pexels.com/photos/26186199/pexels-photo-26186199/free-photo-of-woman-in-a-traditional-dress.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 9" class="service-image">

                    @elseif($loop->iteration == 10)
                    <img src="https://images.pexels.com/photos/11066743/pexels-photo-11066743.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 10" class="service-image">

                    @elseif($loop->iteration == 11)
                    <img src="https://images.pexels.com/photos/25309039/pexels-photo-25309039/free-photo-of-person-spraying-cosmetic-on-bride-in-traditional-clothing.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 11" class="service-image">

                    @elseif($loop->iteration == 12)
                    <img src="https://images.pexels.com/photos/21568655/pexels-photo-21568655/free-photo-of-henna-tattoos-on-woman-feet.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 12" class="service-image">

                    @elseif($loop->iteration == 13)
                    <img src="https://images.pexels.com/photos/1024969/pexels-photo-1024969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 13" class="service-image">

                    @elseif($loop->iteration == 14)
                    <img src="https://images.pexels.com/photos/2039198/pexels-photo-2039198.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 14" class="service-image">

                    @elseif($loop->iteration == 15)
                    <img src="https://images.pexels.com/photos/2531189/pexels-photo-2531189.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 15" class="service-image">

                    @elseif($loop->iteration == 16)
                    <img src="https://images.pexels.com/photos/27068638/pexels-photo-27068638/free-photo-of-back-view-of-a-flower-girl-at-a-wedding.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 16" class="service-image">

                    @elseif($loop->iteration == 17)
                    <img src="https://images.pexels.com/photos/24334712/pexels-photo-24334712/free-photo-of-bride-in-traditional-clothing-in-wedding.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Service 17" class="service-image">

                @else
                    <img src="{{ asset('images/default.jpg') }}" alt="Default Service" class="service-image">

                @endif 
                <div class="service-name">{{ $service->name }}</div>
            </a>
        @endforeach
    </div>
</div>
</div>
       
        {{-- <div class="card-box-main">
            <div class="card1" onclick="redirectToPage('C:/Users/HP/Downloads/wonderful-wedding_free_1-1-0/wonderful-wedding_free_1-1-0/catering.html')">
                <img class="img-fluid" src="images/catering.jpg" alt="Bride">
                <h3 class="title">Catering</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/photography.html')">
                <img class="img-fluid" src="images/photography.jpg" alt="Bride">
                <h3 class="title">Photography</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/partylawn.html')">
                <img class="img-fluid" src="images/Lawn.jpg" alt="Bride">
                <h3 class="title">Party Lawn</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/decoration.html')">
                <img class="img-fluid" src="images/room-with-flowers.jpg" alt="Bride">
                <h3 class="title">Decoration</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/Jwellers.html')">
                <img class="img-fluid" src="images/jewellery.jpg" alt="Bride">
                <h3 class="title">Jwellers</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/printingpress.html')">
                <img class="img-fluid" src="images/printing.jpg" alt="Bride">
                <h3 class="title">Printing Press</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/wedding-planner.html')">
                <img class="img-fluid" src="images/wedding planner.jpg" alt="Bride">
                <h3 class="title">wedding planner</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/beauty-parlours.html')">
                <img class="img-fluid" src="images/beauty parlours.jpg" alt="Bride">
                <h3 class="title"> Beauty Parlours</h3>
                <div class="social-links">
                  <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="card1" onclick="redirectToPage('service/tours-and-travells.html')">
              <img class="img-fluid" src="images/tours and travells.jpg" alt="Bride">
              <h3 class="title"> Tours and Travells</h3>
              <div class="social-links">
                <a class="btn btn-link" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                <a class="btn btn-link" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                <a class="btn btn-link" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                <a class="btn btn-link" href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
              </div>
          </div>
        </div> --}}
    </div>
    <center><button class="btn btn-primary" type="submit" style="margin: 30px;"><a href="Service.html" style="text-decoration: none; color:white;">Show More</a></button></center>
</div>







      <!-- <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style> -->

 

<!-- <div class="ww-nav-bar sticky-top bg-light">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <h1 class="h2"><a class="pl-4 navbar-brand" href="#">Vivaah Booking</a></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ww-navbarNav" aria-controls="ww-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse text-uppercase" id="ww-navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link smooth-scroll" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="Service.html">Services</a></li>
          
          <li class="nav-item"><a class="nav-link smooth-scroll" href="#gallery">Gallery</a></li>
          <li class="nav-item"><a class="nav-link smooth-scroll" href="Contact.html">Contact us</a></li>
        </ul>
        <div class="nav-buttons">
          <button class="login-btn" style="width: 100%;"><a class="" href="./Login Form (1)/Login Form/form.html" style="padding-left: 100%;"><i class="fas fa-user-plus" style="color: #f27b2c;"></i></a></button>
      </div>
      
      </div>
    </div>
  </nav>
</div> -->
<!-- 
Slider Section
-->
<!-- <section>
 
</section> -->
<!-- 
Service Section
-->
<!-- <section>
 
</section> -->
<!-- <div class="ww-section bg-light" id="events">
  <div class="container ww-wedding-event">
    <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="font-family:sans-serif;">Wedding Events</h2>
    <div class="row">
      <div class="col-md-7 col-sm-12">
        <div class="my-3">
          <div class="h4">Wedding Party</div>
          <ul>
            <li><i class="text-muted fas fa-map-marker-alt"></i><span class="pl-2 text-muted">Church End, Hendon, London, UK</span></li>
            <li class="pt-2"><i class="text-muted far fa-calendar-alt"></i><span class="pl-2 text-muted">20 Dec 2018, 9AM - 6PM</span></li>
          </ul>
          <p>A wedding party is a celebration held after a wedding ceremony, where family and friends gather to honor the newly married couple. It typically includes food, drinks, music, dancing, and speeches, creating a joyous atmosphere to mark the beginning of the couple's married life.</p>
        </div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="my-3"><img class="img-fluid" src="images/wedding-party.jpg" alt="Wedding Party" data-aos="fade-down-right" data-aos-duration="1000"/></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-7 col-sm-12">
        <div class="my-3">
          <div class="h4">Reception</div>
          <ul>
            <li><i class="text-muted fas fa-map-marker-alt "></i><span class="pl-2 text-muted">City Place, Hendon, London, UK</span></li>
            <li class="pt-2"><i class="text-muted far fa-calendar-alt "></i><span class="pl-2 text-muted">22 Dec 2018, 11AM - 6PM</span></li>
          </ul>
          <p>A reception party is a celebratory event typically held after a wedding ceremony, where guests gather to congratulate the newlyweds. It often features food, drinks, music, and dancing, providing an opportunity for the couple to celebrate with family and friends.</p>
        </div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="my-3"><img class="img-fluid" src="images/reception.jpg" alt="Reception" data-aos="fade-up-right" data-aos-duration="1000"/></div>
      </div>
    </div>
  </div>
</div> -->
<div class="ww-section bg-light" id="gallery">
  <div class="ww-photo-gallery">
    <div class="container">
      <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000" style="font-family: sans-serif;">Photo Gallery</h2>
      <div class="col-md-12 text-center ww-category-filter mb-4"><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="all">All</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="vacation">Our Vacation</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="party">Party</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="ceremony">Ceremony</a><a class="btn btn-outline-primary ww-filter-button" href="#" data-filter="wedding">Wedding</a></div>
      <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">

        <div class="card-columns">
          <div class="card" data-groups="[&quot;vacation&quot;,&quot;ceremony&quot;]"><a href="images/gallery-pic-1.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-1.jpg" alt="Gallery Pic 1"/></a></div>
          <div class="card" data-groups="[&quot;party&quot;,&quot;wedding&quot;]"><a href="images/gallery-pic-2.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-2.jpg" alt="Gallery Pic 2"/></a></div>
          <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/gallery-pic-3.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-3.jpg" alt="Gallery Pic 3"/></a></div>
          <div class="card" data-groups="[&quot;party&quot;,&quot;vacation&quot;]"><a href="images/gallery-pic-4.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-4.jpg" alt="Gallery Pic 4"/></a></div>
          <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/gallery-pic-5.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-5.jpg" alt="Gallery Pic 5"/></a></div>
          <div class="card" data-groups="[&quot;wedding&quot;,&quot;ceremony&quot;,&quot;party&quot;]"><a href="images/gallery-pic-6.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-6.jpg" alt="Gallery Pic 6"/></a></div>
          <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/gallery-pic-7.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-7.jpg" alt="Gallery Pic 7"/></a></div>
          <div class="card" data-groups="[&quot;wedding&quot;,&quot;party&quot;]"><a href="images/gallery-pic-8.jpg" data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid" src="images/gallery-pic-8.jpg" alt="Gallery Pic 8"/></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ww-section ww-rsvp-detail text-white" id="rsvp">
  <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="col text-center">
      <h2 class="h1 ww-title pb-3" data-aos="zoom-in-down" data-aos-duration="1000" style="color: white; font-family: sans-serif;">Join Our Party</h2>
    </div>
    <div class="row ww-rsvp-form">
      <div class="col-md-10">
        <div class="card-body">
          <form action="https://formspree.io/example@email.com" method="POST">
            <div class="row">
              <div class="col md-6 pb-3">
                <div class="form-group">
                  <label for="name-input">Your Name*</label>
                  <input class="form-control" id="name-input" type="text" name="name" required="required"/>
                </div>
              </div>
              <div class="col-md-6 pb-3">
                <div class="form-group">
                  <label for="email-input">Your Email*</label>
                  <input class="form-control" id="email-input" type="email" name="_replyto" required="required"/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col md-6 pb-3">
                <div class="form-group">
                  <label for="guest-input">Number of Guests</label>
                  <select class="form-control" id="guest-input" name="guest">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 pb-3"> 
                <div class="form-group">
                  <label for="events-input">I am Attending</label>
                  <select class="form-control" id="events-input" name="events">
                    <option value="all-event">All Events</option>
                    <option value="wedding-ceremony">Wedding ceremony</option>
                    <option value="reception-party">Reception Party</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                  <label for="message-input">Your Message</label>
                  <textarea class="form-control" id="message-input" name="message" rows="4"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col text-center">
                <button class="btn btn-primary btn-submit" type="submit">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ww-footer">

  <div class="pg-footer">
    <footer class="footer">
      <!-- <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
        <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
      </svg> -->
      <div class="footer-content">
        <div class="footer-content-column">
          <div class="footer-logo">
            <a class="footer-logo-link" href="#">
              <span class="hidden-link-text">Vivaah Booking</span>
              <img src="{{ asset('images/vivaah_booking_logo.png') }}" alt="logo" style="width:150px;">

              <!-- <h1>Vivaah Booking</h1> -->
            </a>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Get Started</h2>
            <ul id="menu-get-started" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="#">Start</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="#">Documentation</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="#">Installation</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Company</h2>
            <ul id="menu-company" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Contact</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                <a href="#">News</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Careers</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Legal</h2>
            <ul id="menu-legal" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                <a href="#">Privacy Notice</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Quick Links</h2>
            <ul id="menu-quick-links" class="footer-menu-list">
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" rel="noopener noreferrer" href="#">Support Center</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" rel="noopener noreferrer" href="#">Service Status</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Security</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Blog</a>
              </li>
              <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                <a href="#">Customers</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Reviews</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title"> Let's Chat</h2>
            <p class="footer-call-to-action-description"> Have a support question?</p>
            <a class="footer-call-to-action-button button" href="#" target="_self"> Get in Touch </a>
          </div>
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title"> You Call Us</h2>
            <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" href="tel:0124-64XXXX" target="_self"> 0124-64XXXX </a></p>
          </div>
        </div>
        <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
            <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
          </svg>
          <a class="footer-social-link twitter" href="#" target="_blank">
            <span class="hidden-link-text">Twitter</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
            </svg>
          </a>
          <a class="footer-social-link instagram" href="#" target="_blank">
            <span class="hidden-link-text">Facebook</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/>
            </svg>
          </a>
          <a class="footer-social-link github" href="#" target="_blank">
            <span class="hidden-link-text">Instagram</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
            </svg>
          </a>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-wrapper">
          <p class="footer-copyright-text">
            <a class="footer-copyright-link" href="" target="_self"> ©2024 </a>
          </p>
        </div>
      </div>
    </footer>
  </div>
  @endsection