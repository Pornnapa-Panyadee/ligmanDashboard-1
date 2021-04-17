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
          <h4 class="card-title">First Entry</h4>
          <p class="card-category">If you never login to "edsbox" click this button 
            <button type="button" class="btn btn-success" onclick="logindigital()">Auto Login</button> only once. After this, it is not necessary.
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
  window.frames["myFrame"].location = "https://edsbox.net/CMService/FreeLogin";
</script>

<form name="digitalForm" id="digitalForm" method="POST" action="https://edsbox.net/CMService/FreeLogin" target="_blank"> 
  <input type=hidden id="email" name="email" value="admin"/>
  <input type=hidden id="password" name="password" value="ligman"/>
</form>

<script>
  function logindigital(){
    console.log("start login");
    document.getElementById("digitalForm").submit();
  }
</script>

<script>
  (function() {
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