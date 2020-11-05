
@extends('layouts.auth')

@section('pageTitle', 'Register')

@section('content')
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100">
                <div class="h-100 no-gutters row">
                    <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4>
                                <div>Welcome,</div>
                                <span>It only takes a <span class="text-success">few seconds</span> to create your account</span></h4>
                            <div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="name" class=""><span class="text-danger">*</span>Buisness Name</label>
                                                <input name="name" id="name" placeholder="Business Name here..." type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" autofocus required>
                                                @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
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
                                                <label for="phone_no" class=""><span class="text-danger">*</span> Phone Number</label>
                                                <input name="phone_no" id="phone_no" placeholder="+4400000000" type="tel" class="form-control{{ $errors->has('phone_no') ? ' is-invalid' : '' }}" value="{{ old('phone_no') }}" required>
                                                @if ($errors->has('phone_no'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('phone_no') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="address" class=""><span class="text-danger">*</span>Address</label>
                                                <input name="address" id="address" placeholder="Business Address here..." type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" value="{{ old('address') }}" required>
                                                @if ($errors->has('address'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('address') }}</strong>
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
                                    <div class="mt-3 position-relative form-check">
                                        <input name="check" id="exampleCheck" type="checkbox" class="form-check-input" required>
                                        <label for="exampleCheck" class="form-check-label" >Accept our <a href="javascript:void(0);">Terms and Conditions</a>.</label>
                                    </div>
                                    <div class="mt-4 d-flex align-items-center">
                                        <h5 class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-primary">Sign in</a></h5>
                                        <div class="ml-auto">
                                            <button type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg">Create Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="d-lg-flex d-xs-none col-lg-4">
                        <div class="slider-light">
                            <div class="slick-slider slick-initialized">
                                <div>
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                        <div class="slider-content"><h3>{{config('app.name')}}</h3>
                                            <p>{{config('app.description')}} {{config('app.name')}}</p></div>
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