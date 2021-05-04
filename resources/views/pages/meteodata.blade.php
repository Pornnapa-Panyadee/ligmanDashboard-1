@extends('layouts.app', ['activePage' => 'meteodata', 'titlePage' => __('e-Save Meteodata')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title"> 
            <i class="icon-cloudy1 text-orange"></i> 
              <b>e-Save Meteodata</b>
          </h4>
        </div>
        <div class="card-header card-header-primary">
          <h4 class="card-title">First Entry</h4>
          <p class="card-category">If you never logged in "e-Save" before. Please click this button
            <button type="button" class="btn btn-success" onclick="loginesaveag()">Auto Login</button> only once. After this, it is not necessary.
          </p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="iframe-container d-none d-lg-block">
                <iframe name="myFrame" width="100%" height="100%"><p>Your browser does not support iframes.</p></iframe>
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

<script>
  window.frames["myFrame"].location = {!! json_encode($data->api_link) !!};
</script>

<form name="esaveagForm" id="esaveagForm" method="POST" action={{$data->api_link}} target="_blank"> 
  <input type=hidden id="usrname" name="usrname" value="{{ $data->device_username }}"/>
  <input type=hidden id="usrcode" name="usrcode" value="{{	$data->device_password }}"/>
</form>

<script>
  (function() {
    var url = {!! json_encode($data->api_link) !!};
    newWindow = window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=190,left=255,width=1640,height=800");
    // focus on the popup //
    newWindow.focus();
  })();
  
  function loginesaveag() {
    console.log("start login");
    document.getElementById("esaveagForm").submit();
  }
</script>
@endsection