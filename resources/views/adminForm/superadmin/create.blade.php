@extends('layouts.app_superadmin', ['activePage' => 'superadmincreate', 'titlePage' => __('Create Account')])

@section('content')

<div class="content">
    <div class="pagehead-link">
        <a class="head-link" href="{{ route('superadmin.list') }}"> List  </a>
        &#10095;&#10095;
        <a class="head-link" href="#"> Create Account </a>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('adminForm.superadmin.insert') }}">
                            @csrf
                            <div class="card mb-3">
                                <div class="card-header  text-center" style="margin-top:-20px;background-color: #e8e8e8;">
                                    <h4 class="card-title"><strong>{{ __('Create Account') }}</strong></h4>
                                </div>
                                <div class="row">
                                    <div class="col-4" style="background-color: #515357;margin-left:15px;">
                                        <img src="{{ asset('material/img/create-1.png')}}" width=100% >
                                    </div>
                                    <div class="col-6" style="margin-top:30px;">
                                        <div class="card-body ">
                                            <!-- name -->
                                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}" required>
                                                </div>
                                                @if ($errors->has('name'))
                                                    <div id="name-error" class="error text-danger pl-3" for="name" style="display: block;">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- email -->
                                            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    </div>
                                                    <input type="text" name="email" class="form-control" placeholder="{{ __('email...') }}" value="{{ old('email') }}" required>
                                                </div>
                                                @if ($errors->has('email'))
                                                    <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Password -->
                                            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                    </div>
                                                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" required>
                                                </div>
                                                @if ($errors->has('password'))
                                                    <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- confirm password -->
                                            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                    </div>
                                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}" required>
                                                </div>
                                                @if ($errors->has('password_confirmation'))
                                                    <div id="password_confirmation-error" class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- status -->
                                            <div class="bmd-form-group{{ $errors->has('status') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">check_circle_outline</i>
                                                    </span>
                                                    </div>
                                                    <select class="selectpicker" id="status" name="status" data-style="select-with-transition" title="{{ __('Status...') }}" data-size="7" style="width: 400px" required>
                                                        <option value="admin">admin </option>
                                                        <option value="user">user</option>
                                                    </select>                                                   
                                                </div>
                                                @if ($errors->has('status'))
                                                    <div id="status-error" class="error text-danger pl-3" for="status" style="display: block;">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Under  -->
                                            <div class="bmd-form-group{{ $errors->has('under') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">admin_panel_settings</i>
                                                        </span>
                                                    </div>
                                                    <!-- query from db -->
                                                    <select class="selectpicker" id="under" name="under" data-style="select-with-transition" title="{{ __('Under...') }}" >
                                                        <option value="admin1">admin1 </option>
                                                        <option value="admin2">admin2</option>
                                                    </select>
                                                </div>
                                                @if ($errors->has('under'))
                                                    <div id="under-error" class="error text-danger pl-3" for="under" style="display: block;">
                                                    <strong>{{ $errors->first('under') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-footer justify-content-center">
                                            <button type="submit" class="btn btn-warning btn-link btn-lg">{{ __('Create account') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection