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
                            <h1 class="text-white">Chauffeur Lists</h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb section end-->

        <!--bike listing start-->
        <section class="bike-listing ptb-10 light-bg">
            <div class="container">
                <div class="row g-4 justify-content-center mt-2">
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
                    @foreach ($chauffeurs as $chauffeur)
                    <div class="col-xl-3 col-lg-6">
                        <div class="cycle-category-box text-center position-relative overflow-hidden rounded bg-white" >
                            <img src="{{asset('passport/'.$chauffeur->passport)}}" style="float: right;
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
        <!--bike listing end-->
@endsection
