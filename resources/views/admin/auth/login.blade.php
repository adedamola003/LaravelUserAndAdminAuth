@extends('layouts.auth')

@section('pageTitle', 'Admin-Login')

@section('content')
<div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100 mx-auto">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="h5 modal-title text-center">
                                        <h4 class="mt-2">
                                            <div>Welcome back,</div>
                                            <span>Please sign in to your account below.</span>
                                        </h4>
                                    </div>
                                    <form method="POST" action="{{ route($loginRoute) }}">
                                    @csrf
                                        <div class="form-row">
                                            <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="email" id="email" placeholder="Email here..." type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="password" id="password" placeholder="Password here..." type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        </div>
                                        <div class="position-relative form-check">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="form-check-input">
                                            <label for="remember" class="form-check-label">{{ __('Keep me logged in') }}</label>
                                        </div>
                                         <div class="modal-footer clearfix">
                                    <div class="float-left">
                                        @if (Route::has('password.request'))
                                            <a class="btn-lg btn btn-link" href="{{ route($forgotPasswordRoute) }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg">Login to Dashboard</button>
                                    </div>
                                </div>
                                    </form>
                                    <div class="divider"></div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © {{config('app.name')}} {{date("Y")}}</div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection


