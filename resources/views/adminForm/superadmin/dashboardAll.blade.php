@extends('layouts.app_superadmin', ['activePage' => 'superadminDashboard', 'titlePage' => __('Dashboard List')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-10">
           <div class="row">
                @foreach($admins_list as $admin)
                <div class="col-md-2" >
                    <div class="card-dashList">
                        <a class="nav-link" href="{{ url('superadmin/dashboard/'.$admin->id) }}">
                            <div class="card-icon text-orange" >
                                <i class="material-icons" style="font-size:120px;">account_circle</i>
                            </div>
                            <h4 class="text_dashList">{{$admin->name}}</h4>
                        </a>
                     </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
</div>

@endsection