@extends('layouts.auth')

@section('pageTitle', 'Verify')

@section('content')
@if(session('resent'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="d-none d-lg-block col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content"><h3>{{config('app.name')}}</h3>
                                            <p>{{config('app.description')}} {{config('app.name')}}</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="position-relative slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content"><h3>{{config('app.name')}}</h3>
                                            <p>{{config('app.description')}} {{config('app.name')}}</p></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-sunny-morning" tabindex="-1">
                                        <div class="slide-img-bg opacity-6" style="background-image: url('assets/images/originals/citydark.jpg');"></div>
                                        <div class="slider-content"><h3>{{config('app.name')}}</h3>
                                            <p>{{config('app.description')}} {{config('app.name')}}</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-8 col-lg-6">
                            <div class="app-logo"></div>
                            <h4>
                                <div>{{ __('Verify Your Email Address') }}</div>
                                  
                                <span>{{ __('Before proceeding, please check your email for a verification link.') }}</span></h4>
                            <div>
                                    
                                    <div class="mt-4 d-flex align-items-center">{{ __('If you did not receive the email') }},
                                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __(' click here to request another') }}</button>.
                                        </form>
                                    </div>
                                
                            </div>
                            <div class="mt-4 d-flex align-items-center">
                                <div class="ml-auto">
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-sm">Logout</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
