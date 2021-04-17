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
              <div class="iframe-container d-none d-lg-block">
                <style>
                  img {
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                  }
                </style>
                <iframe class="iframe" id="live360" name="live360"><p>Your browser does not support iframes.</p>
                </iframe>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script>
                  $(document).ready(function(){
                    $('#live360').attr('src', 'http://10.2.4.54:80/ISAPI/Streaming/channels/101/httpPreview');
                    $("#live360").attr("width", "100%");
                    $('#live360').attr("height", "100%");
                  });
                </script>
              </div>
              <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. Check the
                  
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection