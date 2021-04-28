@extends('layouts.app', ['activePage' => 'camera360', 'titlePage' => __('Speed Dome Camera 360°')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title"> 
            <i class="icon-dome-camera text-orange"></i> 
            <b>Speed Dome Camera 360°</b>
          </h4>
        </div>
        <div class="card-header card-header-primary">
          <h4 class="card-title">First Entry</h4>
          <p class="card-category">If you never login to "Hikvision" click this button
            <button type="button" class="btn btn-success" onclick="login360()">Auto Login</button> only once. After this, it is not necessary.
          </p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="ct-chart" style="
                display: flex;
                justify-content: center;
                align-items: center;"
                >        
                <img id="licenseimg" src="http://10.2.4.54:80/ISAPI/Streaming/channels/101/httpPreview" width="45%">
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

<form name="hikvisionForm" id="hikvisionForm" method="POST" action="http://10.2.4.54/doc/page/login.asp?_1618488065777&page=preview" target="_blank"> 
  <input type=hidden id="username" value="user"/>
  <input type=hidden id="password" value="123456789A"/>
</form>

<script>
  (function() {
    var url = 'http://10.2.4.54/doc/page/login.asp?_1618488065777&page=preview';
    newWindow = window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=190,left=255,width=1640,height=800");
    // focus on the popup //
    newWindow.focus();
  })();

  function login360(){
    console.log("start login");
    document.getElementById("hikvisionForm").submit();
  }
</script>
@endsection