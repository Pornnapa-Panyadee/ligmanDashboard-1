@extends('layouts.app_superadmin', ['activePage' => 'superadminedit', 'titlePage' => __('Edit Account')])

@section('content')

<div class="content">
    <div class="pagehead-link">
        <a class="head-link" href="{{ route('adminForm.superadmin.list') }}"> List  </a>
        &#10095;&#10095;
        <a class="head-link" href="#"> Edit Account </a>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{ route('adminForm.superadmin.update_account') }}">
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
                                        <div class="card-body">
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
                                            <input type="hidden" id="id" name="id" value={{$user->id}}>
                                            <!-- name -->
                                            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ $user->name }}" required>
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
                                                    <h2 type="text" class="form-control"> {{ $user->email }} </h2>
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
                                            <!-- role -->
                                            <div class="bmd-form-group{{ $errors->has('role') ? ' has-danger' : '' }} mt-3">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="material-icons">check_circle_outline</i>
                                                    </span>
                                                    </div>
                                                    <select class="selectpicker" id="role" name="role" data-style="select-with-transition" title="{{ __('status...') }}" data-size="7" style="width: 400px" required>
                                                        @if($user->role=="admin")
                                                            <option value="admin" selected>admin </option>
                                                            <option value="user">user</option>
                                                        @else
                                                            <option value="admin">admin </option>
                                                            <option value="user" selected>user</option>
                                                        @endif
                                                    </select>                                                   
                                                </div>
                                                @if ($errors->has('role'))
                                                    <div id="role-error" class="error text-danger pl-3" for="role" style="display: block;">
                                                    <strong>{{ $errors->first('role') }}</strong>
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
                                                        @foreach($admins_list as $admin)
                                                        @if($admin->name==$user->under)
                                                            <option value="{{ $admin->name }}" selected>{{ $admin->name }}</option>
                                                        @else
                                                            <option value="{{ $admin->name }}">{{ $admin->name }}</option>
                                                        @endif
                                                        @endforeach
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
                                            <button type="submit" class="btn btn-warning btn-link btn-lg">{{ __('Edit account') }}</button>
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