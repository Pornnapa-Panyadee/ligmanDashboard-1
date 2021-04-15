@extends('layouts.app', ['activePage' => 'intercom', 'titlePage' => __('Intercom')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
            <h4 class="card-title"> 
                <i class="icon-intercom text-orange"></i> 
                 <b>Intercom</b>
            </h4>
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
  window.frames["myFrame"].location = "http://10.2.4.50/fcgi/do?id=1";
</script>

<form name="intercomForm" id="intercomForm" method="POST" action="http://10.2.4.50/fcgi/do?id=1" target="_blank"> 
  <input type=hidden id="username" name="username" value="admin"/>
  <input type=hidden id="password" name="password" value="ligman@cmU1"/>
</form>

<script>
  window.onload = function afterWebPageLoad() { 
    // loginesaveag();
  };
  function loginesaveag(){
    console.log("start login");
    document.getElementById("intercomForm").submit();
  }
</script>
@endsection