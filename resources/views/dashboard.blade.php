@extends('layouts.app_dash', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content full-height" >
    <div class="container-fluid">
      
      <div class="row">
          <div class="col-lg-6 col-md-12">
              <!-- camera -->
                <div class="card">
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="profile">
                        <!-- head name -->
                          <div class="row">
                            <div class="col-8">
                              <button class="btn btn-just-icon btn-github">
                                  <i class="icon-dome-camera text-white"></i>
                              </button>
                              <h1 class="text_dashCam" style="">Camera</h1>
                              <hr class="dashCam">
                            </div>
                            {{-- <div class="col-2">
                              <div class="icon_dash" >
                                <i class="material-icons text-primary" style="font-size:50px;"> notifications</i>
                                <p style="margin-top:-5px;">{{ __('Beacon Glow Blue') }}</p>
                              </div>
                            </div> --}}
                            <div class="col-4">
                              <div class="icon_dash" >
                                <i id="emergency" class="material-icons text-success" style="font-size:50px;">notifications</i>
                                <p style="margin-top:-5px;">{{ __('Emergency Beacon') }}</p>
                              </div>
                            </div>
                          </div>

                        <!--  camera 2 devices -->
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="
                                  height:350px;
                                  display: flex;
                                  justify-content: center;
                                  align-items: center;"
                                  >
                                  {{-- <iframe id="live360" name="live360" width="200%" height="200%" height="200%" style="
                                  zoom: 0.5;
                                  -moz-transform: scale(0.5);
                                  -moz-transform-origin: 0 0;
                                  -o-transform: scale(0.5);
                                  -o-transform-origin: 0 0;
                                  -webkit-transform: scale(0.5);
                                  -webkit-transform-origin: 0 0;
                                  margin: 0 auto;
                                  display:block;"><p>Your browser does not support iframes.</p></iframe>
                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                  <script>
                                    $(document).ready(function(){
                                        $('#live360').attr('src', 'http://10.2.4.54/ISAPI/Streaming/channels/101/httpPreview');
                                      });
                                  </script> --}}
                                  {{-- <iframe src="http://10.2.4.54/ISAPI/Streaming/channels/101" style="display: none;"></iframe> --}}
                                  {{-- <img id="live360" src="http://10.2.4.54/ISAPI/Streaming/channels/101/httpPreview" width="100%" height="80%" onerror="this.onerror=null; this.src='https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png'"> --}}
                                  <iframe id="loginlive360" style="display: none;"></iframe>
                                  <img id="live360" width="100%" height="80%" src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png">
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>{{$devices_list[0]->pole_id}}</span></div> 
                                    <span class="text_font">{{ __('Speed Dome Camera 360°') }}</span>
                                    <div class="absolute">
                                      <button id="btnlive360" class="btn btn-offline btn-sm1">Offline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="
                                  height:350px;display: flex;
                                  justify-content: center;
                                  align-items: center;"
                                  >
                                  <img id="interimg" width="100%" src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png">
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>{{$devices_list[1]->pole_id}}</span></div> 
                                    <span class="text_font">{{ __('Intercom') }}</span>
                                    <div class="absolute">
                                      <button id="btninter" class="btn btn-offline btn-sm1">Offline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- camera 3 device -->
                          <div class="row" style="margin-top:3px;">
                            <div class="col-md-4">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="
                                  height:240px;display: flex;
                                  justify-content: center;
                                  align-items: center;"
                                  ><img id="tempimg" width="100%" src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png">
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>{{$devices_list[2]->pole_id}}</span></div> 
                                    <span class="text_font">{{ __('Camera Temp') }}</span>
                                    <div class="absolute1">
                                      <button id="btntemp" class="btn btn-offline btn-sm1">Offline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="
                                  height:240px;display: flex;
                                  justify-content: center;
                                  align-items: center;"
                                  ><img id="licenseimg" width="100%" src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png">
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>{{$devices_list[3]->pole_id}}</span></div> 
                                    <span class="text_font">{{ __('Licence Plate') }}</span>
                                    <div class="absolute1">
                                      <button id="btnlicense" class="btn btn-offline btn-sm1">Offline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="
                                  height:240px;display: flex;
                                  justify-content: center;
                                  align-items: center;"
                                  ><img id="faceimg" width="100%" src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png">
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>{{$devices_list[4]->pole_id}}</span></div> 
                                    <span class="text_font">{{ __('Face') }}</span>
                                    <div class="absolute1">
                                      <button id="btnface" class="btn btn-offline btn-sm1">Offline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                        
                    </div>
                  </div>
                </div>
              <!-- end camera -->
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="row">
              <!-- E-save -->
                <div class="col-lg-12 col-md-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="profile">
                          <!-- head name -->
                            <div class="row">
                              <button class="btn btn-just-icon btn-github">
                                  <i class="icon-light-bulb text-white"></i>
                              </button>
                              <h1 class="text_dash" style="">E-save</h1>
                              <hr class="dash">
                            </div>
                          <!-- esave 5 device -->
                            <div class="row">
                            <!-- 1 -->
                              <div class="col-md-4">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dashEs" >
                                      <a id="esave1" class="dash-link" href="#">
                                        <i class="icon-gauge text-orange"  style="font-size:65px;"></i>
                                        <p>E-Save <br> Dashboard</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>{{$devices_list[5]->pole_id}}</span></div> 
                                      <div class="absolute1">
                                        <button id="btnesave1" class="btn btn-offline btn-sm2">Offline</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- 2 -->
                              <div class="col-md-2">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dashEs" >
                                      <a id="esave2" class="dash-link " href="#">
                                        <i class="icon-cluster_projectors text-orange"  style="font-size:65px;"></i>
                                        <p>Cluster <br> Projectors</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>{{$devices_list[6]->pole_id}}</span></div> 
                                      <div class="absolute1">
                                        <button id="btnesave2" class="btn btn-offline btn-sm2">Offline</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- 3 -->
                              <div class="col-md-2">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dashEs" >
                                      <a id="esave3" class="dash-link " href="#">
                                        <i class="icon-cluster_projectors_ladar text-orange"  style="font-size:65px;"></i>
                                        <p>Cluster <br> Projectors Lador</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                  <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>{{$devices_list[7]->pole_id}}</span></div> 
                                      <div class="absolute1">
                                        <button id="btnesave3" class="btn btn-offline btn-sm2">Offline</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- 4 -->
                              <div class="col-md-2">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dashEs" >
                                      <a id="esave4" class="dash-link " href="#">
                                        <i class="icon-cloudy1 text-orange"  style="font-size:65px;"></i>
                                        <p>E-Save <br> Meteodata </p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>{{$devices_list[8]->pole_id}}</span></div> 
                                      <div class="absolute1">
                                        <button id="btnesave4" class="btn btn-offline btn-sm2">Offline</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <!-- 5 -->
                            <div class="col-md-2">
                                <div class="card-dash">
                                  <div class="card-header">
                                    <div class="icon_dashEs" >
                                        <a id="esave5" class="dash-link " href="{{ route('occupancy') }}">
                                          <i class="icon-occupancy text-orange"  style="font-size:65px;"></i>
                                          <p>Occupancy  <br> Sensor</p>
                                        </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>{{$devices_list[9]->pole_id}}</span></div> 
                                      <div class="absolute1">
                                        <button id="btnesave5" class="btn btn-offline btn-sm2">Offline</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                          
                      </div>
                    </div>
                  </div>
                </div>
              <!-- end E-save -->
            </div>
            <div class="row">
              <!-- Facility -->
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <!-- head name -->
                              <div class="row">
                                <button class="btn btn-just-icon btn-github">
                                    <i class="icon-bullhorn   text-white"></i>
                                </button>
                                <h1 class="text_dash" style="">Facility</h1>
                                <hr class="dash2">
                              </div>
                            <!--  Facility 4 devices -->
                              <div class="row">
                                <!-- 1 -->
                                <div class="col-md-3">
                                  <div class="card-dash ">
                                    <div class="card-header">
                                      <div class="icon_dashAd" >
                                        <a id="exstreamer" class="dash-link " href="#">
                                          <i class="icon-bullhorn text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Exstreamer <br>Loud Speaker</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                          <hr class="dash_status1">
                                          <div class="dash-tri"><span>{{$devices_list[10]->pole_id}}</span></div> 
                                          <div class="absolute1">
                                            <button id="btnexstreamer" class="btn btn-offline btn-sm3">Offline</button>
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                                <!-- 2 -->
                                <div class="col-md-3">
                                  <div class="card-dash">
                                    <div class="card-header ">
                                      <div class="icon_dashAd" >
                                        <a id="instreamer" class="dash-link " href="#">
                                          <i class="icon-In-loud text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Instreamer <br>Loud Speaker </p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>{{$devices_list[11]->pole_id}}</span></div> 
                                        <div class="absolute1">
                                          <button id="btninstreamer" class="btn btn-offline btn-sm3">Offline</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- 3 -->
                                <div class="col-md-3">
                                  <div class="card-dash">
                                    <div class="card-header">
                                      <div class="icon_dashAd" >
                                        <a id="digital" class="dash-link " href="#">
                                          <i class="icon-Digital_Signage text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Digital <br> Signage</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>{{$devices_list[12]->pole_id}}</span></div> 
                                        <div class="absolute1">
                                          <button id="btndigital" class="btn btn-offline btn-sm3">Offline</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!-- 4 -->
                                <div class="col-md-3">
                                  <div class="card-dash">
                                    <div class="card-header">
                                      <div class="icon_dashAd" >
                                        <a id="plug" class="dash-link " href="#">
                                          <i class="icon-power-plug text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Round <br> Power Socket
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>{{$devices_list[13]->pole_id}}</span></div> 
                                        <div class="absolute1">
                                          <button id="btnplug" class="btn btn-offline btn-sm3">Offline</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          
                          </div>
                            
                        </div>
                      </div>
                    </div>
                </div>
              <!-- end Facility -->
             
            </div>
            <div class="row">
              <!-- Weather -->
                <div class="col-lg-7 col-md-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <!-- head name -->
                              <div class="row">
                                <button class="btn btn-just-icon btn-github">
                                    <i class="icon-cloudy  text-white"></i>
                                </button>
                                <h1 class="text_dash" style="">Weather</h1>
                                <hr class="dash">
                              </div>
                            <!--  Weather 1 devices -->
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card-dash">
                                    <div class="card-header card-header-white">
                                      <div class="ct-chart" style="height:185px;">
                                        {{-- <iframe width="100%" height="100%" frameborder="0" scrolling="no"
                                          src="//umap.openstreetmap.fr/th-th/map/air-transmitter_595019?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#16/18.7953/458.9519">
                                        </iframe> --}}
                                        <div id="air_map"></div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>{{$devices_list[14]->pole_id}}</span></div> 
                                        <span class="text_font">{{ __('Air Transmitter') }}</span>
                                        <div class="absolute1">
                                          <button id="btnpmair" class="btn btn-offline btn-sm3">Offline</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          
                          </div>
                            
                        </div>
                      </div>
                    </div>
                </div>
              <!-- end Weather -->
              <!-- Map  -->
                <div class="col-lg-5 col-md-12">
                  <div class="card">
                      <div class="card-body">
                        <div class="tab-content">
                          <div class="tab-pane active" id="profile">
                            <!--  MAp -->
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card" style="height:277px;">                                    
                                    <div id="pole_map"></div>
                                    <div class="absoluteMap">
                                      <button class="btn btn-success btn-sm4">Online</button>
                                    </div>
                                    <div id="totaldevice" class="text-dash-onlineall">/0</div>
                                    <div id="restdevice" class="text-dash-online">0</div>
                                    <div class="text-dash-onlinetag"> devices </div>
                                    {{-- <iframe width="100%" height="100%" frameborder="0"  
                                      src="//umap.openstreetmap.fr/en/map/poles-map_595016?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#14/18.7968/98.9639">
                                    </iframe> --}}
                                  </div>
                                </div>
                              </div>
                          
                          </div>
                            
                        </div>
                      </div>
                  </div>
                
                </div>
              <!-- End Map  -->
            </div>
          
            

          </div> 
      </div>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  var devices_list = {!! json_encode($devices_list) !!};
  console.log(devices_list);
  var restdevice = 0;
  var totaldevice = devices_list.length;
  document.getElementById('totaldevice').innerHTML = "/"+totaldevice;

  (function() {
    // camera360
    $.ajax({
      type: "GET",
      // url: "http://10.2.4.54",
      url: devices_list[0]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[0]['api_link'] != null){
          document.getElementById('loginlive360').src = "http://10.2.4.54/ISAPI/Streaming/channels/101";
          document.getElementById('live360').src = "http://10.2.4.54/ISAPI/Streaming/channels/101/httpPreview";
          document.getElementById('btnlive360').className = "btn btn-success btn-sm1";
          document.getElementById('btnlive360').onclick = function(ev) {window.location="{{ url('camera360') }}";};
          document.getElementById('btnlive360').innerHTML = 'Online';
        }
      },
      error: function() {
        console.log("live camera360 error");
        // document.getElementById('live360').src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png";        
      },
    });
    // intercom
    $.ajax({
      type: "GET",
      // url: "http://10.2.4.50",
      url: devices_list[1]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[1]['api_link'] != null){
          document.getElementById('interimg').src = "http://10.2.4.50:8080/video.cgi";
          document.getElementById('btninter').className = "btn btn-success btn-sm1";
          document.getElementById('btninter').onclick = function(ev) {window.location="{{ url('intercom') }}";};
          document.getElementById('btninter').innerHTML = 'Online';
        }
      },
      error: function() {
        console.log("live intercom error");     
        // document.getElementById('interimg').src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png"; 
      },
    });
    // temp camera
    $.ajax({
      type: "GET",
      // url: "http://202.28.247.117",
      url: devices_list[2]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[2]['api_link'] != null){
          document.getElementById('tempimg').src = "http://202.28.247.117/axis-cgi/mjpg/video.cgi";
          document.getElementById('btntemp').className = "btn btn-success btn-sm1";
          document.getElementById('btntemp').onclick = function(ev) {window.location="{{ url('camera_temp') }}";};
          document.getElementById('btntemp').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("temp camera error");      
        // document.getElementById('tempimg').src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png"; 
      },
    });
    // LPR
    $.ajax({
      type: "GET",
      url: devices_list[3]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[3]['api_link'] != null){
          document.getElementById('licenseimg').src = "http://202.28.247.117/axis-cgi/mjpg/video.cgi";
          document.getElementById('btnlicense').className = "btn btn-success btn-sm1";
          document.getElementById('btnlicense').onclick = function(ev) {window.location="{{ url('camera_license') }}";};
          document.getElementById('btnlicense').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("LPR error");  
        // document.getElementById('licenseimg').src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png";     
      },
    });
    // face camera
    $.ajax({
      type: "GET",
      url: devices_list[4]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[0]['api_link'] != null){
          document.getElementById('faceimg').src = "http://202.28.247.117/axis-cgi/mjpg/video.cgi";
          document.getElementById('btnface').className = "btn btn-success btn-sm1";
          document.getElementById('btnface').onclick = function(ev) {window.location="{{ url('camera_face') }}";};
          document.getElementById('btnface').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("face camera error");      
        // document.getElementById('faceimg').src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png"; 
      },
    });
    // esave dashboard
    $.ajax({
      type: "GET",
      url: devices_list[5]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[5]['api_link'] != null){
          document.getElementById('esave1').href = "{{ route('esave_dashboard') }}";
          document.getElementById('btnesave1').className = "btn btn-success btn-sm2";
          document.getElementById('btnesave1').onclick = function(ev) {window.location="{{ url('esave_dashboard') }}";};
          document.getElementById('btnesave1').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("esave dashboard error");      
      },
    });
    // cluster projector
    $.ajax({
      type: "GET",
      url: devices_list[6]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[6]['api_link'] != null){
          document.getElementById('esave2').href = "{{ route('cluster_projector') }}";
          document.getElementById('btnesave2').className = "btn btn-success btn-sm2";
          document.getElementById('btnesave2').onclick = function(ev) {window.location="{{ url('cluster_projector') }}";};
          document.getElementById('btnesave2').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("cluster projector error");      
      },
    });
    // cluster projector lador
    $.ajax({
      type: "GET",
      url: devices_list[7]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[7]['api_link'] != null){
          document.getElementById('esave3').href = "{{ route('cluster_projector_lador') }}";
          document.getElementById('btnesave3').className = "btn btn-success btn-sm2";
          document.getElementById('btnesave3').onclick = function(ev) {window.location="{{ url('cluster_projector_lador') }}";};
          document.getElementById('btnesave3').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("cluster projector lador error");      
      },
    });
    // meteodata
    $.ajax({
      type: "GET",
      url: devices_list[8]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[8]['api_link'] != null){
          document.getElementById('esave4').href = "{{ route('meteodata') }}";
          document.getElementById('btnesave4').className = "btn btn-success btn-sm2";
          document.getElementById('btnesave4').onclick = function(ev) {window.location="{{ url('meteodata') }}";};
          document.getElementById('btnesave4').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("meteodata error");      
      },
    });
    // occupancy
    $.ajax({
      type: "GET",
      url: devices_list[9]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[9]['api_link'] != null){
          document.getElementById('esave5').href = "{{ route('occupancy') }}";
          document.getElementById('btnesave5').className = "btn btn-success btn-sm2";
          document.getElementById('btnesave5').onclick = function(ev) {window.location="{{ url('occupancy') }}";};
          document.getElementById('btnesave5').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("occupancy error");      
      },
    });
    // exstreamer
    $.ajax({
      type: "GET",
      // url: "https://10.2.4.52",
      url: devices_list[10]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[10]['api_link'] != null){
          document.getElementById('exstreamer').href = "{{ route('ex_speaker') }}";
          document.getElementById('btnexstreamer').className = "btn btn-success btn-sm3";
          document.getElementById('btnexstreamer').onclick = function(ev) {window.location="{{ url('ex_speaker') }}";};
          document.getElementById('btnexstreamer').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("exstreamer error");      
      },
    });
    // instreamer
    $.ajax({
      type: "GET",
      // url: "https://10.2.4.53",
      url: devices_list[11]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[11]['api_link'] != null){
          document.getElementById('instreamer').href = "{{ route('in_speaker') }}";
          document.getElementById('btninstreamer').className = "btn btn-success btn-sm3";
          document.getElementById('btninstreamer').onclick = function(ev) {window.location="{{ url('in_speaker') }}";};
          document.getElementById('btninstreamer').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("instreamer error");      
      },
    });
    // digital signage
    $.ajax({
      type: "GET",
      // url: "https://edsbox.net/CMService/FreeLogin",
      url: devices_list[12]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[12]['api_link'] != null){
          document.getElementById('digital').href = "{{ route('digital_signage') }}";
          document.getElementById('btndigital').className = "btn btn-success btn-sm3";
          document.getElementById('btndigital').onclick = function(ev) {window.location="{{ url('digital_signage') }}";};
          document.getElementById('btndigital').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("digital signage error");      
      },
    });
    // round plug
    $.ajax({
      type: "GET",
      url: devices_list[13]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[13]['api_link'] != null){
          document.getElementById('plug').href = "{{ route('power_socket') }}";
          document.getElementById('btnplug').className = "btn btn-success btn-sm3";
          document.getElementById('btnplug').onclick = function(ev) {window.location="{{ url('power_socket') }}";};
          document.getElementById('btnplug').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("round plug error");      
      },
    });
    // Air Transmitter
    $.ajax({
      type: "GET",
      // url: "https://umap.openstreetmap.fr/th-th/",
      url: devices_list[14]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[14]['api_link'] != null){
          document.getElementById('plug').href = "{{ route('air_transmitter') }}";
          document.getElementById('btnpmair').className = "btn btn-success btn-sm3";
          document.getElementById('btnpmair').onclick = function(ev) {window.location="{{ url('air_transmitter') }}";};
          document.getElementById('btnpmair').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("Air Transmitter error");      
      },
    });
  })();
</script>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqTFzYkIkd1fw2jyCxkCVsRprw-RSs0AU&callback=initMap&libraries=&v=weekly"
  async>
</script>

<style type="text/css">
  #pole_map {
    margin-top: 0px;
    height: 100%;
    width: 100%;
  }
  #air_map {
    margin-top: 0px;
    height: 100%;
    width: 100%;
  }
</style>

<script>
  const air_map;
  const pole_map;

  const locations = [
        { lat: -31.56391, lng: 147.154312 },
        { lat: -33.718234, lng: 150.363181 },
        { lat: -33.727111, lng: 150.371124 },
        { lat: -33.848588, lng: 151.209834 },
        { lat: -33.851702, lng: 151.216968 },
        { lat: -34.671264, lng: 150.863657 },
        { lat: -35.304724, lng: 148.662905 },
        { lat: -36.817685, lng: 175.699196 },
        { lat: -36.828611, lng: 175.790222 },
        { lat: -37.75, lng: 145.116667 },
        { lat: -37.759859, lng: 145.128708 },
        { lat: -37.765015, lng: 145.133858 },
        { lat: -37.770104, lng: 145.143299 },
        { lat: -37.7737, lng: 145.145187 },
        { lat: -37.774785, lng: 145.137978 },
        { lat: -37.819616, lng: 144.968119 },
        { lat: -38.330766, lng: 144.695692 },
        { lat: -39.927193, lng: 175.053218 },
        { lat: -41.330162, lng: 174.865694 },
        { lat: -42.734358, lng: 147.439506 },
        { lat: -42.734358, lng: 147.501315 },
        { lat: -42.735258, lng: 147.438 },
        { lat: -43.999792, lng: 170.463352 },
      ];
  
  function initMap() {
    var poles_list = {!! json_encode($poles_list) !!};
    console.log(poles_list);

    // const cur_pos = { lat: poles_list[0]['latitude'], lng: poles_list[0]['longitude'] };

    // air_map = new google.maps.Map(document.getElementById("air_map"), {
    //   zoom: 15,
    //   center: cur_pos,
    // });
    // const m1 = new google.maps.Marker({
    //   position: cur_pos,
    //   map: air_map,
    // });

    // pole_map = new google.maps.Map(document.getElementById("pole_map"), {
    //   zoom: 15,
    //   center: cur_pos,
    // });

    const map = new google.maps.Map(document.getElementById("pole_map"), {
      zoom: 3,
      center: { lat: -28.024, lng: 140.887 },
    });
    // Create an array of alphabetical characters used to label the markers.
    const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // Add some markers to the map.
    // Note: The code uses the JavaScript Array.prototype.map() method to
    // create an array of markers based on a given "locations" array.
    // The map() method here has nothing to do with the Google Maps API.
    const markers = locations.map((location, i) => {
      return new google.maps.Marker({
        position: location,
        label: labels[i % labels.length],
      });
    });
    // Add a marker clusterer to manage the markers.
    new MarkerClusterer(map, markers, {
      imagePath:
        "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
    });
  }
</script>
@endsection
  
