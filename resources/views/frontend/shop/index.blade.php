@extends('frontend.layouts.master')
@section('title', 'Shop')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="carousel-shop">
        <div class="navbars-shop">
            <h2>SPARE PART</h2>
        </div>
    </div>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<div class="content-shop">
<section class="shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop__sidebar">
                    <div class="shop__sidebar__search">
                        <form action="#">
                            <input type="text" placeholder="Search...">
                            <button type="submit"><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <div class="shop__sidebar__accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseOne" class="menu-heading">Categories</a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__categories">
                                            <ul class="nice-scroll">
                                                <li><a href="#">Gearbox.</a></li>
                                                <li><a href="#">Brakes</a></li>
                                                <li><a href="#">Oil Filters</a></li>
                                                <li><a href="#">Battery</a></li>
                                                <li><a href="#">Spark Plugs</a></li>
                                                <li><a href="#">Fuel Injector.</a></li>
                                                <li><a href="#">Suspension</a></li>
                                                <li><a href="#">Fuel Pumps</a></li>
                                                <li><a href="#">Engine oil</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">Branding</a>
                                </div>
                                <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shop__sidebar__brand">
                                            <ul>
                                                <li><a href="#">Louis Vuitton</a></li>
                                                <li><a href="#">Chanel</a></li>
                                                <li><a href="#">Hermes</a></li>
                                                <li><a href="#">Gucci</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                                <p>Showing 1–12 of 126 results</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                                <p>Sort by Price:</p>
                                <select>
                                    <option value="">Low To High</option>
                                    <option value="">$0 - $55</option>
                                    <option value="">$55 - $100</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">


                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/total-oil.png') }}">
                                <span class="label">Sale</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt=""> <span>Compare</span></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Total MC3 Motor Oil 5L</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5></h5>
                                <div class="product__color__select">
                                    <label for="pc-7">
                                        <input type="radio" id="pc-7">
                                    </label>
                                    <label class="active black" for="pc-8">
                                        <input type="radio" id="pc-8">
                                    </label>
                                    <label class="grey" for="pc-9">
                                        <input type="radio" id="pc-9">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/car_battery.png') }}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt=""> <span>Compare</span></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Car Battery</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5></h5>
                                <div class="product__color__select">
                                    <label for="pc-10">
                                        <input type="radio" id="pc-10">
                                    </label>
                                    <label class="active black" for="pc-11">
                                        <input type="radio" id="pc-11">
                                    </label>
                                    <label class="grey" for="pc-12">
                                        <input type="radio" id="pc-12">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/tire.png') }}" style="background-position:top;">
                                <span class="label">Sale</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt=""> <span>Compare</span></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Car Tire</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5></h5>
                                <div class="product__color__select">
                                    <label for="pc-16">
                                        <input type="radio" id="pc-16">
                                    </label>
                                    <label class="active black" for="pc-17">
                                        <input type="radio" id="pc-17">
                                    </label>
                                    <label class="grey" for="pc-18">
                                        <input type="radio" id="pc-18">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/spark_plug.png') }}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt=""> <span>Compare</span></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Spark Plug</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5></h5>
                                <div class="product__color__select">
                                    <label for="pc-19">
                                        <input type="radio" id="pc-19">
                                    </label>
                                    <label class="active black" for="pc-20">
                                        <input type="radio" id="pc-20">
                                    </label>
                                    <label class="grey" for="pc-21">
                                        <input type="radio" id="pc-21">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/suspension_car.png') }}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt=""> <span>Compare</span></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Car Suspension</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5></h5>
                                <div class="product__color__select">
                                    <label for="pc-22">
                                        <input type="radio" id="pc-22">
                                    </label>
                                    <label class="active black" for="pc-23">
                                        <input type="radio" id="pc-23">
                                    </label>
                                    <label class="grey" for="pc-24">
                                        <input type="radio" id="pc-24">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ asset('frontend/img/product/oil_filter.png') }}">
                                <ul class="product__hover">
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt=""> <span>Compare</span></a>
                                    </li>
                                    <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>Oil Filter</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5></h5>
                                <div class="product__color__select">
                                    <label for="pc-25">
                                        <input type="radio" id="pc-25">
                                    </label>
                                    <label class="active black" for="pc-26">
                                        <input type="radio" id="pc-26">
                                    </label>
                                    <label class="grey" for="pc-27">
                                        <input type="radio" id="pc-27">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.layouts.footer')
</div>
<!-- Shop Section End -->


<!-- Footer Section Begin -->

<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>

@endsection
