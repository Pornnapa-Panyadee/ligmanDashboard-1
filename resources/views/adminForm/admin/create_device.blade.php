@extends('layouts.app_admin', ['activePage' => 'create_device', 'titlePage' => __('Create Device')])

@section('content')

<div class="content">
    <div class="pagehead-link">
        <a class="head-link" href="{{ route('admin.list') }}"> List  </a>
        &#10095;&#10095;
        <a class="head-link" href="#"> Create Device </a>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card">
                                <div class="card-header  text-center" style="margin-top:-20px;background-color: #e8e8e8;">
                                    <h4 class="card-title"><strong>{{ __('Create Device') }}</strong></h4>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-10" style="margin-top:50px;">
                                        <div class="card-body ">
                                            <!-- devices -->
                                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">devices</i>
                                                        </span>
                                                    </div>
                                                    <!-- query from db -->
                                                    <select class="selectpicker" id="devices" name="devices" data-style="select-with-transition" title="{{ __('Device...') }}" required>
                                                        @foreach ($device_list as $device)
                                                        <option value={{ $device->device_name }}>{{ $device->device_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                @if ($errors->has('devices'))
                                                    <div id="devices-error" class="error text-danger pl-3" for="devices" style="display: block;">
                                                        <strong>{{ $errors->first('devices') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Username -->
                                            <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    </div>
                                                    <input type="text" id="username" name="username" class="form-control" placeholder="{{ __('username...') }}"  required>
                                                </div>
                                                @if ($errors->has('username'))
                                                    <div id="username-error" class="error text-danger pl-3" for="username" style="display: block;">
                                                    <strong>{{ $errors->first('username') }}</strong>
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
                                            
                                            <!-- link -->
                                            <div class="bmd-form-group{{ $errors->has('link') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">link</i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="link" id="link" class="form-control" placeholder="{{ __('Link (url/ip/api)...') }}" required>
                                                                                                    
                                                </div>
                                                @if ($errors->has('link'))
                                                    <div id="link-error" class="error text-danger pl-3" for="link" style="display: block;">
                                                    <strong>{{ $errors->first('link') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Pole  -->
                                            <div class="bmd-form-group{{ $errors->has('pole') ? ' has-danger' : '' }} mt-3">
                                                    
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">push_pin </i>
                                                        </span>
                                                    </div>
                                                    <div class="checkbox-radios">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="pole" value="1" checked> Pole 1
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="pole" value="2"> Pole 2
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="pole" value="3"> Pole 3 
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                <input class="form-check-input" type="radio" name="pole" value="4"> Pole 4
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                                </label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer justify-content-end">
                                            <button type="submit" class="btn btn-warning btn-link btn-lg">{{ __('Add Device') }}</button>
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