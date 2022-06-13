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
                                <h4 class="fw-normal">Forgot password to <span class="fw-bold">SOUNDZcmr</span></h4>
                                <p class="text-muted mb-0">Forgot your password ?</p>
                            </div>
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="POST" action="{{ route('password.update') }}" class="form-custom mt-3">
                                @csrf
                                <div class="mb-3">
                                    <input type="email" name="email" value="{{old('email',$request->email)}}"
                                           class="form-control"
                                           id="username">
                                </div>

                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="username"
                                           placeholder="New Password">

                                </div>

                                <div class="mb-3">
                                    <input type="password" name="password_confirmation" class="form-control"
                                           id="userpassword"
                                           placeholder="Confirm New Password">
                                </div>

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">


                                <div class="text-center mt-3">
                                    <button class="btn btn-success rounded-pill shadow-none w-50" type="submit">Reset
                                        Password
                                    </button>
                                </div>
                                <hr>
                                <div class="mt-3 text-center">
                                    <p class="mb-0 text-muted">Remember It ?<a href="{{url('/login')}}"
                                                                               class="text-success fw-bold text-decoraton-underline ms-1">
                                            Sign in
                                        </a></p>
                                </div>
                            </form>
                            <!-- end form -->
                        </div><!-- auth content -->
                    </div><!-- end authbox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- END -->

@stop
