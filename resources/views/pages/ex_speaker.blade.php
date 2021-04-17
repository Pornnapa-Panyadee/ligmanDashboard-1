@extends('layouts.app', ['activePage' => 'ex_speaker', 'titlePage' => __('Exstreamer Loud Speaker')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title"> 
            <p class="card-category">If you never login to "EXSTREAMER" click this button 
              <button type="button" class="btn btn-success" onclick="loginexspeaker()">Auto Login</button> only once. After this, it is not necessary.
            </p>
            <i class="icon-bullhorn text-orange"></i> 
            <b>Exstreamer Loud Speaker</b>
          </h4>
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
  <iframe name="myFrame" width="100%" height="730px"><p>Your browser does not support iframes.</p></iframe>
</div>

<script>
  window.frames["myFrame"].location = "http://10.2.4.52/";
</script>

<form name="exspeakForm" id="exspeakForm" method="POST" action="http://admin:ligman@10.2.4.52" target="_blank"> 
  <input type=hidden id="usrname" name="usrname" value="admin"/>
  <input type=hidden id="usrcode" name="usrcode" value="ligman"/>
</form>

<script>
  function loginexspeaker(){
    console.log("start login");
    document.getElementById("exspeakForm").submit();
  }
</script>
@endsection