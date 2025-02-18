@extends('frontend.layouts.master')
@section('title', 'Service')
@section('service_active','active')
@section('content')

    <!-- Carousel Start -->
    <div>
        <div class="carousel-service">
            <div class="navbars-service">
                <h1>OUR SERVICES</h1>


            </div>
        </div>
        <!-- Carousel End -->

        <div class="content-service">
            <!-- Service Start -->
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


            <!-- About Start -->
            <div class="container-xxl service py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="icon text-uppercase">// Our Services //</h6>
                        <h1 class="mb-5">Explore Our Services</h1>
                    </div>
                    <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="col-lg-4">
                            <div class="nav w-100 nav-pills me-4">
                                <button class=" w-100 d-flex align-items-center text-start  p-4 mb-4 active"
                                    style="border:solid 1px;" data-bs-toggle="pill" data-bs-target="#tab-pane-1"
                                    type="button">

                                    <h4 class="m-0">Diagnostic Test</h4>
                                </button>
                                <button class=" w-100 d-flex align-items-center text-start p-4 mb-4 " style="border:solid 1px;
                                    data-bs-toggle=" pill" data-bs-target="#tab-pane-2" type="button">

                                    <h4 class="m-0">Engine Servicing</h4>
                                </button>
                                <button class=" w-100 d-flex align-items-center text-start p-4 mb-4" style="border:solid 1px;
                                    data-bs-toggle=" pill" data-bs-target="#tab-pane-3" type="button">

                                    <h4 class="m-0">Tires Replacement</h4>
                                </button>
                                <button class=" w-100 d-flex align-items-center text-start p-4 mb-0" style="border:solid 1px;
                                    data-bs-toggle=" pill" data-bs-target="#tab-pane-4" type="button">

                                    <h4 class="m-0">Oil Changing</h4>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content w-100">
                                <div class="tab-pane fade show active" id="tab-pane-1">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-1.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-2">
                                    <div class="row g-4">
                                        <div class="col-md-6 " style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-2.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-3">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-3.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-pane-4">
                                    <div class="row g-4">
                                        <div class="col-md-6" style="min-height: 350px;">
                                            <div class="position-relative h-100">
                                                <img class="position-absolute img-fluid w-100 h-100"
                                                    src="{{ asset('frontend/img/service-4.jpg') }}" style="object-fit: cover;" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                                                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                                lorem sit clita duo justo magna dolore erat amet</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>
                                            <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>
                                            <a href="" class="btn bg-blue py-3 px-5 mt-3">Read More<i
                                                    class="fa fa-arrow-right ms-3"></i></a>
                                        </div>
                                    </div>
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
            <!-- Team End -->
            @include('frontend.layouts.footer')
        </div>
    </div>

@endsection
