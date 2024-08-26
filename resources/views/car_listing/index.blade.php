@extends('layouts.frame')
@section('body')
        <!--breadcrumb section start-->
        <section class="breadcrumb-section position-relative z-2 overflow-hidden" data-background="assets/img/shapes/texture-bg.png">
            <img src="{{asset('assets/img/shapes/tire-print-left.png')}}" alt="tire print" class="position-absolute start-0 z-1 tire-print">
            <img src="{{asset('assets/img/shapes/tire-print-right.png')}}" alt="tire print" class="position-absolute end-0 z-1 tire-print">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb-content-wrapper text-center position-relative z-3">
                            <h1 class="text-white">Car Rental Lists</h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb section end-->

        <!--bike listing start-->
        <section class="bike-listing ptb-120 light-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-12">
                        <div class="bike-inventory">
                            <div class="bike_listing_top rounded bg-white mb-20">
                                <div class="row align-items-center justify-content-between g-3">
                                    <div class="col-sm-6">
                                        <p class="mb-0">Showing 1-12 of 42 result</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-sm-end">
                                            <select class="form-select d-inline-block">
                                                <option value="">Default Sorting</option>
                                                <option value="">Sort By Popular</option>
                                                <option value="">Sort By Latest</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center g-4">
                                @foreach ($cars as $car)
                                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                    <div class="md-listing-single bg-white">
                                        <figure class="overflow-hidden rounded-top mb-0">
                                            <a href="{{url('car_rental/details/'.$car->id)}}"><img src="{{asset('cars/'.$car->image_name)}}" alt="bike" class="img-fluid"></a>
                                        </figure>
                                        <div class="md-listing-single-content">
                                            <a href="{{url('car_rental/details/'.$car->id)}}">
                                                <h6 class="mb-1">{{$car->model." ".$car->year }}</h6>
                                            </a>
                                            <ul class="meta-list d-flex flex-wrap mt-3">
                                                <li class="meta-data"><i class="fa-solid fa-users"></i>{{$car->sitter}}</li>
                                                <li class="meta-data"><i class="fa-solid fa-location-dot"></i>{{$car->location}}</li>
                                                <li class="meta-data"><i class="fa-solid fa-gas-pump"></i>{{$car->displacement}}</li>
                                                <li class="meta-data"><i class="fa-solid fa-gears"></i>{{$car->transmission}}</li>
                                            </ul>
                                            <div class="pricing-bottom d-flex align-items-center justify-content-between mt-4">
                                                <a href="{{url('car_rental/details/'.$car->id)}}" class="btn outline-btn btn-sm">View Details</a>
                                                <h5 class="mb-0 text-md-primary">Ksh. {{$car->rental_price}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="template-pagination mt-5 pg-style-2">
                                <ul class="d-flex align-items-center">
                                    <li><a href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#" class="active">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--bike listing end-->
@endsection
