@extends('layouts.registration')

@section('content')
    <!-- START -->
    <div class="account-pages">
        <div class="container">
            <div class="row g-0 bg-white align-items-center">

                <div class="col-lg-6">
                    <div class="bg-login">
                        <div class=""></div>
                        <img style="padding-left: 40px" src="{{asset('registration/soundz.png')}}" class="img-fluid"
                             alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="auth-box">
                        <div class="mb-4 mb-md-5 text-center">
                            <a href="javascript:void(0);" class="auth-logo">
                                <img src="{{asset('registration/logo-05.png')}}" height="24" alt="">
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
