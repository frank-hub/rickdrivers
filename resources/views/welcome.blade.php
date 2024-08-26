@extends('layouts.frame')
@section('body')

        <!--hero section start-->
        <section class="cycle-hero position-relative z-2 overflow-hidden">
            <span class="bc-background position-absolute hero-color-shape"></span>
            <span class="position-absolute z-1 hero-dark-shape" data-background="assets/img/shapes/texture-bg.png"><span>Rick<br>Cars</span></span>
            <div class="container position-relative">
                <div class="cycle-hero-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cycle-hero-single">
                            <div class="row align-items-center g-5 g-lg-4">
                                <div class="col-xxl-5 col-xl-6 col-lg-7">
                                    <div class="cycle-hero-left">
                                        <h1 class="display-4 mb-4">Elite Chauffeur Experience From Rick Drivers </h1>
                                        <p class="mb-4">Experience personalized service with our professional chauffeurs, dedicated to ensuring a seamless and enjoyable ride.</p>

                                        <div class="d-flex align-items-center gap-5">
                                            <a href="{{route('chauffeur_index')}}" class="btn btn-secondary"><span class="me-2"><i class="fa-solid fa-bag-shopping"></i></span>View More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="cycle-hero-right">
                                        <img src="{{asset('assets/img/drivers/driver.PNG')}}" alt="cycle" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cycle-hero-single">
                            <div class="row align-items-center g-5 g-lg-4">
                                <div class="col-xxl-5 col-xl-6 col-lg-7">
                                    <div class="cycle-hero-left">
                                        <h1 class="display-4 mb-4">Luxury and Comfort Abound</h1>
                                        <p class="mb-4">Indulge in opulence with our luxurious selection, ensuring unparalleled comfort on every journey.</p>

                                        <div class="d-flex align-items-center gap-5">
                                            <a href="{{route('rental_index')}}" class="btn btn-secondary"><span class="me-2"><i class="fa-solid fa-bag-shopping"></i></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="cycle-hero-right">
                                        <img src="assets/img/cars/car3.png" alt="cycle" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cycle-hero-single">
                            <div class="row align-items-center g-5 g-lg-4">
                                <div class="col-xxl-5 col-xl-6 col-lg-7">
                                    <div class="cycle-hero-left">
                                        <h1 class="display-4 mb-4">Family-Friendly and Spacious</h1>
                                        <p class="mb-4">Catering to families, our spacious cars provide comfort and safety for memorable adventures together.</p>

                                        <div class="d-flex align-items-center gap-5">
                                            <a href="{{route('rental_index')}}" class="btn btn-secondary"><span class="me-2"><i class="fa-solid fa-bag-shopping"></i></span>View Details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="cycle-hero-right">
                                        <img src="assets/img/cars/car1.png" alt="cycle" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide cycle-hero-single">
                            <div class="row align-items-center g-5 g-lg-4">
                                <div class="col-xxl-5 col-xl-6 col-lg-7">
                                    <div class="cycle-hero-left">
                                        <h1 class="display-4 mb-4">Ready for Any Terrain Rent From Rick Drivers</h1>
                                        <p class="mb-4">From rugged SUVs to versatile off-road vehicles, our fleet is equipped to conquer any terrain with confidence.</p>
                                        <div class="d-flex align-items-center gap-5">
                                            <a href="{{route('rental_index')}}" class="btn btn-secondary"><span class="me-2"><i class="fa-solid fa-bag-shopping"></i></span>Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-5">
                                    <div class="cycle-hero-right">
                                        <img src="assets/img/cars/car4.png" alt="cycle" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="px-5 position-relative cl-hero-control-slider-wrapper">
                    <div class="cl-hero-slider-control swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide cl-hero-slider-control-thumb">
                                <img src="assets/img/drivers/driver.png"  style="height: 90px;" alt="cycle" class="img-fluid">
                            </div>
                            <div class="swiper-slide cl-hero-slider-control-thumb">
                                <img src="assets/img/cars/car3.png" style="height: 90px;" alt="cycle" class="img-fluid">
                            </div>
                            <div class="swiper-slide cl-hero-slider-control-thumb">
                                <img src="assets/img/cars/car1.png" style="height: 90px;" alt="cycle" class="img-fluid">
                            </div>
                            <div class="swiper-slide cl-hero-slider-control-thumb">
                                <img src="assets/img/cars/car4.png" style="height: 90px;" alt="cycle" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="cl-hero-slides-control-prev cl-hero-slide-control-arrow"><i class="fas fa-angle-left"></i></div>
                    <div class="cl-hero-slides-control-next cl-hero-slide-control-arrow"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
            <div class="cycle-hero-pagination"></div>
        </section>
        <!--hero section end-->

        <!--cycle categories start-->
        <section class="cycle-categories pb-120 bc-background">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-xl-6">
                        <div class="cycle-banner banner-overlay position-relative z-1 overflow-hidden rounded" data-background="assets/img/shapes/texture-bg.png">
                            <span class="circle-shape"></span>
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <div class="banner-content py-3">
                                        <h3 class="mb-3 text-white">Best SUVs for Hire in Kenya</h3>
                                        <ul class="banner-list">
                                            <li class="fs-sm text-white"><span class="dot me-2"></span>Good condition</li>
                                            <li class="fs-sm text-white"><span class="dot me-2"></span>Wide variety</li>
                                        </ul>
                                        <a href="{{route('rental_index')}}" class="btn btn-primary btn-md mt-5">Hire Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner-img text-end">
                                        <img src="assets/img/cars/car4.png" height="306" alt="cycle">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cycle-banner rounded overflow-hidden bg-white ps-32">
                            <div class="row align-items-center g-0">
                                <div class="col-sm-6">
                                    <div class="banner-content py-3">
                                        <h3 class="mb-3">Find Your Driver</h3>
                                        <p class="mb-30">.Hire a favorite chauffeur in minutes</p>
                                        <a href="{{route('chauffeur_index')}}" class="btn btn-primary btn-md">Hire Now<span class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="banner-img text-end">
                                        <img src="assets/img/cars/keys.png" style="margin-left: -150px" height="306px" alt="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 pt-50">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-start">
                            <h2 class="mb-3">Popular Car Drivers</h2>
                            <p class="mb-0">Get a driver to take you anywhere from Rick Drivers</p>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end d-none d-lg-block">
                        <div class="text-lg-end">
                            <a href="{{route('chauffeur_index')}}" class="btn btn-secondary">All Drivers<span class="ms-2"><i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center mt-2">
                    @foreach ($chauffeurs as $chauffeur)
                    <div class="col-xl-3 col-lg-6">
                        <div class="cycle-category-box text-center position-relative overflow-hidden rounded bg-white" >
                            <img src="{{'passport/'.$chauffeur->passport}}" style="float: right;
                            width:  360px;
                            height: 213px;
                            object-fit: cover;
                            object-position: 100% 0;" alt="cycle" class="">
                            <a href="{{route('chauffeur_details',$chauffeur->id)}}" class="box-title">
                                <h4 class="my-3">{{$chauffeur->name}}</h4>
                            </a>
                            <span class="meta-text">{{$chauffeur->price}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!--cycle categories end-->

        <!--brands section start-->
        {{-- <section class="cycle-brands pt-60 bc-background">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h3 class="mb-5">Meet Our Trusted Bicycle Partners</h3>
                        </div>
                    </div>
                </div>
                <div class="cycle-brands-list d-flex align-items-center justify-content-center gap-4 flex-wrap">
                    <div class="cycle-brand-item p-4 rounded text-center position-relative">
                        <img src="assets/img/cycle/brands/nissan-gray.png" alt="nissan" class="img-fluid brand-gray">
                        <img src="assets/img/cycle/brands/nissan-white.png" alt="nissan" class="img-fluid brand-white">
                    </div>
                    <div class="cycle-brand-item p-4 rounded text-center position-relative">
                        <img src="assets/img/cycle/brands/acura-gray.png" alt="acura" class="img-fluid brand-gray">
                        <img src="assets/img/cycle/brands/acura-white.png" alt="acura" class="img-fluid brand-white">
                    </div>
                    <div class="cycle-brand-item p-4 rounded text-center position-relative">
                        <img src="assets/img/cycle/brands/ferrari-gray.png" alt="nissan" class="img-fluid brand-gray">
                        <img src="assets/img/cycle/brands/ferrari-white.png" alt="nissan" class="img-fluid brand-white">
                    </div>
                    <div class="cycle-brand-item p-4 rounded text-center position-relative">
                        <img src="assets/img/cycle/brands/hyundai-gray.png" alt="nissan" class="img-fluid brand-gray">
                        <img src="assets/img/cycle/brands/hyundai-white.png" alt="nissan" class="img-fluid brand-white">
                    </div>
                    <div class="cycle-brand-item p-4 rounded text-center position-relative">
                        <img src="assets/img/cycle/brands/ferrari-gray.png" alt="nissan" class="img-fluid brand-gray">
                        <img src="assets/img/cycle/brands/ferrari-white.png" alt="nissan" class="img-fluid brand-white">
                    </div>
                </div>
            </div>
        </section> --}}
        <!--brands section end-->

        <!---filter section start-->
        <section class="cycle-filter ptb-50 bc-background">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-start">
                            <h2 class="mb-3">Featured Cars</h2>
                            <p class="mb-0">Get a car to take you anywhere from Rick Drivers</p>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end d-none d-lg-block">
                        <div class="text-lg-end">
                            <a href="{{route('rental_index')}}" class="btn btn-secondary">All Cars<span class="ms-2"><i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <form method="GET" action="/items/search">
                    <input type="text" name="query" placeholder="Search items">
                    <button type="submit">Search</button>
                </form>
                <div class="cycle-filter-tab">
                    {{-- <ul class="nav nav-tabs cycle-filter-nav border-0 justify-content-center gap-3">
                        <li><a href="#bikes" class="active" data-bs-toggle="tab">Bikes</a></li>
                        <li><a href="#parts" data-bs-toggle="tab">Parts</a></li>
                        <li><a href="#accessories" data-bs-toggle="tab">Accessories</a></li>
                    </ul> --}}
                    <div class="tab-content mt-5">
                        <div class="tab-pane fade show active" id="bikes">
                            <div class="row justify-content-center g-4">
                                @foreach ($cars as $car)
                                    <div class="col-xl-3 col-md-6">
                                        <div class="cycle-card bg-white rounded p-4">
                                            <div class="thumbnail overflow-hidden rounded mb-4">
                                                <a href="{{url('car_rental/details/'.$car->id)}}"><img src="{{asset('cars/'.$car->image_name)}}" alt="cycle" class="img-fluid"></a>
                                            </div>
                                            <span class="text-primary fw-semibold">Model {{$car->year}}</span>
                                            <a href="{{url('car_rental/details/'.$car->id)}}">
                                                <h6 class="mb-3 mt-1 card-title">{{$car->model}}</h6>
                                            </a>
                                            <div class="pricing-amount fw-bold mb-4">
                                                <span class="text-primary me-2">{{$car->rental_price}} ksh</span>
                                            </div>
                                            <a href="{{url('car_rental/details/'.$car->id)}}" class="btn outline-btn btn-sm">View Details</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--filter section end-->

        <!---filter section start-->
        <section class="cycle-filter pb-120 bc-background">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="section-title text-center text-lg-start">
                            <h2 class="mb-3">Available Hotels</h2>
                            <p class="mb-0">We have hotels for our guests in different locations</p>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end d-none d-lg-block">
                        <div class="text-lg-end">
                            <a href="{{route('hotel_show')}}" class="btn btn-secondary">All Hotels<span class="ms-2"><i class="fas fa-angle-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="cycle-filter-tab">
                    {{-- <ul class="nav nav-tabs cycle-filter-nav border-0 justify-content-center gap-3">
                        <li><a href="#bikes" class="active" data-bs-toggle="tab">Bikes</a></li>
                        <li><a href="#parts" data-bs-toggle="tab">Parts</a></li>
                        <li><a href="#accessories" data-bs-toggle="tab">Accessories</a></li>
                    </ul> --}}
                    <div class="tab-content mt-5">
                        <div class="tab-pane fade show active" id="bikes">
                            <div class="row justify-content-center g-4">
                                @foreach ($hotels as $hotel)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="dl_card_box bg-white pt-3 px-3 pb-4 rounded">
                                        <div class="figure_img position-relative">
                                            <a href="{{route('hotel_details',$hotel->id)}}"><img src="{{asset('hotels/'.$hotel->image)}}" alt="not found" class="img-fluid"></a>
                                            <span class="listing-count bg-white text-primary fw-500 rounded-1 shadow py-1 px-3 position-absolute start-0 bottom-0">Ksh. {{$hotel->price}}</span>
                                        </div>
                                        <a href="{{route('hotel_details',$hotel->id)}}">
                                            <h5 class="mt-4">{{$hotel->name}}</h5>
                                        </a>
                                        <span class="slide_meta_text d-block"><i class="fa-solid fa-location-dot">{{$hotel->location}}</i></span>
                                        <span class="slide_meta_text d-block phone mt-2"><i class="fa-solid fa-bed"></i>{{$hotel->rooms}}</span>

                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--filter section end-->

        <!--featured cycle start-->
        <section class="featured-cycle bg-white position-relative ptb-120 z-1 overflow-hidden">
            <span class="dark-clip-shape z-1 position-absolute" data-background="assets/img/shapes/texture-bg.png"></span>
            <span class="featured-text" style="font-size: 151px;">Rick Drivers</span>
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-6">
                        <div class="cl-featured-left position-relative z-2">
                            <h4 class="fw-500 text-primary mb-0">Rick Drivers</h4>
                            <h2 class="h1 mb-3 text-white">Tembea Kenya without trouble</h2>
                            <p class="mb-30">Your all in one service providers for cars, chauffeurs and hotel bookings.</p>
                            <div class="d-flex align-items-center gap-4 gap-sm-5 flex-wrap">
                                <div class="cl-feature-single">
                                    <span class="mb-1 d-block text-white">Cars</span>
                                    <h4 class="mb-0 text-white">10+</h4>
                                </div>
                                <div class="cl-feature-single border-left">
                                    <span class="mb-1 d-block text-white">Chauffeurs</span>
                                    <h4 class="mb-0 text-white">15+</h4>
                                </div>
                                <div class="cl-feature-single border-left">
                                    <span class="mb-1 d-block text-white">Hotels</span>
                                    <h4 class="mb-0 text-white">50+</h4>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-4 flex-wrap mt-30">
                                <a href="{{url('about')}}" class="btn btn-primary btn-md">About Us</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cl-featured-img position-relative">
                            <img src="assets/img/cars/car5.png" alt="cycle" class="d-none d-xl-block position-relative z-2" height="265px">
                            <img src="assets/img/cars/car5.png" alt="cycle" class="d-xl-none img-fluid position-relative z-2">
                            <button class="cl-feature-btn position-absolute btn-1" data-bs-toggle="tooltip" data-bs-title="Rear Light"><i class="fas fa-plus"></i></button>
                            <button class="cl-feature-btn position-absolute btn-2" data-bs-toggle="tooltip" data-bs-title="Full Chain Guard"><i class="fas fa-plus"></i></button>
                            <button class="cl-feature-btn position-absolute btn-3" data-bs-toggle="tooltip" data-bs-title="Easy Start System"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--featured cycle end-->

        <!--call to action start-->
        <section class="cycle-cta pt-120 bc-background">
            <div class="container">
                <div class="cycle-cta-box position-relative z-1 d-flex flex-wrap align-items-center justify-content-between" data-background="assets/img/shapes/texture-bg.png">
                    <div class="cycle-cta-left">
                        <h3 class="mb-4 text-white">Are You Looking<br class="d-none d-sm-block">For An Car To Rent For Any Event ?</h3>
                        <a href="{{url('car_rental/index')}}" class="cl-cta-explore">
                            <span class="me-2">
                              <svg width="29" height="20" viewBox="0 0 29 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <circle cx="10" cy="10" r="9" stroke="#F1F7FE"/>
                                  <path d="M23.5556 6L28 10.5M28 10.5L23.5556 15M28 10.5H8" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </span>
                            Show All Cars
                        </a>
                    </div>
                    <img src="assets/img/cars/car6.png" alt="cycle" class="cycle-man d-none d-xl-block">
                    <div class="cycle-cta-right position-relative z-1">
                        <span class="text-white fw-500">Call Us to reserve your RV with us</span>
                        <a href="tel:01-234-456-789">
                            <h3 class="text-white mt-1">+254 7-456-789</h3>
                        </a>
                        <img src="assets/img/cycle/icons/arrow-red.png" alt="arrow" class="position-absolute arrow-icon z--1 d-none d-xl-block">
                    </div>
                </div>
            </div>
        </section>
        <!--call to action end-->

        <!--feedback section start-->
        <section class="cycle-feedback pt-120 position-relative overflow-hidden bc-background">
            <span class="dark-clip-shape z-1 position-absolute" data-background="assets/img/shapes/texture-bg.png"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5">
                        <div class="section-title text-center position-relative z-2">
                            <h2 class="h1">Our Clients Feedback Important For Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-5 g-xxl-0 mt-1 mt-xxl-10 align-items-center">
                    <div class="col-lg-6">
                        <div class="cl-feedback-slider swiper pe-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide cl-feedback-single bg-white rounded position-relative">
                                    <span class="quote-icon position-absolute">
                                      <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 0.5V17H11C11 23.0637 6.06925 28 0 28V33.5C9.09838 33.5 16.5 26.0984 16.5 17V0.5H0Z" fill="#FE5915"/>
                                          <path d="M27.5 0.5V17H38.5C38.5 23.0637 33.5693 28 27.5 28V33.5C36.5984 33.5 44 26.0984 44 17V0.5H27.5Z" fill="#FE5915"/>
                                      </svg>
                                  </span>
                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                        <img src="assets/img/cycle/clients/client-1.png" alt="client" class="img-fluid rounded-circle">
                                        <div>
                                            <h5 class="mb-1">Taneli Lehtinen</h5>
                                            <span class="fw-500">Customer</span>
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-4">Seamlessly drive alternative services for mission-critical convergence. Efficiently productize cross-unit leadership skills vis-a-vis leading-edge value. Conveniently initiate pandemic functionalities through inexpensive technology. Collaboratively parallel task.</p>
                                </div>
                                <div class="swiper-slide cl-feedback-single bg-white rounded position-relative">
                                    <span class="quote-icon position-absolute">
                                      <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 0.5V17H11C11 23.0637 6.06925 28 0 28V33.5C9.09838 33.5 16.5 26.0984 16.5 17V0.5H0Z" fill="#FE5915"/>
                                          <path d="M27.5 0.5V17H38.5C38.5 23.0637 33.5693 28 27.5 28V33.5C36.5984 33.5 44 26.0984 44 17V0.5H27.5Z" fill="#FE5915"/>
                                      </svg>
                                  </span>
                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                        <img src="assets/img/cycle/clients/client-1.png" alt="client" class="img-fluid rounded-circle">
                                        <div>
                                            <h5 class="mb-1">Taneli Lehtinen</h5>
                                            <span class="fw-500">Customer</span>
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-4">Seamlessly drive alternative services for mission-critical convergence. Efficiently productize cross-unit leadership skills vis-a-vis leading-edge value. Conveniently initiate pandemic functionalities through inexpensive technology. Collaboratively parallel task.</p>
                                </div>
                                <div class="swiper-slide cl-feedback-single bg-white rounded position-relative">
                                    <span class="quote-icon position-absolute">
                                      <svg width="44" height="34" viewBox="0 0 44 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M0 0.5V17H11C11 23.0637 6.06925 28 0 28V33.5C9.09838 33.5 16.5 26.0984 16.5 17V0.5H0Z" fill="#FE5915"/>
                                          <path d="M27.5 0.5V17H38.5C38.5 23.0637 33.5693 28 27.5 28V33.5C36.5984 33.5 44 26.0984 44 17V0.5H27.5Z" fill="#FE5915"/>
                                      </svg>
                                  </span>
                                    <div class="d-flex align-items-center flex-wrap gap-3">
                                        <img src="assets/img/cycle/clients/client-1.png" alt="client" class="img-fluid rounded-circle">
                                        <div>
                                            <h5 class="mb-1">Taneli Lehtinen</h5>
                                            <span class="fw-500">Customer</span>
                                        </div>
                                    </div>
                                    <p class="mb-0 mt-4">Seamlessly drive alternative services for mission-critical convergence. Efficiently productize cross-unit leadership skills vis-a-vis leading-edge value. Conveniently initiate pandemic functionalities through inexpensive technology. Collaboratively parallel task.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cl-feedback-right">
                            <img src="assets/img/cycle/clients/clients.png" alt="clients" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feedback section end-->

@endsection
