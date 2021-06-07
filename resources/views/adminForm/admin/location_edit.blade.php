@extends($slidebar, ['activePage' => 'create_location', 'titlePage' => __('Edit Pole Location')])

@section('content')

<div class="content">
    <div class="pagehead-link">
        <a class="head-link" href="{{ route('adminForm.admin.list') }}"> List  </a>
        &#10095;&#10095;
        <a class="head-link" href="#"> Edit Pole Location </a>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('adminForm.admin.update_pole') }}">
                            @csrf
                            <div class="card">
                                <div class="card-header  text-center" style="margin-top:-20px;background-color: #e8e8e8;">
                                    <h4 class="card-title"><strong>{{ __('Edit Pole Location') }}</strong></h4>
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
                                            <!-- pole  -->
                                            <div class="bmd-form-group{{ $errors->has('pole') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">push_pin</i>
                                                        </span>
                                                        <h1>Pole {{$pole->id}}</h1>
                                                        <input type="hidden" id="id" name="id" value={{$pole->id}}>
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
                                                    <input type="text" name="location" class="form-control" placeholder="{{ __('Location...') }}" value="{{ $pole->location }}" required>
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
                                                    <input type="text" name="latitude" id="latitude" class="form-control" placeholder="{{ __('Latitude...') }}" value={{ $pole->latitude }} required>
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
                                                    <input type="text" name="longitude" id="longitude" class="form-control" placeholder="{{ __('Longitude...') }}" value={{ $pole->longitude }} required>
                                                                                                    
                                                </div>
                                                @if ($errors->has('longitude'))
                                                    <div id="longitude-error" class="error text-danger pl-3" for="longitude" style="display: block;">
                                                    <strong>{{ $errors->first('longitude') }}</strong>
                                                    </div>
                                                @endif
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