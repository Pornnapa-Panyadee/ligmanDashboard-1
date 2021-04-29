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
    var reqTimeout = setTimeout(function()
    {
      alert("Request timed out.");
    }, 5000);
    
    var xhr = $.ajax({
      type: "GET",
      url: "http://10.2.4.54/",
      dataType: "script",
      success: function() {
        alert("success");
      },
      error: function() {
        alert("error");        
      },
      complete: function() {
        clearTimeout(reqTimeout);
      }
    });
    // $.ajax({
    //         url: "http://10.2.4.54/",
    //         type: "GET",
    //         dataType: "html",
    //         crossDomain: true,
    //         success:function(json){
    //             console.log('message: ' + "success"+ JSON.stringify(json));                     
    //         },
    //         error:function(error){
    //             console.log('message Error' + JSON.stringify(error));
    //         }  
    //     });
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