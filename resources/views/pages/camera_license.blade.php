@extends('layouts.app', ['activePage' => 'camera_license', 'titlePage' => __('Camera Fix Lens (plate)')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title"> 
            <i class="icon-In-loud text-orange"></i> 
            <b>Camera Fix Lens (plate)</b>
          </h4>
        </div>
        <div class="card-header card-header-primary">
          <h4 class="card-title">First Entry</h4>
          <p class="card-category">If you never login to "erdi" click this button 
            <button type="button" class="btn btn-success" onclick="loginlicence()">Auto Login</button> only once. After this, it is not necessary.
          </p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="iframe-container d-none d-lg-block">
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
  <iframe name="myFrame" width="100%" height="650px"><p>Your browser does not support iframes.</p></iframe>
</div>

<script>
  window.frames["myFrame"].location = "http://10.210.137.99/#view";
</script>

<form name="licenceForm" id="licenceForm" method="POST" action="http://10.210.137.99/#view" target="_blank"> 
  <input type=hidden id="username" name="username" value="ligmanproject"/>
  <input type=hidden id="password" name="password" value="123456"/>
</form>

<script>
  (function() {
    var url = 'http://10.210.137.99/#view';
    newWindow = window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=190,left=255,width=1640,height=800");
    // focus on the popup //
    newWindow.focus();
  })();

  function loginlicence(){
    console.log("start login");
    document.getElementById("licenceForm").submit();
  }
</script>
@endsection