@extends('layouts.auth')

@section('pageTitle', 'Reset Password')

@section('content')
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4>
                                <div>Welcome,</div>
                                <span>It only takes a <span class="text-success">few seconds</span> to create your account</span></h4>
                            <div>
                                <form method="POST" action="{{ route($passwordUpdateRoute) }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="email" class=""><span class="text-danger">*</span> Email</label>
                                                <input name="email" id="email" placeholder="Email here..." type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="password" class=""><span class="text-danger">*</span> Password</label>
                                                <input name="password" id="password" placeholder="Password here..." type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="password_confirm" class=""><span class="text-danger">*</span> Repeat Password</label>
                                                <input name="password_confirmation" id="password_confirm" placeholder="Repeat Password here..." type="password" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center">
                                        <div class="ml-auto">
                                            <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-xs-none col-lg-5">
                        <div class="slider-light">
                            <div class="slick-slider slick-initialized">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                            <p>Easily exclude the components you don't require. Lightweight, consistent Bootstrap based styles across all elements and components</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
