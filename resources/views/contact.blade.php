@extends('layouts.frame')
@section('body')


        <!--contact section start-->
        <section class="contact-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-form-area bg-white rounded">
                            <h4 class="mb-3">Need Help? Send Message</h4>
                            <form action="#" class="ct-form-wrapper">
                                <div class="row g-4">
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label class="fw-semibold text-secondary mb-1">Name</label>
                                            <input type="text" placeholder="Full Name" class="border w-100 rounded">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label class="fw-semibold text-secondary mb-1">Email</label>
                                            <input type="email" placeholder="Email" class="border w-100 rounded">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label class="fw-semibold text-secondary mb-1">Phone</label>
                                            <input type="tel" placeholder="Full Name" class="border w-100 rounded">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-field">
                                            <label class="fw-semibold text-secondary mb-1">Service</label>
                                            <select class="form-select">
                                                <option>Select Service</option>
                                                <option>Chauffeur</option>
                                                <option>Car Rental</option>
                                                <option>Hotel Booking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-field">
                                            <label class="fw-semibold text-secondary mb-1">Message</label>
                                            <textarea placeholder="Message" class="border w-100 rounded" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-md mt-4" type="submit">Get in Touch</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="contact-sidebar-widget py-5 px-4 bg-white rounded mt-5 mt-xl-0">
                            <h4 class="mb-4">Contact Details</h4>
                            <ul class="fs-md">
                                <li class="fw-500"><strong class="fw-bold text-secondary">Office Address: </strong>Nairobi,Mirema 1st Avenue</li>
                                {{-- <li class="mt-30 fw-500"><strong class="fw-bold text-secondary">Office Address-2: </strong>Office</li> --}}
                            </ul>
                            <hr class="mt-4 mb-4">
                            <ul class="contact-info">
                                <li class="d-flex align-items-center">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i class="fa-brands fa-whatsapp"></i></span>
                                    <div class="ms-3 info-content">
                                        <span class="d-block">Give Us A Call:</span>
                                        <a href="tel:254794365611">+254 794 365 611</a>
                                    </div>

                                </li>
                                <li class="d-flex align-items-center">
                                    <span class="icon-wrapper d-flex align-items-center justify-content-center rounded bg-light-primary rounded-circle flex-shrink-0"><i class="fa-regular fa-envelope"></i></span>
                                    <div class="ms-3 info-content">
                                        <span class="d-block">General communication</span>
                                        <a href="maito:info@rickdrivers.com">info@rickdrivers.com</a>
                                    </div>
                                </li>
                            </ul>
                            <hr class="mt-30 mb-40">
                            <h6 class="mb-3">Social Share</h6>
                            <div class="contact-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-dribbble "></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact section end-->

@endsection
