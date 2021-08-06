@extends('layouts.app_superadmin', ['activePage' => 'superadminDashboard', 'titlePage' => __('Dashboard List')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-md-10">
           <div class="row"  >
                @foreach($admins_list as $admin)
                <div class="col-md-3">
                    <div class="card-dashList" style="height:90%; margin-bottom:10px;" >
                        <a class="nav-link" href="{{ url('superadmin/dashboard/'.$admin->id) }}">
                            <div class="card-icon text-orange" >
                                <i class="material-icons" style="font-size:8vw;">account_circle</i>
                            </div>
                            <font class="text_dashList">{{$admin->name}}</font>
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