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
                            <h1 class="text-white">Hotel Lists</h1>

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
        <!--bike listing end-->
@endsection
