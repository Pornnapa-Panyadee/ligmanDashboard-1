@extends('layouts.app', ['activePage' => 'digital_signage', 'titlePage' => __('Digital Signage')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title">
            <i class="icon-In-loud text-orange"></i> 
            <b>Digital Signage</b>
          </h4>
        </div>
        <div class="card-header card-header-primary">
          <h5>username: {{$data->device_username}}</h5>
          <h5>password: {{$data->device_password}}</h5>
          <h4 class="card-title">Download Software</h4>      
          <p class="card-category" style="font-size: 50px;">Download ViPlex Express Here
            <a href="https://novastar.shop/wp-content/uploads/2021/02/ViPlex%20Express%20V2.6.2.0201%20Setup(x64).zip" >ViPlex Express V2.6.2</a>
            <img src="http://cdn.apk-cloud.com/detail/image/nova.priv.hand.easypluto.google-w250.png" width="50px">   
          </p>
          <p class="card-category" style="font-size: 36px;">Open ViPlex 
            <i class="fa fa-windows" style="font-size:36px"></i> -> 
            <img src="http://cdn.apk-cloud.com/detail/image/nova.priv.hand.easypluto.google-w250.png" width="36px"> ViPlex Express
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
  window.frames["myFrame"].location = {!! json_encode($data->api_link) !!};
</script>

<form name="digitalForm" id="digitalForm" method="POST" action={{$data->api_link}} target="_blank"> 
  <input type=hidden id="usrname" name="usrname" value="{{ $data->device_username }}"/>
  <input type=hidden id="usrcode" name="usrcode" value="{{	$data->device_password }}"/>
</form>

<script>
  function logindigital(){
    console.log("start login");
    document.getElementById("digitalForm").submit();
  }
</script>

<script>
  (function() {
    var url = {!! json_encode($data->api_link) !!};
    newWindow = window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=190,left=255,width=1640,height=800");
    // focus on the popup //
    newWindow.focus();
    // CMD
    // "C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Nova Star\ViPlex Express\ViPlex Express.lnk"

    // PowerShell
    // start "C:\ProgramData\Microsoft\Windows\Start Menu\Programs\Nova Star\ViPlex Express\ViPlex Express.lnk"
    console.log("start call ViPlex");
    // var commandtoRun = "start \"C:\\ProgramData\\Microsoft\\Windows\\Start Menu\\Programs\\Nova Star\\ViPlex Express\\ViPlex Express.lnk\"";
    // var oShell = new ActiveXObject("Shell.Application");
    // oShell.ShellExecute(commandtoRun,"","","open","1");
  })();
</script>
@endsection