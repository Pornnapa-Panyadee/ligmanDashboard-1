@extends('layouts.app', ['activePage' => 'digital_signage', 'titlePage' => __('Digital Signage')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
            <h4 class="card-title"> 
                <i class="icon-Digital_Signage text-orange"></i> 
                 <b>Digital Signage</b>
            </h4>
        </div>
        
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="iframe-container d-none d-lg-block">
                {{-- <iframe src="https://www.google.com/" >
                  <p>Your browser does not support iframes.</p>
                </iframe> --}}
                {{-- <iframe id="frame" src="https://www.esaveag.com/slcontrol/" width="100%" height="300"> --}}
                <iframe name="myFrame" width="100%" height="100%">
                </iframe>
                <script>
                  window.frames["myFrame"].location = "https://www.esaveag.com/slcontrol/"
                </script>

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
<?php
  shell_exec("start \"C:\\ProgramData\\Microsoft\\Windows\\Start Menu\\Programs\\Nova Star\\ViPlex Express\\ViPlex Express.lnk\"");
?>

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