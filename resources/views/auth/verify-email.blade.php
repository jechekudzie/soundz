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
                            <form>
                                <div class="mb-3 pb-2">
                                    <div class="avatar-md mx-auto">
                                        <span class="avatar-title text-success bg-soft-success rounded-circle">
                                            <i class="mdi mdi-email display-6"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <h4>Verify Your Email</h4>
                                    <p class="text-muted">
                                        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}

                                    </p>
                                    @if (session('status') == 'verification-link-sent')
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                        </div>
                                    @endif
                                </div>
                                <hr/>

                                <div class="mt-3 text-center">
                                    <p class="mb-0">If you did not receive an email.
                                    </p>
                                </div>

                                <form method="POST" action="{{ route('verification.send') }}">
                                    @csrf

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-success shadow-none w-50 rounded-pill">Re-Send
                                                email</button>
                                        </div>
                                </form>

                                <div class="mt-3 text-center">
                                    <p class="mb-0">  Or Simply Log Out
                                    </p>
                                </div>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-success shadow-none w-50 rounded-pill">
                                            {{ __('Log Out') }}
                                        </button>
                                    </div>

                                </form>
                                <hr>

                            </form><!-- end form -->
                        </div><!-- auth content -->
                    </div><!-- end authbox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- END -->

@stop
