@extends('layouts.app', ['activePage' => 'camera_temp', 'titlePage' => __('Camera Temp Monitoring')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title"> 
            <i class="icon-temp text-orange"></i> 
            <b>Camera Temp Monitoring</b>
          </h4>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="ct-chart" style="
                display: flex;
                justify-content: center;
                align-items: center;"
                >        
                <img id="tempimg" src="http://202.28.247.117/axis-cgi/mjpg/video.cgi" width="75%">
              </div>
              <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google.</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection