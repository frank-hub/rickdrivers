@extends('layouts.frame')

@section('body')
        <!--equipment-listing start-->
        <section class="eq-inventory-listing ptb-120">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xxl-9 col-xl-8">
                        <div class="equipment-details-content">
                            <div class="thumbnail position-relative">
                                <img src="{{asset('hotels/'.$hotel->image)}}" alt="not found" class="img-fluid rounded-10" style="
                                    object-fit: cover;
                                    object-position: 100% 0;
                                    height: 500px;
                                    width: 800px;">
                                <div class="eqd-title-box bg-white position-relative z-1">
                                    <h3 class="mb-2">{{$hotel->name}}</h3>
                                    <span class="fs-sm">
                                    <span class="me-2">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.4944 7.36175L9.70389 0.526513C9.69519 0.517715 9.68617 0.509177 9.67698 0.500901C8.9355 -0.164854 7.81504 -0.167233 7.07072 0.495394C7.06147 0.503638 7.05248 0.512143 7.04371 0.520876L0.191338 7.35976C-0.0634151 7.61406 -0.0638388 8.02669 0.190426 8.28144C0.444723 8.53619 0.857353 8.53658 1.11207 8.28235L1.62927 7.76617V13.3932C1.62927 14.8306 2.7987 16 4.23611 16H6.58227C6.94221 16 7.23398 15.7082 7.23398 15.3483V10.0369H9.51496V15.3483C9.51496 15.7082 9.80673 16 10.1667 16H12.4477C13.8851 16 15.0545 14.8306 15.0545 13.3932C15.0545 13.0332 14.7627 12.7414 14.4028 12.7414C14.0428 12.7414 13.7511 13.0332 13.7511 13.3932C13.7511 14.1119 13.1664 14.6966 12.4477 14.6966H10.8184V9.38514C10.8184 9.0252 10.5266 8.73343 10.1667 8.73343H6.58227C6.22233 8.73343 5.93056 9.0252 5.93056 9.38514V14.6966H4.23611C3.51741 14.6966 2.93269 14.1119 2.93269 13.3932V6.48503C2.93269 6.47852 2.93259 6.47203 2.9324 6.46558L7.9491 1.45878C8.19326 1.25144 8.55138 1.25222 8.7946 1.46058L13.7511 6.44974V10.1346C13.7511 10.4945 14.0428 10.7863 14.4028 10.7863C14.7627 10.7863 15.0545 10.4945 15.0545 10.1346V7.76173L15.5697 8.2804C15.6971 8.40862 15.8645 8.47278 16.0321 8.47278C16.1982 8.47278 16.3643 8.40966 16.4914 8.28339C16.7467 8.02972 16.7481 7.61709 16.4944 7.36175Z" fill="#5F5F5F"/>
                                        </svg>
                                    </span>
                                    {{$hotel->location}}
                                    </span>
                                </div>
                            </div>
                            <ul class="nav nav-tabs eq-about-navs flex-wrap mt-70 mb-5">
                                <li><a href="#specification" data-bs-toggle="tab">Specification</a></li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane fade show active" id="specification">
                                    <h4 class="eqd-title mb-30 position-relative d-inline-block">Specification</h4>
                                    <div class="table-responsive">
                                        <table class="w-100 table eqd-table">
                                            <tr>
                                                <td>Rooms:</td>
                                                <td>{{$hotel->rooms}}</td>
                                            </tr>
                                            <tr>
                                                <td>Availability:</td>
                                                <td>
                                                    @if ($hotel->status == '1')
                                                    Available
                                                    @else
                                                    Unavailable
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price:</td>
                                                <td>Ksh. {{$hotel->price}}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4">
                        <div class="equipment-details-sidebar">
                            <div class="eq_booking_widget rounded-10 bg-white">
                                <div class="booking_money bg-secondary pt-40 pb-40">
                                    <h3 class="text-white text-center mb-0">Ksh. {{$hotel->price}}</h3>
                                </div>
                                <form class="eqd_booking_form" method="POST" action="{{route('hotel_book')}}">
                                    @csrf
                                    <input type="text" name="hotel_id" value="{{$hotel->id}}" hidden id="">

                                    <div class="input-group mt-3">
                                        <label class="fs-sm fw-semibold text-secondary mb-2">Full Name*</label>
                                        <input type="text" required name="fname" placeholder="Destination" class="d-block border w-100 rounded">
                                    </div>
                                    <div class="input-group mt-3">
                                        <label class="fs-sm fw-semibold text-secondary mb-2">ID No./Passport</label>
                                        <input type="text" required name="identification" placeholder="Vehicle Type" class="d-block border w-100 rounded">
                                    </div>
                                    <div class="input-group mt-3">
                                        <label class="fs-sm fw-semibold text-secondary mb-2">Phone No*</label>
                                        <input type="text" required name="contact" placeholder="Phone No" class="d-block border w-100 rounded">
                                    </div>
                                    <div class="input-group mt-3">
                                        <label class="fs-sm fw-semibold text-secondary mb-2">Payment Method*</label>
                                        <input type="text" required name="payment_method" placeholder="Payment Method" class="d-block border w-100 rounded">
                                    </div>
                                    <label class="fw-bold text-secondary">Date & Time</label>
                                    <div class="date-field mt-2 position-relative">
                                        <input type="text" required name="date_time" class="border w-100 rounded theme-date-input" placeholder="01/04/2024 11:36 AM">
                                    </div>
                                    <label class="fw-bold text-secondary">Special Instructions</label>
                                    <textarea name="s_instructions" required style="color: blue;background-color: #becbff" cols="30" rows="4"></textarea>
                                    <button type="submit" class="btn eq-primary-btn w-100 mt-50">Book Now</button>
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--equipment listing end-->
@endsection
