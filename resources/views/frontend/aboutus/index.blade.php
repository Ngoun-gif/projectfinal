@extends('frontend.layouts.master')
@section('title', 'Home')

@section('content')

<div>
    <div class="carousel-about">
        <div class="navbars-about">
            <h1>ABOUT US</h1>


        </div>
    </div>
    <!-- Carousel End -->

    <div class="content-about">
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
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 pt-4" style="min-height: 400px;">
                        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                            <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('frontend/img/about.jpg') }}"
                                style="object-fit: cover;" alt="">
                            <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                                style="background: rgba(0, 0, 0, .08);">
                                <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                                <h4 class="text-white">Experience</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="icon text-uppercase">// About Us //</h6>
                        <h1 class="mb-4"><span class="icon">CarServ</span> Is The Best Place For Your Auto
                            Care</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet</p>
                        <div class="row g-4 mb-3 pb-3">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">01</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Professional & Expert</h6>
                                        <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">02</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Quality Servicing Center</h6>
                                        <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                <div class="d-flex">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                        style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">03</span>
                                    </div>
                                    <div class="ps-3">
                                        <h6>Awards Winning Workers</h6>
                                        <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn py-3 px-5 bg-blue">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Fact Start -->
        <div class="container-fluid fact bg-dark my-5 py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-check fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Years Experience</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Expert Technicians</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Satisfied Clients</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-car fa-2x text-white mb-3"></i>
                        <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                        <p class="text-white mb-0">Compleate Projects</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact End -->





        <!-- Team Start -->
        <div class="main-team">
            <div class="team">
                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="icon text-uppercase">// Our Technicians //</h6>
                            <h1 class="mb-5">Our Expert Technicians</h1>
                        </div>
                        <div class="row g-4">
                            <div class=" col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item">
                                    <div class="card-team1 position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('frontend/img/p1.jpg') }}" alt="">

                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <h5 class="fw-bold mb-0">Nop Visal</h5>
                                        <small>Frontend</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="team-item">
                                    <div class="card-team2 position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('frontend/img/p2.JPEG') }}" alt="">

                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <h5 class="fw-bold mb-0">Sour Bandith</h5>
                                        <small>Team Leader</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="team-item">
                                    <div class="card-team3 position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('frontend/img/p3.jpg') }}" alt="">

                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <h5 class="fw-bold mb-0">Ith Sokny</h5>
                                        <small>Frontend</small>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item">
                                    <div class="card-team5 position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('frontend/img/p5.jpg') }}" alt="">

                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <h5 class="fw-bold mb-0">Khim Hengngoun</h5>
                                        <small>Project Leader</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item">
                                    <div class="card-team4 position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('frontend/img/p4.jpg') }}" alt="">

                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <h5 class="fw-bold mb-0">Mengchheang</h5>
                                        <small>Backend</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item">
                                    <div class="card-team6 position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('frontend/img/p6.jpg') }}" alt="">

                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <h5 class="fw-bold mb-0">The Legend VENGLYCHHEANG</h5>
                                        <small>Backend</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="icon text-uppercase">// Contact Us //</h6>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <div class="bg-light d-flex flex-column justify-content-center p-4">
                                    <h5 class="text-uppercase">// Booking //</h5>
                                    <p class="m-0"><i class="fa fa-envelope-open icon me-2"></i>nopvisal57@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-light d-flex flex-column justify-content-center p-4">
                                    <h5 class="text-uppercase">// General //</h5>
                                    <p class="m-0"><i class="fa fa-envelope-open icon me-2"></i>Sourbandith@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bg-light d-flex flex-column justify-content-center p-4">
                                    <h5 class="text-uppercase">// Technical //</h5>
                                    <p class="m-0"><i class="fa fa-envelope-open icon me-2"></i>tech@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <p class="mb-4 ">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form" class="icon">Download Now</a>.</p>
                            <form>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn bg-blue w-100 py-3" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.layouts.footer')
    </div>
</div>

@endsection
