@extends('layouts.app', ['activePage' => 'air_transmitter', 'titlePage' => __('Air Transmitter')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title"> 
            <i class="icon-pm text-orange"></i> 
            <b>Air Transmitter</b>
          </h4>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">  
              <div class="col-md-12 d-none d-sm-block d-md-block d-lg-none d-block d-sm-none text-center ml-auto mr-auto">
                <h5>The icons are visible on Desktop mode inside an iframe. Since the iframe is not working on Mobile and Tablets please visit the icons on their original page on Google</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <iframe width="100%" height="730px" frameborder="0" allowfullscreen 
    src="//umap.openstreetmap.fr/th-th/map/air-transmitter_595019?scaleControl=true&miniMap=true&scrollWheelZoom=true&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#16/18.7953/458.9519">
  </iframe>             --}}
  <div id="map"></div>
</div>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqTFzYkIkd1fw2jyCxkCVsRprw-RSs0AU&callback=initMap&libraries=&v=weekly"
  async>
</script>

<style type="text/css">
  /* Set the size of the div element that contains the map */
  #map {
    margin-top: 0px;
    height: 730px;
    /* The height is 400 pixels */
    width: 100%;
    /* The width is the width of the web page */
  }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  var api_link = "https://esm.erdi.cmu.ac.th/api/freshairerdi/public/index.php/api/historydata/C44F33605921";
  var all_device = "https://esm.erdi.cmu.ac.th/api/freshairerdi/public/index.php/api/deviceall";

  var req = new XMLHttpRequest();
  req.responseType = 'json';
  req.open('GET', api_link, true);
  req.onload  = function() {
    console.log(req.response);
  };
  req.send(null);


  var locations = [
    ["device_id: 15<br>co2: 0<br>humi: 59.03564<br>pm1: 34<br>pm10: 44<br>pm2_5: 35<br>pm4: 0<br>temp: 23.63959", -33.890542, 151.274856, 4],
    ["device_id: 17<br>co2: 0<br>humi: 59.03564<br>pm1: 34<br>pm10: 44<br>pm2_5: 35<br>pm4: 0<br>temp: 23.63959", -33.923036, 151.259052, 5],
    ["device_id: 18<br>co2: 0<br>humi: 59.03564<br>pm1: 34<br>pm10: 44<br>pm2_5: 35<br>pm4: 0<br>temp: 23.63959", -34.028249, 151.157507, 3],
    ["device_id: 20<br>co2: 0<br>humi: 59.03564<br>pm1: 34<br>pm10: 44<br>pm2_5: 35<br>pm4: 0<br>temp: 23.63959", -33.80010128657071, 151.28747820854187, 2],
    ["device_id: 45<br>co2: 0<br>humi: 59.03564<br>pm1: 34<br>pm10: 44<br>pm2_5: 35<br>pm4: 0<br>temp: 23.63959", -33.950198, 151.259302, 1]
  ];
  // Initialize and add the map
  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: new google.maps.LatLng(locations[0][1], locations[0][2]),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    var infowindow = new google.maps.InfoWindow();

    for (var i=0; i<locations.length; i++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  }
</script>
@endsection