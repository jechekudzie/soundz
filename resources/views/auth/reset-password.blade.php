@extends('layouts.registration')

@section('content')
    <!-- START -->
    <div class="account-pages">
        <div class="container">
            <div class="row g-0 bg-white align-items-center">

                <div class="col-lg-7">
                    <div class="bg-login">
                        <div class=""></div>
                        <img style="padding-left: 40px" src="{{asset('registration/soundz.png')}}" class="img-fluid"
                             alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="auth-box">
                        <div class="mb-4 mb-md-5 text-center">
                            <a href="javascript:void(0);" class="auth-logo">
                                <img src="{{asset('registration/logo-05.png')}}" height="24" alt="">
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
