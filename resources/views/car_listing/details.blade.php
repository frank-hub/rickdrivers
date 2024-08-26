@extends('layouts.frame')
@section('body')
        <!--bike listing details start-->
        <section class="bike-listing-details pt-60 pb-120 overflow-hidden">
            <div class="container">
                <div class="row g-5 g-xl-4">
                    <div class="col-xl-8">
                        <div class="bld-details overflow-hidden">
                            <div class="bld-bike-slider-wrapper position-relative">
                                <div class="bld-bike-slider swiper">
                                    <div class="swiper-wrapper">
                                        <div class="single-bike-thumb swiper-slide rounded-3 overflow-hidden">
                                            <img src="{{asset('cars/'.$car->image_name)}}" alt="bike" class="img-fluid">
                                        </div>
                                        {{-- <div class="single-bike-thumb swiper-slide rounded-3 overflow-hidden">
                                            <img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid">
                                        </div>
                                        <div class="single-bike-thumb swiper-slide rounded-3 overflow-hidden">
                                            <img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="bike-listing-slider-control swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide rounded-3 overflow-hidden">
                                            <img src="{{asset('cars/'.$car->image_name)}}" alt="bike" class="img-fluid">
                                        </div>
                                        {{-- <div class="swiper-slide rounded-3 overflow-hidden">
                                            <img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid">
                                        </div>
                                        <div class="swiper-slide rounded-3 overflow-hidden">
                                            <img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="bld-features mt-4">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="bld-feature-box bg-white rounded text-center">
                                        </span>
                                            <h6 class="mb-0 mt-3">Model Year</h6>
                                            <span class="d-block fs-sm">{{$car->year}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="bld-feature-box bg-white rounded text-center">

                                        </span>
                                            <h6 class="mb-0 mt-3">Make</h6>
                                            <span class="d-block fs-sm">{{$car->make}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="bld-feature-box bg-white rounded text-center">

                                        </span>
                                            <h6 class="mb-0 mt-3">Engine Capacity</h6>
                                            <span class="d-block fs-sm">{{$car->displacement}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="bld-feature-box bg-white rounded text-center">

                                        </span>
                                            <h6 class="mb-0 mt-3">Transmission</h6>
                                            <span class="d-block fs-sm">{{$car->transmission}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="bld-title position-relative d-inline-block mt-80">Car Specifications</h4>
                            <div class="mt-40">
                                <ul class="nav nav-tabs border-0 mb-40 bld-tab-navs">
                                    <li><a href="#description" data-bs-toggle="tab" class="active">Product Description</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="description">
                                        <div class="d-flex align-items-center bld-info-list flex-wrap">
                                            <div class="iv_info_item d-flex align-items-center">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                                <svg width="33" height="16" viewBox="0 0 33 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M32.5456 6.74988C32.3547 6.46003 31.9729 6.26679 31.3999 6.16993C30.4929 6.02487 28.8222 5.92826 27.4855 5.83164C26.5782 5.78321 25.8145 5.68659 25.5282 5.68659C25.2894 5.63816 25.0985 5.58997 24.9075 5.44492L22.6638 2.88417C21.6135 1.67657 20.0859 1 18.5104 1H6.86227C5.19134 1 3.66372 1.91799 2.85218 3.36751L1.51549 5.73502C0.942723 6.74963 0.847263 7.95773 1.22911 9.02053L1.94518 11.0497V11.5328C1.89733 12.0644 1.89733 12.4993 2.18396 12.7891C2.32727 12.9342 2.5658 13.0308 2.90004 13.0308H4.52312C5.00042 14.2386 6.14619 15.1084 7.53074 15.1084C8.86744 15.1084 10.0608 14.2386 10.5384 13.0308H24.3826C24.8599 14.2386 26.0057 15.1084 27.3903 15.1084C28.7267 15.1084 29.9203 14.2386 30.3976 13.0308H32.164C32.2119 13.0308 32.2595 13.0308 32.3073 12.9824C32.3552 12.9339 32.355 12.8857 32.355 12.8373V10.8081C32.355 10.0833 32.4983 9.40675 32.6413 8.82704C32.6892 7.95723 32.8801 7.23247 32.5459 6.74939L32.5456 6.74988ZM2.85218 12.6446C2.61341 12.6446 2.47034 12.5961 2.42249 12.4995C2.27918 12.3545 2.27918 11.968 2.32703 11.5331V11.05H4.3798C4.33195 11.2917 4.28434 11.5815 4.28434 11.8232C4.28434 12.113 4.33195 12.3547 4.3798 12.6446H2.85218V12.6446ZM10.1563 12.6446C10.1563 12.6927 10.1084 12.7896 10.1084 12.8378C10.1084 12.886 10.0606 12.9829 10.013 13.031C9.58327 14.0456 8.58081 14.7222 7.43504 14.7222C6.28926 14.7222 5.2868 14.0459 4.85711 13.031C4.8095 12.9826 4.80925 12.886 4.76165 12.8378C4.76165 12.7894 4.71379 12.6927 4.71379 12.6446C4.61833 12.4029 4.57048 12.113 4.57048 11.8232C4.57048 11.5333 4.61809 11.2917 4.71379 11.05C4.71379 11.0018 4.76165 10.9049 4.76165 10.8568C4.76165 10.8086 4.8095 10.7117 4.8095 10.6635C5.23919 9.64891 6.24165 8.92415 7.38743 8.92415C8.5332 8.92415 9.53566 9.64891 9.96536 10.6635C10.013 10.712 10.013 10.8086 10.013 10.8568C10.013 10.9049 10.0608 11.0018 10.0608 11.05C10.1087 11.2917 10.2041 11.5815 10.2041 11.8232C10.2996 12.113 10.252 12.3547 10.1565 12.6446H10.1563ZM10.5381 12.6446C10.586 12.4029 10.6336 12.113 10.6336 11.8232C10.6336 11.5333 10.5857 11.2917 10.5381 11.05H24.1436C24.096 11.2917 24.0482 11.5815 24.0482 11.8232C24.0482 12.113 24.096 12.3547 24.1436 12.6446H10.5381V12.6446ZM29.9677 12.6446C29.9677 12.6927 29.9201 12.7896 29.9201 12.8378C29.9201 12.886 29.8722 12.9829 29.8246 13.031C29.3949 14.0456 28.3925 14.7222 27.2467 14.7222C26.1009 14.7222 25.0985 14.0459 24.6688 13.031C24.6212 12.9826 24.6212 12.886 24.5733 12.8378C24.5733 12.7894 24.5255 12.6927 24.5255 12.6446C24.43 12.4029 24.3824 12.113 24.3824 11.8232C24.3824 11.5333 24.43 11.2917 24.5255 11.05C24.5255 11.0018 24.5733 10.9049 24.5733 10.8568C24.5733 10.8086 24.6212 10.7117 24.6212 10.6635C25.0506 9.64891 26.0533 8.92415 27.1988 8.92415C28.3444 8.92415 29.3471 9.64891 29.7768 10.6635C29.8246 10.712 29.8246 10.8086 29.8246 10.8568C29.8246 10.9049 29.8722 11.0018 29.8722 11.05C29.9201 11.2917 30.0156 11.5815 30.0156 11.8232C30.111 12.113 30.0634 12.3547 29.9677 12.6446ZM31.8296 12.6446H30.3498C30.3974 12.4029 30.4453 12.113 30.4453 11.8232C30.4453 11.5333 30.3974 11.2917 30.3498 11.05H31.8296V12.6446ZM32.1638 8.73092C32.0205 9.31087 31.8774 9.9872 31.8774 10.6635H30.2543C29.7768 9.45568 28.631 8.58587 27.2467 8.58587C25.8624 8.58587 24.7166 9.45568 24.2391 10.6635H10.3948C9.91751 9.45568 8.77173 8.58587 7.38718 8.58587C6.00264 8.58587 4.85711 9.45568 4.37956 10.6635H2.13586L1.51524 8.87572C1.37193 8.48925 1.32432 8.10253 1.32432 7.76449H2.4701C2.56556 7.76449 2.66102 7.66787 2.66102 7.57126C2.66102 7.47464 2.56556 7.37802 2.4701 7.37802H1.32457C1.37242 6.8465 1.51549 6.36341 1.75426 5.88007L3.09096 3.51256C3.85489 2.15966 5.23919 1.33829 6.76681 1.33829H18.415C19.895 1.33829 21.3272 1.96643 22.2818 3.07766L24.5733 5.68683L24.6212 5.73502C24.8597 5.88007 25.1461 6.02487 25.4327 6.02487C25.7191 6.07331 26.5306 6.12149 27.4376 6.16993C28.7743 6.26654 30.4453 6.41159 31.3044 6.50821C31.7819 6.55664 32.0683 6.70145 32.2116 6.94312C32.4502 7.32959 32.3071 7.95773 32.1638 8.73092V8.73092Z" fill="#FC0012" stroke="#FC0012" stroke-width="0.3"/>
                                                    <path d="M16.2669 7.37793H15.312C15.2166 7.37793 15.1211 7.47455 15.1211 7.57117C15.1211 7.66778 15.2166 7.7644 15.312 7.7644H16.2669C16.3623 7.7644 16.4578 7.66778 16.4578 7.57117C16.4578 7.47455 16.3623 7.37793 16.2669 7.37793Z" fill="#FC0012" stroke="#FC0012" stroke-width="0.3"/>
                                                    <path d="M28.8218 10.8565C28.7742 10.808 28.7264 10.7114 28.6788 10.6632C28.3445 10.2283 27.8194 9.93848 27.2466 9.93848C26.6739 9.93848 26.1485 10.2283 25.8145 10.6632C25.7666 10.7114 25.719 10.8083 25.6711 10.8565C25.6233 10.9047 25.6235 11.0015 25.5757 11.0497C25.4802 11.2914 25.3848 11.5328 25.3848 11.8229C25.3848 12.113 25.4802 12.4026 25.5757 12.6443C25.6235 12.6927 25.6235 12.7893 25.6711 12.8375C25.7188 12.8857 25.7666 12.9826 25.8145 13.0307C26.1485 13.4656 26.6736 13.7071 27.2466 13.7071C27.8196 13.7071 28.3445 13.4172 28.6788 13.0307C28.7264 12.9826 28.7742 12.9341 28.8218 12.8375C28.8697 12.7891 28.8697 12.6925 28.9173 12.6443C29.013 12.4026 29.1085 12.1128 29.1085 11.8229C29.1085 11.533 29.0606 11.2914 28.9173 11.0497C28.9173 10.9531 28.8697 10.9047 28.8218 10.8565V10.8565ZM28.4879 12.6443C28.44 12.6927 28.3924 12.7893 28.3445 12.8375L28.1536 13.0307C27.9148 13.224 27.5806 13.3206 27.2466 13.3206C26.9126 13.3206 26.626 13.224 26.3396 13.0307C26.2442 12.9826 26.1963 12.9341 26.1485 12.8375C26.1008 12.7891 26.053 12.7409 26.0054 12.6443C25.8621 12.4026 25.7666 12.1128 25.7666 11.8229C25.7666 11.533 25.8621 11.2914 26.0054 11.0497C26.053 11.0013 26.1008 10.9047 26.1485 10.8565L26.3396 10.6632C26.5781 10.47 26.9124 10.3249 27.2466 10.3249C27.5809 10.3249 27.9148 10.47 28.1536 10.6632C28.2012 10.7114 28.2967 10.7599 28.3445 10.8565C28.3924 10.9047 28.44 10.9531 28.4879 11.0497C28.6309 11.2914 28.7264 11.5328 28.7264 11.8229C28.7264 12.113 28.6309 12.4026 28.4879 12.6443Z" fill="#FC0012" stroke="#FC0012" stroke-width="0.3"/>
                                                    <path d="M9.01154 10.8564C8.96369 10.8079 8.91608 10.7113 8.86823 10.6631C8.53399 10.2282 8.00884 9.93839 7.43607 9.93839C6.86331 9.93839 6.33815 10.2282 6.00391 10.6631C5.95606 10.7113 5.90845 10.8082 5.8606 10.8564C5.81275 10.9046 5.81275 11.0014 5.76514 11.0496C5.66968 11.2913 5.57422 11.5327 5.57422 11.8228C5.57422 12.1129 5.66968 12.4025 5.76514 12.6442C5.81299 12.6926 5.81299 12.7892 5.8606 12.8374C5.90821 12.8856 5.95606 12.9825 6.00391 13.0307C6.33815 13.4656 6.86331 13.707 7.43607 13.707C8.00884 13.707 8.53399 13.4171 8.86823 13.0307C8.91584 12.9825 8.96369 12.934 9.01154 12.8374C9.05939 12.789 9.05939 12.6924 9.107 12.6442C9.20246 12.4025 9.29792 12.1127 9.29792 11.8228C9.29792 11.533 9.25007 11.2913 9.107 11.0496C9.05939 10.953 9.05939 10.9046 9.01154 10.8564V10.8564ZM8.67731 12.6442C8.6297 12.6926 8.58184 12.7892 8.53399 12.8374L8.34307 13.0307C8.1043 13.2239 7.77031 13.3205 7.43607 13.3205C7.10184 13.3205 6.81545 13.2239 6.52907 13.0307C6.43361 12.9825 6.38576 12.934 6.33815 12.8374C6.2903 12.789 6.24269 12.7408 6.19484 12.6442C6.05152 12.4025 5.95606 12.1127 5.95606 11.8228C5.95606 11.533 6.05152 11.2913 6.19484 11.0496C6.24269 11.0012 6.2903 10.9046 6.33815 10.8564L6.52907 10.6631C6.76785 10.4699 7.10184 10.3249 7.43607 10.3249C7.77031 10.3249 8.10454 10.4699 8.34307 10.6631C8.39068 10.7113 8.48638 10.7598 8.53399 10.8564C8.5816 10.9046 8.62945 10.953 8.67731 11.0496C8.82062 11.2913 8.91608 11.5327 8.91608 11.8228C8.91608 12.1129 8.82062 12.4025 8.67731 12.6442Z" fill="#FC0012" stroke="#FC0012" stroke-width="0.3"/>
                                                    <path d="M8.67702 7.37793H7.72217C7.62671 7.37793 7.53125 7.47455 7.53125 7.57117C7.53125 7.66778 7.62671 7.7644 7.72217 7.7644H8.67702C8.77249 7.7644 8.86795 7.66778 8.86795 7.57117C8.86795 7.47455 8.77249 7.37793 8.67702 7.37793Z" fill="#FC0012" stroke="#FC0012" stroke-width="0.3"/>
                                                    <path d="M31.781 7.33105C31.6856 7.33105 31.5899 7.37949 31.5422 7.47611L31.2559 8.97405C31.2559 9.07067 31.3035 9.16729 31.3989 9.21572H31.4468C31.5422 9.21572 31.5899 9.16754 31.6377 9.07092L31.9241 7.57297C31.9241 7.47635 31.8765 7.37974 31.781 7.3313V7.33105Z" fill="#FC0012" stroke="#FC0012" stroke-width="0.3"/>
                                                    <path d="M21.4219 3.41631C20.658 2.49832 19.5124 1.9668 18.3667 1.9668H7.05249C5.85911 1.9668 4.80879 2.59494 4.18818 3.65798C3.85394 4.23769 3.85394 4.96245 4.18818 5.5424C4.52241 6.12236 5.14303 6.50883 5.81125 6.50883H21.1355H22.5201C22.8065 6.50883 22.9974 6.36378 23.1407 6.12236C23.2362 5.88069 23.2362 5.59083 23.0452 5.3976L21.4222 3.41656L21.4219 3.41631ZM5.81125 6.12211C5.2861 6.12211 4.76094 5.83226 4.52241 5.34892C4.23603 4.86583 4.23603 4.28587 4.52241 3.85097C5.04757 2.93298 6.00242 2.35302 7.05249 2.35302H7.81642L7.14819 6.07343H5.81125V6.12186V6.12211ZM7.48219 6.12211L8.15041 2.44989V2.35327H13.4972L14.0224 6.12211H7.48219V6.12211ZM14.3566 6.12211L13.8314 2.35352H18.3667C18.8918 2.35352 19.3691 2.45013 19.8467 2.64337L20.9446 6.07392H14.3566V6.12236V6.12211ZM22.8062 5.97706C22.7586 6.07368 22.6631 6.1703 22.5198 6.1703H21.2786L20.2761 2.98141C20.6104 3.17464 20.8968 3.41631 21.1355 3.7546L22.7586 5.68721C22.8541 5.73564 22.8541 5.83226 22.8062 5.97706V5.97706Z" fill="#FC0012" stroke="#FC0012" stroke-width="0.3"/>
                                                </svg>
                                            </span>
                                                <div class="info_content">
                                                    <span class="meta">Car Status</span>
                                                    <span class="title">Available</span>
                                                </div>
                                            </div>

                                            <div class="iv_info_item d-flex align-items-center">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M18.0278 7.50562L16.6941 7.27938C16.5552 6.83087 16.3766 6.39823 16.1583 5.98544L16.9442 4.886C17.2776 4.41764 17.226 3.77861 16.8172 3.37376L15.6344 2.19096C15.4121 1.96869 15.1184 1.84564 14.8048 1.84564C14.5588 1.84564 14.3246 1.92106 14.1261 2.06395L13.0227 2.84983C12.594 2.62359 12.1455 2.43704 11.6811 2.29812L11.4589 0.980374C11.3636 0.412789 10.8754 0 10.2999 0H8.62888C8.05336 0 7.56516 0.412789 7.4699 0.980374L7.23969 2.32988C6.79515 2.4688 6.36251 2.65138 5.94972 2.87365L4.85821 2.08776C4.65976 1.94487 4.42161 1.86946 4.17552 1.86946C3.86196 1.86946 3.56428 1.9925 3.34597 2.21477L2.15921 3.39757C1.75435 3.80242 1.69879 4.44145 2.03219 4.90981L2.82602 6.02513C2.60772 6.44189 2.43307 6.87453 2.29812 7.32304L0.980374 7.54531C0.412789 7.64057 0 8.12877 0 8.7043V10.3753C0 10.9508 0.412789 11.439 0.980374 11.5343L2.32988 11.7645C2.4688 12.209 2.65138 12.6417 2.87365 13.0545L2.09173 14.142C1.75832 14.6104 1.80992 15.2494 2.21874 15.6542L3.40154 16.837C3.62381 17.0593 3.91753 17.1824 4.23109 17.1824C4.47718 17.1824 4.71135 17.1069 4.90981 16.964L6.02514 16.1702C6.42602 16.3806 6.84674 16.5513 7.27938 16.6862L7.50165 18.0198C7.59691 18.5874 8.08511 19.0002 8.66063 19.0002H10.3356C10.9111 19.0002 11.3993 18.5874 11.4946 18.0198L11.7208 16.6862C12.1693 16.5473 12.602 16.3687 13.0148 16.1504L14.1142 16.9363C14.3127 17.0792 14.5508 17.1546 14.7969 17.1546C15.1105 17.1546 15.4042 17.0315 15.6265 16.8093L16.8093 15.6265C17.2141 15.2216 17.2697 14.5826 16.9363 14.1142L16.1504 13.0108C16.3687 12.594 16.5513 12.1614 16.6862 11.7169L18.0198 11.4946C18.5874 11.3993 19.0002 10.9111 19.0002 10.3356V8.6646C19.0082 8.08908 18.5954 7.60088 18.0278 7.50562ZM17.9365 10.3356C17.9365 10.3872 17.9008 10.4309 17.8492 10.4388L16.1821 10.7166C15.9718 10.7524 15.8051 10.9072 15.7535 11.1096C15.6026 11.693 15.3724 12.2527 15.0628 12.7726C14.9557 12.9552 14.9636 13.1815 15.0867 13.3561L16.067 14.7374C16.0948 14.7771 16.0908 14.8366 16.0551 14.8723L14.8723 16.0551C14.8445 16.0829 14.8168 16.0869 14.7969 16.0869C14.7731 16.0869 14.7532 16.0789 14.7374 16.067L13.3601 15.0867C13.1894 14.9636 12.9592 14.9557 12.7766 15.0628C12.2567 15.3724 11.697 15.6026 11.1136 15.7535C10.9072 15.8051 10.7524 15.9757 10.7206 16.1821L10.4388 17.8492C10.4309 17.9008 10.3872 17.9365 10.3356 17.9365H8.6646C8.61301 17.9365 8.56934 17.9008 8.56141 17.8492L8.28357 16.1821C8.24785 15.9718 8.09305 15.8051 7.89062 15.7535C7.32304 15.6066 6.7753 15.3804 6.26328 15.0867C6.17993 15.039 6.08467 15.0152 5.99338 15.0152C5.88622 15.0152 5.77508 15.047 5.68379 15.1144L4.2946 16.1027C4.27475 16.1147 4.2549 16.1226 4.23506 16.1226C4.21918 16.1226 4.18743 16.1186 4.15965 16.0908L2.97685 14.908C2.94112 14.8723 2.93715 14.8168 2.96494 14.7731L3.94134 13.4037C4.06439 13.2291 4.07232 12.9989 3.96516 12.8163C3.65557 12.3003 3.41742 11.7407 3.26659 11.1572C3.21102 10.9548 3.04432 10.8 2.83793 10.7643L1.15899 10.4785C1.10739 10.4706 1.07166 10.4269 1.07166 10.3753V8.7043C1.07166 8.6527 1.10739 8.60904 1.15899 8.6011L2.81411 8.32326C3.02447 8.28754 3.19515 8.13274 3.24675 7.92635C3.3936 7.34288 3.61984 6.77927 3.92547 6.25931C4.03263 6.07673 4.02073 5.85049 3.89768 5.67982L2.90937 4.29063C2.88159 4.25094 2.88556 4.1914 2.92128 4.15568L4.10408 2.97288C4.13186 2.94509 4.15965 2.94112 4.17949 2.94112C4.20331 2.94112 4.22315 2.94906 4.23903 2.96097L5.60838 3.93737C5.78302 4.06042 6.01323 4.06836 6.19581 3.96119C6.71179 3.6516 7.27144 3.41345 7.8549 3.26262C8.05733 3.20705 8.21212 3.04035 8.24785 2.83396L8.53362 1.15502C8.54156 1.10342 8.58522 1.0677 8.63682 1.0677H10.3078C10.3594 1.0677 10.4031 1.10342 10.411 1.15502L10.6889 2.81014C10.7246 3.02051 10.8794 3.19118 11.0858 3.24278C11.6851 3.3936 12.2567 3.62778 12.7885 3.94134C12.9711 4.04851 13.1973 4.04057 13.372 3.91753L14.7413 2.93318C14.7612 2.92128 14.781 2.91334 14.8009 2.91334C14.8168 2.91334 14.8485 2.91731 14.8763 2.94509L16.0591 4.12789C16.0948 4.16361 16.0988 4.21918 16.071 4.26284L15.0906 5.64013C14.9676 5.8108 14.9596 6.04101 15.0668 6.22359C15.3764 6.74355 15.6066 7.30319 15.7574 7.88666C15.809 8.09305 15.9797 8.24785 16.1861 8.2796L17.8531 8.56141C17.9047 8.56934 17.9405 8.613 17.9405 8.6646V10.3356H17.9365Z" fill="#FC0012"/>
                                                    <path d="M9.50245 5.39761C7.24005 5.39761 5.40234 7.23532 5.40234 9.49772C5.40234 11.7601 7.24005 13.5978 9.50245 13.5978C11.7649 13.5978 13.6026 11.7601 13.6026 9.49772C13.6026 7.23532 11.7649 5.39761 9.50245 5.39761ZM9.50245 12.5262C7.83145 12.5262 6.47401 11.1687 6.47401 9.49772C6.47401 7.82672 7.83145 6.46928 9.50245 6.46928C11.1735 6.46928 12.5309 7.82672 12.5309 9.49772C12.5309 11.1687 11.1735 12.5262 9.50245 12.5262Z" fill="#FC0012"/>
                                                </svg>
                                            </span>
                                                <div class="info_content">
                                                    <span class="meta">Transmission</span>
                                                    <span class="title">{{$car->transmission}}</span>
                                                </div>
                                            </div>
                                            <div class="iv_info_item d-flex align-items-center">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                                <svg width="23" height="16" viewBox="0 0 23 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21.4886 4.85227H19.4091C19.0258 4.85227 18.7159 5.16282 18.7159 5.54545V6.23864H18.0227V5.54545C18.0227 5.16282 17.7129 4.85227 17.3295 4.85227H16.2302L14.3544 2.97652C14.2906 2.91206 14.2137 2.86145 14.1284 2.8261C14.0439 2.79144 13.9537 2.77273 13.8636 2.77273H11.7841V1.38636H13.1705C13.5538 1.38636 13.8636 1.07582 13.8636 0.693182C13.8636 0.310545 13.5538 0 13.1705 0H6.93182C6.54849 0 6.23864 0.310545 6.23864 0.693182C6.23864 1.07582 6.54849 1.38636 6.93182 1.38636H8.31818V2.77273H6.23864C6.21645 2.77273 6.19774 2.78312 6.17625 2.7852C6.12634 2.79006 6.0799 2.79907 6.03276 2.81432C5.99186 2.82749 5.95443 2.84205 5.917 2.86215C5.87818 2.88294 5.84283 2.9072 5.80748 2.93562C5.77074 2.96612 5.73885 2.99801 5.70905 3.03475C5.69449 3.05208 5.67508 3.06248 5.66191 3.08189L4.48142 4.85227H2.77273C2.3894 4.85227 2.07955 5.16282 2.07955 5.54545V7.625H1.38636V5.54545C1.38636 5.16282 1.07651 4.85227 0.693182 4.85227C0.309852 4.85227 0 5.16282 0 5.54545V11.7841C0 12.1667 0.309852 12.4773 0.693182 12.4773C1.07651 12.4773 1.38636 12.1667 1.38636 11.7841V9.01136H2.07955V11.7841C2.07955 12.1667 2.3894 12.4773 2.77273 12.4773H4.42389L5.61893 14.8667C5.65151 14.9318 5.69449 14.9887 5.74301 15.0386C5.75272 15.049 5.76519 15.0559 5.77559 15.0649C5.82481 15.11 5.87957 15.146 5.93918 15.1751C5.95928 15.1848 5.97939 15.1939 6.00087 15.2015C6.07643 15.2299 6.15545 15.2493 6.23725 15.25C6.23794 15.25 6.23794 15.25 6.23864 15.25H14.5568C14.658 15.25 14.753 15.2257 14.8396 15.1869C14.8625 15.1765 14.8798 15.1578 14.9013 15.1453C14.9644 15.1079 15.0226 15.0663 15.0712 15.0115C15.0788 15.0025 15.0906 14.9998 15.0982 14.9901L17.663 11.7841H18.7159V12.4773C18.7159 12.8599 19.0258 13.1705 19.4091 13.1705H21.4886C21.872 13.1705 22.1818 12.8599 22.1818 12.4773V5.54545C22.1818 5.16282 21.872 4.85227 21.4886 4.85227ZM20.7955 11.7841H20.1023V11.0909C20.1023 10.7083 19.7924 10.3977 19.4091 10.3977H17.3295C17.3164 10.3977 17.3053 10.4047 17.2921 10.4054C17.245 10.4081 17.2006 10.4206 17.1549 10.4331C17.1119 10.4449 17.0696 10.4532 17.0301 10.4719C16.994 10.4892 16.9635 10.5156 16.9303 10.5391C16.8901 10.5683 16.8506 10.596 16.8173 10.6334C16.8083 10.6431 16.7965 10.6473 16.7882 10.6577L14.2234 13.8636H6.66702L5.47198 11.4742C5.45673 11.4437 5.43039 11.4236 5.41098 11.3959C5.38186 11.3543 5.35622 11.3127 5.31878 11.2781C5.28551 11.2476 5.24739 11.2275 5.20926 11.2046C5.17183 11.181 5.13717 11.1561 5.09489 11.1401C5.04706 11.1221 4.99645 11.1173 4.94516 11.1096C4.91397 11.1055 4.88555 11.0909 4.85227 11.0909H3.46591V6.23864H4.85227H4.85297C4.93545 6.23864 5.01586 6.21923 5.09281 6.19011C5.10806 6.18457 5.12331 6.17972 5.13856 6.17278C5.20857 6.1409 5.27303 6.09861 5.32987 6.04385C5.34097 6.03345 5.34928 6.02098 5.35968 6.00989C5.38325 5.98424 5.4089 5.95998 5.42831 5.93017L6.60949 4.15909H9.01136C9.39469 4.15909 9.70455 3.84855 9.70455 3.46591V1.38636H10.3977V3.46591C10.3977 3.84855 10.7076 4.15909 11.0909 4.15909H13.5767L15.4524 6.03484C15.5162 6.09931 15.5931 6.14991 15.6784 6.18526C15.763 6.21992 15.8531 6.23864 15.9432 6.23864H16.6364V6.93182C16.6364 7.31445 16.9462 7.625 17.3295 7.625H19.4091C19.7924 7.625 20.1023 7.31445 20.1023 6.93182V6.23864H20.7955V11.7841Z" fill="#FC0012"/>
                                                    <path d="M13.5585 6.35746C13.2403 6.14257 12.8105 6.22645 12.5956 6.54323L9.72588 10.7848L8.04768 9.48995C7.74338 9.25565 7.30944 9.3125 7.07584 9.61542C6.84224 9.91834 6.89839 10.3537 7.20131 10.5873L9.46385 12.3327C9.58585 12.4277 9.73489 12.4776 9.88739 12.4776C9.92413 12.4776 9.96017 12.4748 9.9976 12.4686C10.1861 12.4381 10.3546 12.3313 10.4613 12.1726L13.7442 7.32029C13.9591 7.00281 13.8753 6.57235 13.5585 6.35746Z" fill="#FC0012"/>
                                                </svg>
                                            </span>
                                                <div class="info_content">
                                                    <span class="meta">Displacement</span>
                                                    <span class="title">{{$car->displacement}}</span>
                                                </div>
                                            </div>


                                            <div class="iv_info_item d-flex align-items-center">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                                <i class="fa fa-map-location"></i>
                                            </span>
                                                <div class="info_content">
                                                    <span class="meta">Location</span>
                                                    <span class="title">{{$car->location}}</span>
                                                </div>
                                            </div>

                                            <div class="iv_info_item d-flex align-items-center">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center border rounded flex-shrink-0">
                                                <i class="fa fa-users"></i>
                                            </span>
                                                <div class="info_content">
                                                    <span class="meta">Sitters</span>
                                                    <span class="title">{{$car->sitter}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="bike-details-sidebar">
                            <div class="bld-author-widget sidebar-widget rounded overflow-hidden bg-white">
                                <div class="widget-top bg-secondary">
                                    <h2 class="text-white mb-1">Ksh {{$car->rental_price}}</h2>
                                    <p class="mb-0 text-white">{{$car->model}}</p>
                                </div>
                                <div class="author-info mt-40 d-flex align-items-center">
                                    <form class="bld-contact-form" method="POST" action="{{route('car_book')}}">
                                        @csrf
                                        <input type="text" name="terms" hidden value="yes">
                                        <input type="text" name="car_id" value="{{$car->id}}" hidden>

                                        <div class="input-group">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Pickup Location*</label>
                                            <input type="text" required name="p_location" placeholder="Pickup Location" class="d-block border w-100 rounded">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Dropoff Location*</label>
                                            <input type="text" required name="drop_location" placeholder="Dropoff Location" class="d-block border w-100 rounded">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Date & Time</label>
                                            <input type="text" required name="date_time" placeholder="Date & Time" class="d-block border w-100 rounded">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Phone No.</label>
                                            <input type="text" required name="contact" placeholder="Your Phone No." class="d-block border w-100 rounded">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Driver Info</label>
                                            <select name="driver_info" required class="d-block border w-100 rounded" id="">
                                                <option value="Self Driver">Self Driver</option>
                                                <option value="Need A Chauffeur">Need A Chauffeur</option>
                                            </select>
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Payment Mode</label>
                                            <select name="pay_method" required class="d-block border w-100 rounded" id="">
                                                <option value="Mobile Payment">Mobile Payment</option>
                                                <option value="Cash">Cash</option>
                                            </select>
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Phone No.</label>
                                            <input type="text" required name="contact" placeholder="Your Phone No." class="d-block border w-100 rounded">
                                        </div>
                                        <div class="input-group mt-3">
                                            <label class="fs-sm fw-semibold text-secondary mb-2">Added Features</label>
                                            <textarea placeholder="Added Features" required name="add_features" class="d-block w-100 border rounded" rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn md-primary-btn mt-30">Book Now</button>
                                    </form>
                                </div>
                                <div class="container">
                                    <div class="float-start">
                                        <h6>Payment Details</h6>
                                        <a href="{{url('how-to-pay')}}" class="btn btn-success">How To Pay</a>
                                        <h6>For Support</h6>
                                        <hr>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="fa-regular fa-envelope"></i></span>
                                            </div>
                                            <div class="col-md-8">
                                                <p>info@rickdrivers.com</p>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-4">
                                                <span class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0"><i class="flaticon-phone-call"></i></span>
                                            </div>
                                            <div class="col-md-8">
                                                <p>+254794365611</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--bike listing details end-->

        <!--similar bike slider start-->
        {{-- <section class="similar-bike-slider-section pb-120 overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <div class="section-title text-center">
                            <h2 class="mb-5">You may be interested</h2>
                        </div>
                    </div>
                </div>
                <div class="sm-bike-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="md-listing-single bg-white swiper-slide">
                            <figure class="overflow-hidden rounded-top mb-0">
                                <a href="bike-listing-details.html"><img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid"></a>
                            </figure>
                            <div class="md-listing-single-content">
                                <a href="bike-listing-details.html">
                                    <h6 class="mb-1">Toyota Noah 2016</h6>
                                </a>
                                <ul class="meta-list d-flex flex-wrap mt-3">
                                    <li class="meta-data"><i class="fa-solid fa-users"></i>5</li>
                                    <li class="meta-data"><i class="fa-solid fa-location-dot"></i>Nairobi</li>
                                    <li class="meta-data"><i class="fa-solid fa-gas-pump"></i>Petrol</li>
                                    <li class="meta-data"><i class="fa-solid fa-gears"></i>Auto</li>
                                </ul>
                                <div class="pricing-bottom d-flex align-items-center justify-content-between mt-4">
                                    <a href="bike-listing-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <h5 class="mb-0 text-md-primary">Ksh 6300.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="md-listing-single bg-white swiper-slide">
                            <figure class="overflow-hidden rounded-top mb-0">
                                <a href="bike-listing-details.html"><img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid"></a>
                            </figure>
                            <div class="md-listing-single-content">
                                <a href="bike-listing-details.html">
                                    <h6 class="mb-1">Toyota Noah 2016</h6>
                                </a>
                                <ul class="meta-list d-flex flex-wrap mt-3">
                                    <li class="meta-data"><i class="fa-solid fa-users"></i>5</li>
                                    <li class="meta-data"><i class="fa-solid fa-location-dot"></i>Nairobi</li>
                                    <li class="meta-data"><i class="fa-solid fa-gas-pump"></i>Petrol</li>
                                    <li class="meta-data"><i class="fa-solid fa-gears"></i>Auto</li>
                                </ul>
                                <div class="pricing-bottom d-flex align-items-center justify-content-between mt-4">
                                    <a href="bike-listing-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <h5 class="mb-0 text-md-primary">Ksh 6300.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="md-listing-single bg-white swiper-slide">
                            <figure class="overflow-hidden rounded-top mb-0">
                                <a href="bike-listing-details.html"><img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid"></a>
                            </figure>
                            <div class="md-listing-single-content">
                                <a href="bike-listing-details.html">
                                    <h6 class="mb-1">Toyota Noah 2016</h6>
                                </a>
                                <ul class="meta-list d-flex flex-wrap mt-3">
                                    <li class="meta-data"><i class="fa-solid fa-users"></i>5</li>
                                    <li class="meta-data"><i class="fa-solid fa-location-dot"></i>Nairobi</li>
                                    <li class="meta-data"><i class="fa-solid fa-gas-pump"></i>Petrol</li>
                                    <li class="meta-data"><i class="fa-solid fa-gears"></i>Auto</li>
                                </ul>
                                <div class="pricing-bottom d-flex align-items-center justify-content-between mt-4">
                                    <a href="bike-listing-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <h5 class="mb-0 text-md-primary">Ksh 6300.00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="md-listing-single bg-white swiper-slide">
                            <figure class="overflow-hidden rounded-top mb-0">
                                <a href="bike-listing-details.html"><img src="{{asset('assets/img/cars/car1.png')}}" alt="bike" class="img-fluid"></a>
                            </figure>
                            <div class="md-listing-single-content">
                                <a href="bike-listing-details.html">
                                    <h6 class="mb-1">Toyota Noah 2016</h6>
                                </a>
                                <ul class="meta-list d-flex flex-wrap mt-3">
                                    <li class="meta-data"><i class="fa-solid fa-users"></i>5</li>
                                    <li class="meta-data"><i class="fa-solid fa-location-dot"></i>Nairobi</li>
                                    <li class="meta-data"><i class="fa-solid fa-gas-pump"></i>Petrol</li>
                                    <li class="meta-data"><i class="fa-solid fa-gears"></i>Auto</li>
                                </ul>
                                <div class="pricing-bottom d-flex align-items-center justify-content-between mt-4">
                                    <a href="bike-listing-details.html" class="btn outline-btn btn-sm">View Details</a>
                                    <h5 class="mb-0 text-md-primary">Ksh 6300.00</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--similar bike slider end-->
@endsection
