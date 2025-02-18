@extends('frontend.layouts.master')
@section('title', 'Technicians')

@section('content')

<div>
    <div class="carousel-about">
        <div class="navbars-about">
            <h1>OUR EXPERTS TECNICIANS</h1>
            

        </div>
    </div>
    <!-- Carousel End -->
    
    <div class="content-about">

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

        @include('frontend.layouts.footer')
    </div>
</div>
@endsection