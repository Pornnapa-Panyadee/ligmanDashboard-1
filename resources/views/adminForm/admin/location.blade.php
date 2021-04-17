@extends('layouts.app_admin', ['activePage' => 'create_location', 'titlePage' => __('Add Location')])

@section('content')

<div class="content">
    <div class="pagehead-link">
        <a class="head-link" href="{{ route('admin.list') }}"> List  </a>
        &#10095;&#10095;
        <a class="head-link" href="#"> Add Location </a>
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
                                    <h4 class="card-title"><strong>{{ __('Add Location') }}</strong></h4>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-10" style="margin-top:50px;">
                                        <div class="card-body ">
                                            <!-- pole  -->
                                            <div class="bmd-form-group{{ $errors->has('under') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">push_pin </i>
                                                        </span>
                                                    </div>
                                                    <div class="checkbox-radios">
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" value="1" checked> Pole 1
                                                                    <span class="circle"> <span class="check"></span></span>
                                                                </label>
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" value="2"> Pole 2
                                                                    <span class="circle"> <span class="check"></span> </span>
                                                                </label>
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" value="3"> Pole 3 
                                                                    <span class="circle"> <span class="check"></span></span>
                                                                </label>
                                                                    <label class="form-check-label">
                                                                    <input class="form-check-input" type="radio" name="exampleRadios" value="4"> Pole 4
                                                                     <span class="circle"><span class="check"></span></span>
                                                                </label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Location -->
                                            <div class="bmd-form-group{{ $errors->has('location') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">location_city</i>
                                                    </span>
                                                    </div>
                                                    <input type="text" name="location" class="form-control" placeholder="{{ __('Location...') }}" value="{{ old('location') }}" required>
                                                </div>
                                                @if ($errors->has('location'))
                                                    <div id="location-error" class="error text-danger pl-3" for="location" style="display: block;">
                                                    <strong>{{ $errors->first('location') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Latitude -->
                                            <div class="bmd-form-group{{ $errors->has('latitude') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">gps_fixed</i>
                                                    </span>
                                                    </div>
                                                    <input type="text" name="latitude" id="latitude" class="form-control" placeholder="{{ __('Latitude...') }}" required>
                                                </div>
                                                @if ($errors->has('latitude'))
                                                    <div id="latitude-error" class="error text-danger pl-3" for="latitude" style="display: block;">
                                                    <strong>{{ $errors->first('latitude') }}</strong>
                                                    </div>
                                                @endif
                                            </div>
                                            
                                            <!-- Longitude -->
                                            <div class="bmd-form-group{{ $errors->has('longitude') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">gps_fixed</i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="longitude" id="longitude" class="form-control" placeholder="{{ __('Longitude...') }}" required>
                                                                                                    
                                                </div>
                                                @if ($errors->has('longitude'))
                                                    <div id="longitude-error" class="error text-danger pl-3" for="longitude" style="display: block;">
                                                    <strong>{{ $errors->first('longitude') }}</strong>
                                                    </div>
                                                @endif
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