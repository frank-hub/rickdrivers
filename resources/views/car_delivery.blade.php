@extends('layouts.frame')
@section('body')


        <!--contact section start-->
        <section class="contact-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-form-area bg-white rounded">
                            <h4 class="mb-3">Need a Car Delivered? We Deliver Everywhere!
                            </h4>
                            <p>
                                Within Nairobi:  Bought a car? Moving? We provide safe and efficient door-to-door car delivery within Nairobi. Get a free quote & schedule your delivery today!
                            </p>

                            <div class="row">
                                <div class="col-md-4">
                                    <b>
                                        Price Within Nairobi
                                    </b>
                                </div>
                                <div class="col-md-1">
                                    |
                                </div>
                                <div class="col-md-4">
                                    700Ksh - 1000Ksh
                                </div>
                            </div>
                            <hr>
                            <p class="pt-5">
                                Beyond Nairobi:  Moving to another city or even overseas? We offer nationwide car shipping and connect you with international partners.
                            </p>

                            Request A  Quote <a href="https://wa.me/+254705584853" target="_blank"><img src='{{asset('assets/img/whatsapp.png')}}' style="width:35px" class="whatsapp_float_btn"/></a>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="contact-sidebar-widget py-5 px-4 bg-white rounded mt-5 mt-xl-0">
                            <img src="{{asset('assets/img/dealers/02.jpg')}}" class="img-fluid" alt="">
                            <hr class="mt-30 mb-40">
                            <h6 class="mb-3">Social Share</h6>
                            <div class="contact-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact section end-->

@endsection
