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
        <div id="map"></div>
        <div class="row justify-content-end"> <img src = "{{ asset('material/img/pm25.png') }}" width="40%" > </div>
      </div>
    </div>
    
  </div>
  {{-- <iframe width="100%" height="730px" frameborder="0" allowfullscreen 
    src="//umap.openstreetmap.fr/th-th/map/air-transmitter_595019?scaleControl=true&miniMap=true&scrollWheelZoom=true&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#16/18.7953/458.9519">
  </iframe>             --}}
  
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

<script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/data.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>

<script>
  (function() {
    google.maps.event.addDomListener(window, 'load', initMap);
  })();

  // Initialize and add the map
  function initMap() {
    var pole = {!! json_encode($pole) !!};
    console.log(pole);
    var response = {!! $response !!};

    var pm2_5 = [[]];
    var co2 = [[]];
    var temp = [[]];
    var humi = [[]];
    var dataset = [[[]]];
    
    for(i in response.data){
      var date = new Date(response.data[i].date_create_long);
      var millisec = date.getTime();
      pm2_5[i]= [millisec, parseInt(response.data[i].pm2_5)];
      co2[i]  = [millisec, parseInt(response.data[i].co2)];
      temp[i] = [millisec, parseInt(response.data[i].temp)];
      humi[i] = [millisec, parseInt(response.data[i].humi)];
    }
    
    dataset = [pm2_5, co2, temp, humi];
    // console.log(dataset);

    var last_air_data = response.data[response.data.length-1];
    console.log(last_air_data);

    var iconBase = '/material/img/pin_PM1/';
    var pm_names = ['good.png', 'moderate.png', 'unhealthy.png', 'unhealth_redy.png', 'veryunhealthy.png', 'hazardous.png'];

    var pm_value = parseInt(last_air_data.pm2_5);
    if(pm_value < 12) iconBase = iconBase + pm_names[0];
    else if(pm_value < 35) iconBase = iconBase + pm_names[1];
    else if(pm_value < 55) iconBase = iconBase + pm_names[2];
    else if(pm_value < 150) iconBase = iconBase + pm_names[3];
    else if(pm_value < 250) iconBase = iconBase + pm_names[4];
    else iconBase = iconBase + pm_names[5];
    
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 14,
      center: new google.maps.LatLng(pole[0]['latitude'], pole[0]['longitude']),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    var infowindow = new google.maps.InfoWindow();
    var contentDiv = '<div><div id="graph_pm2_5"></div><div id="graph_co2"></div></div><div id="graph_temp"></div></div><div id="graph_humi"></div></div>';

    google.maps.event.addListener(infowindow, 'domready', function() {
      var graph_tag = ['graph_pm2_5', 'graph_co2', 'graph_temp', 'graph_humi'];
      var text_tag = ['PM 2.5', 'CO2', 'Temperature', 'Humidity'];
      var color_pm=['#52b947','#f2ec19','#fc8946','#ec1d23','#802a7b','#350317']
      var colors = ['#52b947', '#37474f', '#fcaf17', '#4099ff'];

      for (var i=0; i<graph_tag.length; i++) {  
        if(i==0){
          dataChart = {      
            chart: {
              renderTo: document.getElementById(graph_tag[i]),
              height: 300,
              width: 628,
            },
            navigator: {
              enabled: false,
            },
            navigation: {
              buttonOptions: {
                align: 'left',
              }
            },
            rangeSelector: {
              selected: 1,            
              buttons: [{
                type: 'hour',
                count: 1,
                text: '1hr',
                title: 'View 1 hour'
              }, {
                type: 'day',
                count: 1,
                text: '1d',
                title: 'View 1 day'
              }, {
                type: 'day',
                count: 7,
                text: '7d',
                title: 'View 7 days'
              }, {
                type: 'month',
                count: 1,
                text: '1M',
                title: 'View 1 month'
              }, {
                type: 'ytd',
                text: 'YTD',
                title: 'View year to date'
              }, {
                type: 'year',
                count: 1,
                text: '1y',
                title: 'View 1 year'
              }, {
                type: 'all',
                text: 'All',
                title: 'View all'
              }],
            },
            title: {
              text: text_tag[i]
            },
            series: [{
              type: 'column',
              name: text_tag[i],
              data: dataset[i],
              zonesAxis: 'y',
                zones: [{
                    value: 12,
                    color: color_pm[0],
                }, {
                    value: 35,
                    color: color_pm[1],
                }, {
                    value: 55,
                    color: color_pm[2],
                }, {
                    value: 150,
                    color: color_pm[3],
                }, {
                  value: 250,
                    color: color_pm[4],
                }, {
                    color: color_pm[5],
                }]
            }],
          }
        }else{
          dataChart = {      
            chart: {
              renderTo: document.getElementById(graph_tag[i]),
              height: 300,
              width: 628,
            },
            navigator: {
              enabled: false,
            },
            navigation: {
              buttonOptions: {
                align: 'left',
              }
            },
            rangeSelector: {
              selected: 1,            
              buttons: [{
                type: 'hour',
                count: 1,
                text: '1hr',
                title: 'View 1 hour'
              }, {
                type: 'day',
                count: 1,
                text: '1d',
                title: 'View 1 day'
              }, {
                type: 'day',
                count: 7,
                text: '7d',
                title: 'View 7 days'
              }, {
                type: 'month',
                count: 1,
                text: '1M',
                title: 'View 1 month'
              }, {
                type: 'ytd',
                text: 'YTD',
                title: 'View year to date'
              }, {
                type: 'year',
                count: 1,
                text: '1y',
                title: 'View 1 year'
              }, {
                type: 'all',
                text: 'All',
                title: 'View all'
              }],
            },
            title: {
              text: text_tag[i]
            },
            series: [{
              type: 'column',
              name: text_tag[i],
              data: dataset[i],
              color: colors[i],
            }],
          }
        }
        
        chart = new Highcharts.stockChart(dataChart);
      }
    });

    for (var i=0; i<pole.length; i++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(pole[i]['latitude'], pole[i]['longitude']),
        map: map,
        icon: iconBase,
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          // infowindow.setContent(locations[i][0]);
          // infowindow.open(map, marker);
          infowindow.open(map, marker);				   
          infowindow.setContent(contentDiv);         
        }
      })(marker, i));
         
    }
  }
</script>
@endsection