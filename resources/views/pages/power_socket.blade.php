@extends('layouts.app', ['activePage' => 'power_socket', 'titlePage' => __('Roud Power Socket')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
            <h4 class="card-title"> 
                <i class="icon-power-plug text-orange"></i> 
                 <b>Roud Power Socket</b>
            </h4>
        </div>        
        <h2 id="status_1">Offline</h2>
        <br>
        <h2 id="status_2">Offline</h2>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <div class="iframe-container d-none d-lg-block">
              </div>
              </div>
              <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google. 
                </h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  (function() {
    // var reqTimeout = setTimeout(function()
    // {
    //   alert("Request timed out.");
    // }, 5000);
    
    var xhr_1 = $.ajax({
      type: "GET",
      url: "https://www.esaveag.com/slcontrol/",
      dataType: "script",
      timeout:6000,
      success: function() {
        console.log("xhr_1 success");
        document.getElementById('status_1').innerHTML = 'Online';
      },
      error: function() {
        console.log("xhr_1 error");
        document.getElementById('status_1').innerHTML = 'Offline';        
      },
      // complete: function() {
      //   clearTimeout(reqTimeout);
      // }
    });

    var xhr_2 = $.ajax({
      type: "GET",
      url: "http://10.2.4.53/",
      dataType: "script",
      timeout:5000,
      success: function() {
        console.log("xhr_2 success");
        document.getElementById('status_2').innerHTML = 'Online';
      },
      error: function() {
        console.log("xhr_2 error");
        document.getElementById('status_2').innerHTML = 'Offline';        
      },
    });

    // $.ajax({url: "https://www.esaveag.com/slcontrol/",
    //     type: "HEAD",
    //     timeout:6000,
    //     crossDomain: true,
    //     statusCode: {
    //         200: function (response) {
    //             alert('200');
    //         },
    //         400: function (response) {
    //             alert('400');
    //         },
    //         0: function (response) {
    //             alert('0');
    //         }              
    //     }
    // });
  })();
</script>
@endsection