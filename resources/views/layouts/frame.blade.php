<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from autohive-html.themetags.com/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Mar 2024 07:13:03 GMT -->
<head>
    <!--required meta tags-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="@themetags" />
    <meta name="twitter:creator" content="@themetags" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Rick Drivers" />
    <meta name="twitter:description" content="Professional Solutions from Self-Driven Rentals to Chauffeur Services." />
    <meta name="twitter:image" content="#" />

    <!--facebook og-->
    <meta property="og:url" content="#" />
    <meta name="twitter:title" content="AutoHive - Car Rental HTML Template" />
    <meta property="og:description" content="Professional Solutions from Self-Driven Rentals to Chauffeur Services." />
    <meta property="og:image" content="#" />
    <meta property="og:image:secure_url" content="#" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="600" />

    <!--meta-->
    <meta name="description" content="Professional Solutions from Self-Driven Rentals to Chauffeur Services." />
    <meta name="author" content="ThemeTags" />

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16" />

    <!--title-->
    <title>Rick Drivers</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <!-- endbuild -->

    <!--custom css-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <style>
        body{
            background-color: #becbff;
        }
        .whatsapp_float{
        position:fixed;
        bottom:75px;
        left:20px;
    }
    </style>

</head>

<body>

    {{-- <div class="ring-preloader w-100 h-100 position-fixed start-0 top-0">
        <div class="lds-dual-ring"></div>
    </div> --}}

    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header area start-->
        <header class="cycle-header header-sticky">
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0">
                    <div class="col-xl-2 col-md-3 col-4">
                        <div class="bc-logo bg-primary text-center p-3">
                            <a href="index.html"><img src="{{asset('assets/img/logo1.png')}}" style="height: 72px; alt="logo" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-xl-10 p-0 col-md-9 col-8">
                        <div class="bc-header-right d-flex align-items-center justify-content-end">
                            <nav class="at_nav_menu d-none d-lg-block bc-nav-menu">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="has-submenu"><a href="#">Listings</a>
                                        <ul class="submenu-wrapper">
                                            <li><a href="{{route('rental_index')}}">Car Hire</a></li>
                                            <li><a href="{{url('car_delivery')}}">Car Delivary</a></li>
                                            <li><a href="{{route('chauffeur_index')}}">Chauffeur</a></li>
                                            <li><a href="{{route('hotel_show')}}">Hotels</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('how-to-pay')}}">How To Pay</a></li>
                                    <li><a href="{{url('about')}}">About Us</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                    {{-- <li class="has-submenu"><a href="#">Pages</a>
                                        <div class="at_megamenu_style_1">
                                            <div class="row">
                                                <div class="col-6">
                                                    <ul class="megamenu_nav">
                                                        <li><a href="car-rental.html">Car Rental</a></li>
                                                        <li><a href="dealers.html">Dealers List</a></li>
                                                        <li><a href="dealer-single.html">Dealer Single</a></li>
                                                        <li><a href="promotion.html">Promotion</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="shop-grid.html">Shop Grid</a></li>
                                                        <li><a href="electric-car-details.html">Electric Car Details <span class="badge bg-primary ms-3">New</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <ul class="megamenu_nav">
                                                        <li><a href="cycle-details.html">Product Details</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="login.html">Login</a></li>
                                                        <li><a href="signup.html">Signup</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </nav>
                            <div class="bc-header-icons d-none d-sm-inline-flex align-items-center gap-3 ms-xxl-5 ms-4">
                                <div class="bc-header-search dropdown">
                                    <a href="{{route('login')}}" class="btn btn-sm btn-primary">Login</a>
                                </div>

                                {{-- <div class="bc-header-wish">
                                    <button type="button">
                                        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.8891 1.76381C17.537 -0.587618 13.7107 -0.587618 11.3593 1.76381L10.8131 2.30965L10.2672 1.76381C7.91582 -0.587936 4.08919 -0.587936 1.73776 1.76381C-0.565924 4.06749 -0.580884 7.71908 1.70307 10.258C3.78619 12.5728 9.92988 17.5739 10.1905 17.7855C10.3675 17.9294 10.5804 17.9994 10.7921 17.9994C10.7991 17.9994 10.8061 17.9994 10.8128 17.9991C11.0317 18.0093 11.2523 17.9342 11.435 17.7855C11.6957 17.5739 17.84 12.5728 19.9238 10.2576C22.2074 7.71908 22.1924 4.06749 19.8891 1.76381ZM18.5042 8.98041C16.8801 10.7847 12.4156 14.506 10.8128 15.8265C9.20993 14.5063 4.74643 10.7854 3.12258 8.98073C1.52929 7.20984 1.51433 4.68781 3.08789 3.11425C3.89154 2.31093 4.94694 1.90894 6.00234 1.90894C7.05775 1.90894 8.11315 2.31061 8.9168 3.11425L10.1173 4.31479C10.2602 4.4577 10.4404 4.543 10.6294 4.57292C10.9363 4.6388 11.2692 4.55318 11.5079 4.31511L12.7091 3.11425C14.3167 1.50728 16.9316 1.5076 18.5383 3.11425C20.1119 4.68781 20.0969 7.20983 18.5042 8.98041Z" fill="black" />
                                        </svg>
                                    </button>
                                </div> --}}
                            </div>
                            <div class="bc-header-contact d-none d-xxl-inline-flex align-items-center gap-3 ms-xxl-5 ms-4">
                                <span class="icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M17.7771 15.8224C17.5663 15.6109 17.3159 15.4431 17.0401 15.3286C16.7643 15.2141 16.4687 15.1551 16.1701 15.1551C15.8715 15.1551 15.5758 15.2141 15.3001 15.3286C15.0243 15.4431 14.7738 15.6109 14.5631 15.8224L13.4665 16.9189C12.2319 16.1354 11.088 15.2172 10.0559 14.1814C9.02224 13.1473 8.1043 12.0037 7.31834 10.7707L8.41488 9.67421C8.62639 9.46344 8.7942 9.21299 8.90871 8.93723C9.02322 8.66146 9.08216 8.3658 9.08216 8.06721C9.08216 7.76862 9.02322 7.47296 8.90871 7.1972C8.7942 6.92143 8.62639 6.67098 8.41488 6.46021L6.27474 4.32763C6.06695 4.11543 5.81861 3.94716 5.5445 3.83284C5.27038 3.71852 4.97608 3.66047 4.67909 3.66214C4.37998 3.66141 4.08369 3.71983 3.80724 3.83404C3.5308 3.94825 3.27967 4.116 3.06831 4.32763L2.03983 5.34855C1.54961 5.87562 1.18375 6.50585 0.969124 7.19291C0.7545 7.87997 0.696574 8.60639 0.799603 9.31878C1.0416 12.1547 2.90194 15.5653 5.76806 18.439C8.63419 21.3127 12.0826 23.1654 14.9185 23.4377C15.1301 23.449 15.3421 23.449 15.5537 23.4377C16.1642 23.4633 16.7736 23.3668 17.3463 23.1538C17.919 22.9409 18.4434 22.6157 18.8887 22.1975L19.9097 21.169C20.1213 20.9576 20.289 20.7065 20.4032 20.43C20.5175 20.1536 20.5759 19.8573 20.5751 19.5582C20.5768 19.2612 20.5188 18.9669 20.4044 18.6928C20.2901 18.4187 20.1219 18.1703 19.9097 17.9625L17.7771 15.8224ZM18.8434 20.1027L17.8149 21.1236C17.4346 21.4405 16.9907 21.6721 16.5132 21.8025C16.0356 21.933 15.5357 21.9594 15.0471 21.8798C12.5893 21.6681 9.45849 19.9288 6.87217 17.3424C4.28584 14.7561 2.5465 11.648 2.31207 9.19022C2.23052 8.70163 2.2559 8.20116 2.38645 7.72332C2.51701 7.24548 2.74964 6.80164 3.06831 6.4224L4.1346 5.39392C4.20526 5.32383 4.28906 5.26838 4.3812 5.23075C4.47334 5.19311 4.572 5.17404 4.67152 5.17461C4.77105 5.17404 4.86971 5.19311 4.96185 5.23075C5.05399 5.26838 5.13779 5.32383 5.20845 5.39392L7.34859 7.55675C7.48944 7.69844 7.5685 7.89011 7.5685 8.0899C7.5685 8.28968 7.48944 8.48135 7.34859 8.62304L5.83613 10.1355C5.71777 10.2533 5.64172 10.4069 5.61983 10.5724C5.59795 10.738 5.63145 10.9061 5.71513 11.0506C6.62064 12.5921 7.72122 14.0104 8.98962 15.2703C10.2496 16.5388 11.6679 17.6393 13.2094 18.5448C13.3539 18.6285 13.522 18.662 13.6875 18.6401C13.8531 18.6182 14.0067 18.5422 14.1245 18.4238L15.6369 16.9114C15.7786 16.7705 15.9703 16.6915 16.1701 16.6915C16.3699 16.6915 16.5615 16.7705 16.7032 16.9114L18.8434 19.0515C18.9134 19.1222 18.9689 19.206 19.0065 19.2981C19.0442 19.3903 19.0632 19.4889 19.0627 19.5884C19.0579 19.7816 18.9795 19.9656 18.8434 20.1027V20.1027Z" fill="white"/>
                                      <path d="M20.159 4.06989C19.1081 3.01492 17.8587 2.17843 16.4829 1.60864C15.1071 1.03885 13.6321 0.747034 12.143 0.750023C11.9424 0.750023 11.75 0.829697 11.6082 0.971519C11.4664 1.11334 11.3867 1.30569 11.3867 1.50626C11.3867 1.70682 11.4664 1.89917 11.6082 2.041C11.75 2.18282 11.9424 2.26249 12.143 2.26249C13.441 2.26245 14.7262 2.51946 15.9244 3.01871C17.1227 3.51796 18.2101 4.24956 19.1241 5.17129C20.0381 6.09301 20.7605 7.18662 21.2497 8.389C21.7388 9.59137 21.985 10.8787 21.974 12.1767C21.974 12.3773 22.0537 12.5696 22.1955 12.7115C22.3373 12.8533 22.5297 12.933 22.7302 12.933C22.9308 12.933 23.1232 12.8533 23.265 12.7115C23.4068 12.5696 23.4865 12.3773 23.4865 12.1767C23.501 10.6718 23.214 9.17914 22.6425 7.78683C22.0711 6.39452 21.2266 5.13071 20.159 4.06989V4.06989Z" fill="white"/>
                                      <path d="M15.8565 8.39543C16.2857 8.82201 16.6252 9.33013 16.855 9.88988C17.0849 10.4496 17.2005 11.0497 17.195 11.6548C17.195 11.8554 17.2747 12.0477 17.4165 12.1895C17.5583 12.3314 17.7507 12.411 17.9512 12.411C18.1518 12.411 18.3442 12.3314 18.486 12.1895C18.6278 12.0477 18.7075 11.8554 18.7075 11.6548C18.7175 10.854 18.5684 10.0591 18.2688 9.31638C17.9693 8.57362 17.5253 7.89773 16.9625 7.32792C16.3997 6.7581 15.7294 6.30569 14.9904 5.99694C14.2514 5.68819 13.4585 5.52923 12.6576 5.5293C12.457 5.5293 12.2647 5.60897 12.1229 5.75079C11.981 5.89261 11.9014 6.08497 11.9014 6.28553C11.9014 6.4861 11.981 6.67845 12.1229 6.82027C12.2647 6.96209 12.457 7.04177 12.6576 7.04177C13.2536 7.04626 13.8428 7.16811 14.3917 7.40038C14.9406 7.63264 15.4383 7.97076 15.8565 8.39543Z" fill="white"/>
                                  </svg>
                              </span>
                                <div>
                                    <span class="fs-sm">Get In touch</span>
                                    <h4 class="mb-0">+90 15 46 47 98 487</h4>
                                </div>
                            </div>
                            <button type="button" class="bc-mobile-menu-toggle d-inline-flex ofcanvus-toggle d-none d-lg-inline-flex">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <button type="button" class="bc-mobile-menu-toggle d-inline-flex mobile-menu-toggle d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header area end-->

        <!--mobile menu start-->
        <div class="mobile-menu position-fixed bg-white deep-shadow">
            <button class="close-menu position-absolute"><i class="fa-solid fa-xmark"></i></button>
            <a href="index.html" class="logo-wrapper bg-secondary d-block mt-4 p-3 rounded-1 text-center"><img src="assets/img/logo1.png" alt="logo" class="img-fluid"></a>
            <nav class="mobile-menu-wrapper mt-40">
                <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="has-submenu"><a href="#">Listings</a>
                        <ul class="submenu-wrapper">
                            <li><a href="{{route('rental_index')}}">Car Hire</a></li>
                            <li><a href="{{url('car_delivery')}}">Car Delivary</a></li>
                            <li><a href="{{route('chauffeur_index')}}">Chauffeur</a></li>
                            <li><a href="{{route('hotel_show')}}">Hotel Bookings</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('about')}}">About Us</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                </ul>
            </nav>
            <div class="contact-info mt-60">
                <div class="bc-header-search dropdown">
                    <a href="{{route('login')}}" class="btn btn-sm btn-primary">Login</a>
                </div>
            </div>
        </div>
        <!--mobile menu end-->

        <!--ofcanvus start-->
        <div class="at_offcanvus_menu position-fixed">
            <button class="at-offcanvus-close"><i class="fa-solid fa-xmark"></i></button>
            <a href="#" class="logo-wrapper d-inline-block mb-5"><img src="assets/img/logo1.png" alt="logo"></a>
            <div class="offcanvus-content">
                <h4 class="mb-4">About Us</h4>
                <a href="{{url('about')}}" class="btn btn-primary mt-4">About Us</a>
            </div>
            <div class="offcanvus-contact">
                <h4 class="mb-4 mt-5">Contact Info</h4>
                <ul class="at_canvus_address">
                    <li>Nairobi</li>
                    <li>+254794365611</li>
                    <li>+254705584853</li>
                    <li>info@rickdrivers.com</li>
                </ul>
            </div>
            <div class="at_canvus_social mt-4">
                <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-btn"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <!--ofcanvus end-->
@yield('body')


        <!--footer section start-->
        <footer class="footer-style-3 position-relative z-1 pt-100" data-background="assets/img/shapes/texture-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-sm-8">
                        <div class="footer-widget footer-info-widget mb-5">
                            <a href="#" class="brand-logo"><img src="{{asset('assets/img/logo1.png')}}" alt="logo" class="img-fluid"></a>
                            <p class="mt-30 mb-20">We serve you to make impression and genuine passione in it.</p>
                            <ul class="footer-contact-info">
                                <li><a href="mailto:autohive@example.com"><span class="me-3"><i class="flaticon-mail"></i></span>info@rickdrivers.com</a></li>
                                <li><a href="tel:+254794365611"><span class="me-3"><i class="flaticon-phone-call"></i></span>+254794365611</a></li>
                                <li><span class="me-3"><i class="flaticon-alarm-clock"></i></span>Mon-Sat 08:00pm - 7:00pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <div class="footer-widget footer-nav-widget mb-5">
                            <h6 class="widget-title text-white mb-30">Quick links</h6>
                            <ul class="footer-nav">
                                <li><a href="{{route('rental_index')}}">Car Hire</a></li>
                                <li><a href="{{route('chauffeur_index')}}">Chauffeur</a></li>
                                <li><a href="{{route('hotel_show')}}">Hotels</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-6">
                        <div class="footer-widget footer-nav-widget mb-5">
                            <h6 class="widget-title text-white mb-30">More Links</h6>
                            <ul class="footer-nav">
                                <li><a href="{{url('about')}}">About</a></li>
                                <li><a href="{{url('contact')}}">Contacts</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer-widget footer-gallery-widget mb-5">

                        </div>
                    </div>
                </div>
                <div class="copyright-style-2 d-flex align-items-center justify-content-between flex-wrap flex-md-nowrap">
                    <p class="text-white mb-0">© All rights reserved.<a href="#">Pivot Networks</a></p>
                    {{-- <ul class="footer-payment d-flex align-items-center mt-3 mt-md-0">
                        <li><img src="assets/img/visa.png" alt="payment" class="img-fluid"></li>
                        <li><img src="assets/img/mastercard.png" alt="payment" class="img-fluid"></li>
                        <li><img src="assets/img/payoneer.png" alt="payment" class="img-fluid"></li>
                        <li><img src="assets/img/paypal.png" alt="payment" class="img-fluid"></li>
                    </ul> --}}
                </div>
            </div>
        </footer>
        <!--footer section end-->

    </div>
    <!-- main content wrapper ends -->

    <div class="whatsapp_float">
        <a href="https://wa.me/+254705584853" target="_blank"><img src='{{asset('assets/img/whatsapp.png')}}' style="width:50px" class="whatsapp_float_btn"/></a>
    </div>
    <!--scrolltop button-->
    <button class="theme-scrolltop-btn"><i class="fa-regular fa-hand-pointer"></i></button>
    <!--scrolltop button end-->

    <!--build:js-->
    <script src="{{asset('assets/js/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/appear.js')}}"></script>
    <script src="{{asset('assets/js/vendors/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/easing.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/massonry.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap-slider.js')}}"></script>
    <script src="{{asset('assets/js/vendors/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/vendors/counterup.js')}}"></script>
    <script src="{{asset('assets/js/vendors/isotop.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/date-picker.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/progressbar.js')}}"></script>
    <script src="{{asset('assets/js/vendors/slick.js')}}"></script>
    <script src="{{asset('assets/js/vendors/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/custom-scrollbar.js')}}"></script>
    <script src="{{asset('assets/js/vendors/price-range.js')}}"></script>
    <script src="{{asset('assets/js/vendors/image-rotate.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/typeit.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!--endbuild-->
</body>


</html>

