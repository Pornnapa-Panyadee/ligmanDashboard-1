@extends('layouts.appLog', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Material Dashboard')])

@section('content')
<div class="row align-items-center" style="height:100%; ">
    <div class="col-md-8 ml-auto mr-auto mb-3 text-center" >
        <img src="{{ asset('material/img/logo/ligman_logo_20_2c_fn_200.png') }}" widht="100%" >
    </div>
    <div class="col-md-4 ml-auto mr-auto mb-3 text-center" style="height:100% ">
        <div class="login_layout"> 
            <div class="login_form">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden mb-3">
                        <div class="card-header card-header-primary text-center" style="margin-top: -30px;height:60px;">
                            <h3 class="card-title"><strong>{{ __('Login') }}</strong></h3>
                        </div>
                        <div class="card-body">
                            <p class="card-description text-center"></p>
                            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                        <i class="material-icons">email</i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" class="form-control"
                                        placeholder="{{ __('Email...') }}"
                                        {{-- value="{{ old('email', 'super.admin@ligman.com') }}"  --}}
                                        required>
                                </div>
                                @if ($errors->has('email'))
                                    <div id="email-error" class="error text-danger pl-3" for="email"style="display: block;">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" id="password" class="form-control"
                                        placeholder="{{ __('Password...') }}"
                                        {{-- value="{{ !$errors->has('password') ? 'cMu678@@' : '' }}"  --}}
                                        required>
                                </div>
                                @if ($errors->has('password'))
                                    <div id="password-error" class="error text-danger pl-3" for="password"  style="display: block;">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-check mr-auto ml-3 mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                    {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="bmd-form-group">
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                            <div class="bmd-form-group">
                                @error('g-recaptcha-response')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-outline-success">{{ __('Log In') }}</button>
                        </div>
                    </div>
                </form>
                <!-- <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8 text-right">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-light">
                                <small>{{ __('Forgot password?') }}</small>
                            </a>
                        @endif
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

<style>
    .g-recaptcha {
        text-align: -webkit-center;
        text-align: -moz-center;
        text-align: -o-center;
        text-align: -ms-center;
    }
</style>
@endsection
