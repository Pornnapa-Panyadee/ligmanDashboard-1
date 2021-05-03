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

<script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.036 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
    const marker_2 = new google.maps.Marker({
      position: { lat: -25.344, lng: 132.036 },
      map: map,
    });
  }
</script>
@endsection