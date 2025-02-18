@extends('frontend.layouts.master')
@section('title', 'Booking')

@section('content')

<div>
    <div class="carousel-about">
        <div class="navbars-about">
            <h1>BOOK OUR SERVICES</h1>


        </div>
    </div>

    <div class="content-about">

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-flex py-5 px-4">
                            <i class="icon fa fa-certificate fa-3x flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Quality Servicing</h5>
                                <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                                <a class="text-secondary border-bottom" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex bg-light py-5 px-4">
                            <i class="icon fa fa-users-cog fa-3x flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Expert Workers</h5>
                                <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                                <a class="text-secondary border-bottom" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex py-5 px-4">
                            <i class="icon fa fa-tools fa-3x flex-shrink-0"></i>
                            <div class="ps-4">
                                <h5 class="mb-3">Modern Equipment</h5>
                                <p>Diam dolor diam ipsum sit amet diam et eos erat ipsum</p>
                                <a class="text-secondary border-bottom" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        <!-- Booking Start -->
        <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-6 py-5">
                        <div class="py-5">
                            <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                            <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing
                                kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea
                                invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo
                                invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata
                                takimata sanctus sed.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-blue h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                            data-wow-delay="0.6s">
                            <h1 class="text-white mb-4">Book For A Service</h1>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control border-0" placeholder="Your Name"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control border-0" placeholder="Your Email"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <select class="form-select border-0" style="height: 55px;">
                                            <option selected>Select A Service</option>
                                            <option value="1">Service 1</option>
                                            <option value="2">Service 2</option>
                                            <option value="3">Service 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="date" id="date1" data-target-input="nearest">
                                            <input type="text" class="form-control border-0 datetimepicker-input"
                                                placeholder="Service Date" data-target="#date1"
                                                data-toggle="datetimepicker" style="height: 55px;">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-0"
                                            placeholder="Special Request"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->

        <!-- Call To Action Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8 col-md-6">
                        <h6 class="icon text-uppercase">// Call To Action //</h6>
                        <h1 class="mb-4">Have Any Pre Booking Question?</h1>
                        <p class="mb-0">Lorem diam ea sit dolor labore. Clita et dolor erat sed est lorem sed et sit. Diam sed duo magna erat et stet clita ea magna ea sed, sit labore magna lorem tempor justo rebum dolores. Eos dolor sea erat amet et, lorem labore lorem at dolores. Stet ea ut justo et, clita et et ipsum diam.</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="bg-blue d-flex flex-column justify-content-center text-center h-100 p-4">
                            <h3 class="text-white mb-4"><i class="fa fa-phone-alt me-3"></i>+099 941 633</h3>
                            <a href="https://t.me/nopvisaltec" class="btn btn-secondary py-3 px-5">Contact Us<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.layouts.footer')
    </div>
</div>

@endsection
