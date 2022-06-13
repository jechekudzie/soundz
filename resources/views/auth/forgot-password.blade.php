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
                <!-- end col -->

                <div class="col-lg-6">
                    <div class="auth-box">
                        <div class="mb-4 mb-md-5 text-center">
                            <a href="javascript:void(0);" class="auth-logo">
                                <img src="images/logo-dark.png" height="24" alt="">
                            </a>
                        </div>

                        <div class="auth-content">
                            <div class="mb-3 pb-3 text-center">
                                <h4 class="fw-normal">Recover password to <span class="fw-bold">SOUNDZcmr</span></h4>
                                <p class="text-muted mb-0">Reset-Password with SOUNDZcmr.</p>
                            </div>
                            <div class="alert alert-success text-center rounded-pill mb-4" role="alert">
                                Enter your Email and instructions will be sent to you!
                            </div>

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')"/>

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                            <form method="POST" action="{{ route('password.email') }}" class="form-custom mt-3">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="email" class="form-control" id="username"
                                           placeholder="Enter e-mail">

                                </div>
                                <div class="text-center mt-6">
                                    <button class="btn btn-success rounded-pill shadow-none w-50" type="submit"> {{
                                    __(' Send Reset Link') }}</button>
                                </div>
                            </form>

                            <hr/>
                            <div class="mt-3 text-center">
                                <p class="mb-0" style="font-weight: bolder;">OR if you have just remembered your
                                    password <i class="fa-solid fa-face-smile success"></i>
                                </p>
                                <a href="{{url('/login')}}" class="btn btn-success rounded-pill shadow-none w-50">
                                    Log in
                                </a>
                            </div>
                            <!-- end form -->
                        </div><!-- auth content -->
                    </div><!-- end authbox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- END -->

@stop
