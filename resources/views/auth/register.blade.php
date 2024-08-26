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
                            <h1 class="text-white">Signup</h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--breadcrumb section end-->

<!--login section-->
<section class="login-section ptb-120 position-relative z-1 overflow-hidden">
    <span class="bg-primary-blur position-absolute z--1 start-50 top-0 tarnslate-middle-x"></span>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-xxl-4">
                <div class="login-form-area">
                    <h2 class="mb-5">Signup!<br>For New Account.</h2>
                    <form class="login-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <label class="fw-semibold text-secondary mb-2">Name</label>
                        <input type="name" name="name" placeholder="Enter your email" class="w-100 rounded">

                        <label class="fw-semibold text-secondary mb-2 mt-4">Email</label>
                        <input type="email" placeholder="Enter your email" class="w-100 rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        <label class="fw-semibold text-secondary mb-2 mt-4">Choose Your Role</label>
                        <select name="role" required class="form-control w-100 rounded" id="">
                            <option value="">Select Role</option>
                            <option value="Chauffeur">Chauffeur</option>
                            <option value="Car Rental">Car Rental</option>
                        </select>
                        <label class="fw-semibold text-secondary mb-2 mt-4">Password</label>
                        <input type="password" placeholder="Enter your password" class="w-100 rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label class="fw-semibold text-secondary mb-2 mt-4">Confirm Password</label>
                        <input type="password" placeholder="Enter your password" class="w-100 rounded" name="password_confirmation" required autocomplete="new-password">


                        <div class="cookies-area d-flex align-items-center flex-wrap justify-content-between mt-3">
                            <label><input type="checkbox" class="me-1">Remember for 30 days</label>
                            <a href="#" class="forgot-pass">Forgot Password</a>
                        </div>
                        <div class="login-btns d-flex align-items-center flex-wrap flex-sm-nowrap mt-40">
                            <button type="submit" class="btn btn-primary">Sign up</button>

                        </div>
                        <p class="text-xl-center mt-4">Have an account? <a href="{{route('login')}}">Sign In</a></p>
                    </form>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 offset-xl-2">
                <div class="login-form-right position-relative z-1 mt-5 mt-xl-0">
                    <img src="assets/img/login-illustration.png" alt="not found" class="img-fluid">
                    <span class="bg-star-color position-absolute z--1 end-0 bottom-0"></span>
                    <img src="assets/img/shapes/ball.png" alt="not found" class="position-absolute ball-shape z--1">
                </div>
            </div>
        </div>
    </div>
</section>
<!--login section end-->

@endsection
