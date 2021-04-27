@extends('layouts.app_admin', ['activePage' => 'create_device', 'titlePage' => __('Create Device')])

@section('content')

<div class="content">
    <div class="pagehead-link">
        <a class="head-link" href="{{ route('adminForm.admin.list') }}"> List  </a>
        &#10095;&#10095;
        <a class="head-link" href="#"> Create Device </a>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('adminForm.admin.update_device') }}">
                            @csrf
                            <div class="card">
                                <div class="card-header  text-center" style="margin-top:-20px;background-color: #e8e8e8;">
                                    <h4 class="card-title"><strong>{{ __('Create Device') }}</strong></h4>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-10" style="margin-top:50px;">
                                        <div class="card-body ">
                                            @if (session('status'))
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                    <div class="alert alert-success">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <i class="material-icons">close</i>
                                                        </button>
                                                        <span>{{ session('status') }}</span>
                                                    </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <input type="hidden" id="id" name="id" value={{$device_user->id}}>
                                            <!-- devices -->
                                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">devices</i>
                                                        </span>
                                                    </div>
                                                    <!-- query from db -->
                                                    <select class="selectpicker" id="device_id" name="device_id" data-style="select-with-transition" title="{{ __('Device...') }}" required>
                                                        @foreach ($devices_list as $device)
                                                            @if($device_user->device_id == $device->id)
                                                                <option value={{ $device->id }} selected="selected">{{ $device->device_name }}</option>
                                                            @else
                                                                <option value={{ $device->id }}>{{ $device->device_name }}</option>
                                                            @endif
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
                                            <div class="bmd-form-group{{ $errors->has('device_username') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">face</i>
                                                    </span>
                                                    </div>
                                                    <input type="text" id="device_username" name="device_username" class="form-control" placeholder="{{ __('username...') }}" value={{$device_user->device_username}} required>
                                                </div>
                                                @if ($errors->has('device_username'))
                                                    <div id="device_username-error" class="error text-danger pl-3" for="device_username" style="display: block;">
                                                    <strong>{{ $errors->first('device_username') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Password -->
                                            <div class="bmd-form-group{{ $errors->has('device_password') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">lock_outline</i>
                                                    </span>
                                                    </div>
                                                    <input type="password" name="device_password" id="device_password" class="form-control" placeholder="{{ __('Password...') }}" value={{$device_user->device_password}} required>
                                                </div>
                                                @if ($errors->has('device_password'))
                                                    <div id="device_password-error" class="error text-danger pl-3" for="device_password" style="display: block;">
                                                    <strong>{{ $errors->first('device_password') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            <!-- link -->
                                            <div class="bmd-form-group{{ $errors->has('api_link') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">link</i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="api_link" id="api_link" class="form-control" placeholder="{{ __('Link (url/ip/api)...') }}" value={{$device_user->api_link}} required>
                                                                                                    
                                                </div>
                                                @if ($errors->has('api_link'))
                                                    <div id="api_link-error" class="error text-danger pl-3" for="api_link" style="display: block;">
                                                    <strong>{{ $errors->first('api_link') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Pole  -->
                                            <div class="bmd-form-group{{ $errors->has('pole_id') ? ' has-danger' : '' }} mt-3">                                                    
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">push_pin </i>
                                                        </span>
                                                    </div>
                                                    <div class="checkbox-radios">
                                                        @foreach ($poles_list as $pole)                                                        
                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                @if($device_user->pole_id == $pole->id)
                                                                    <input class="form-check-input" type="radio" name="pole_id" value={{$pole->id}} checked> Pole {{$pole->id}}
                                                                @else
                                                                    <input class="form-check-input" type="radio" name="pole_id" value={{$pole->id}}> Pole {{$pole->id}}
                                                                @endif
                                                                <span class="circle">
                                                                    <span class="check"></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="card-footer justify-content-end">
                                            <button type="submit" class="btn btn-warning btn-link btn-lg">{{ __('Edit Device') }}</button>
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