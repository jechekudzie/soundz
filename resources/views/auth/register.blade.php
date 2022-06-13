@extends('layouts.registration')

@section('content')
    <!-- START -->
    <div class="account-pages">
        <div class="container">
            <div class="row g-0 bg-white align-items-center">

                <div class="col-lg-6">
                    <div class="bg-login">
                        <div class="bg-overlay"></div>
                        <img src="{{asset('registration/images/bg-img-2.png')}}" class="img-fluid" alt="">
                        <div class="auth-contain">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="text-center text-white my-4 p-4">
                                            <h3>Learn and Practice</h3>
                                            <p class="text-white-50 f-20 mt-3">No matter what experience you have.We
                                                will help you start
                                                coding in minutes.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="text-center text-white my-4 p-4">
                                            <h3>Learn and Practice</h3>
                                            <p class="text-white-50 f-20 mt-3">No matter what experience you have.We
                                                will help you start
                                                coding in minutes.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="text-center text-white my-4 p-4">
                                            <h3>Learn and Practice</h3>
                                            <p class="text-white-50 f-20 mt-3">No matter what experience you have.We
                                                will help you start
                                                coding in minutes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="auth-box">
                        <div class="mb-4 mb-md-5 text-center">
                            <a href="javascript:void(0);" class="auth-logo">
                                <img src="images/logo-dark.png" height="24" alt="">
                            </a>
                        </div>

                        <div class="auth-content">
                            <div class="mb-3 pb-3 text-center">
                                <h4 class="fw-normal">Register Account to <span class="fw-bold">SOUNDZcmr</span></h4>
                                <p class="text-muted mb-0">Sign in to continue to SOUNDZcmr.</p>
                            </div>
                            <!-- end col -->
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form action="{{route('register')}}" method="post" class="form-custom mt-3">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label" for="username">Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                           placeholder="Enter  email" value="{{old('email')}}">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" name="name" class="form-control" id="username"
                                           placeholder="Enter username" value="{{old('name')}}">
                                </div>
                                <div class="form-password mb-3 auth-pass-inputgroup">
                                    <label class="form-label" for="userpassword">Password</label>
                                    <div class="position-relative">
                                        <input type="password" name="password" class="form-control" id="password-input"
                                               placeholder="Enter password" value="{{old('email')}}">
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                            <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="form-password mb-3 auth-pass-inputgroup">
                                    <label class="form-label" for="userpassword">Confirm Password</label>
                                    <div class="position-relative">
                                        <input type="password" name="password_confirmation" class="form-control"
                                               id="password-input"
                                               placeholder="Re-Enter password" value="{{old('email')}}">
                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none" id="password-addon">
                                            <i class="mdi mdi-eye-outline f-16 text-muted"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-muted f-15" for="flexCheckDefault">
                                        I agree to all the term and condition.
                                    </label>
                                </div>

                                <div class="text-center mt-3">
                                    <button class="btn btn-success shadow-none rounded-pill w-50" type="submit">Register</button>
                                </div>
                                <hr>
                                <div class="mt-3 text-center">
                                    <p class="mb-0 text-muted">Already have an account ?<a href="{{url('/login')}}"
                                                                                           class="text-success fw-bold text-decoraton-underline ms-1"> Sign in
                                        </a></p>
                                </div>
                                <div class="mt-3 text-center">
                                    <p class="mb-0" style="font-weight: bolder;">OR Sign-up With</p>
                                </div>
                            </form>

                            <!-- end form -->
                            <div class="row justify-content-center align-items-center mt-4 mt-md-5 ">
                                <div class="col-4">
                                    <div class="client-images my-3 my-md-0">
                                        <a href="{{url('/login/facebook')}}" class="btn btn-success rounded-pill"><i
                                                class="fab
                                        fa-facebook-f"></i></a>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-4">
                                    <div class="client-images my-3 my-md-0">
                                        <a href="{{url('/login/google')}}" class="btn btn-success  rounded-pill"><i
                                                class="fa-brands fa-google"></i></a>

                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="client-images my-3 my-md-0" >
                                        <a href="{{url('/login/apple')}}" class="btn btn-success  rounded-pill"><i
                                                class="fa-brands
                                        fa-apple"></i></a>

                                    </div>
                                </div>
                                <!-- end col -->
                            </div><!-- end row -->
                        </div><!-- auth content -->
                    </div>
                    <!-- end authbox -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- END -->
@stop
