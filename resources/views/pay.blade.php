@extends('layouts.frame')
@section('body')


        <!--contact section start-->
        <section class="contact-section ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="contact-form-area bg-white rounded">
                            <h4 class="mb-3">Secure Payments for Your Booking</h4>
                            <p>
                                At Rick Drivers, we prioritize the security and convenience of our customers. That's why we offer a variety of payment options to ensure a seamless booking experience. Whether you're booking a rental car, accommodation, or any other service, you can rest assured that your payment is safe and secure
                            </p>
                            <b>PayPal:</b>
                            <br>
                            <b>Account Details: paypal@rickdrivers.com</b>
                            <p>
                                PayPal is a trusted and widely-used payment platform that allows you to pay securely with your PayPal account or directly with your credit or debit card. With PayPal, your financial information is encrypted and protected, providing an extra layer of security for your transactions.
                            </p>
                            <b>
                                Mastercard:
                            </b>
                            <p>
                                As a global leader in payment technology, Mastercard offers fast, secure, and convenient payment solutions. Whether you're using a Mastercard credit card, debit card, or prepaid card, you can enjoy peace of mind knowing that your payment is processed safely and efficiently.
                            </p>
                            <b>Visa:</b>
                            <p>
                                Visa is one of the world's most recognized and accepted payment networks, offering a wide range of credit, debit, and prepaid card options. With Visa, you can make payments securely online, in-store, or on the go, with built-in fraud protection and advanced security features.
                            </p>

                            <b>M-Pesa:</b>
                            <p>
                                M-Pesa is a popular mobile payment solution that allows you to pay for your bookings using your mobile phone. With M-Pesa, you can conveniently transfer funds from your M-Pesa account to complete your booking, making it easy to pay on the go.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="contact-sidebar-widget py-5 px-4 bg-black rounded mt-5 mt-xl-0 text-white">
                            <img src="{{asset('assets/img/mpesa.jpg')}}" class="img-fluid" alt="">
                            <hr style="background-color: white;" class="mt-5">
                            <img src="{{asset('assets/img/visa.png')}}" class="img-fluid" alt="">
                            <img src="{{asset('assets/img/mastercard.png')}}" class="img-fluid" alt="">
                            <br>
                            <br>
                            <h6 class="text-white">Bank Details</h6>
                            <p>KES ACC: 01100359935001</p>
                            <p>Dollar ACC: 02100359935002</p>
                            <hr class="mt-30 mb-40">
                            <h6 class="mb-3 text-white">Social Share</h6>
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
