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
                          <!-- <div class="row" style="margin-top:3px;">
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
                          </div> -->
                        <!-- Edit 2 device From Erdi -->
                        <div class="row" style="margin-top:3px;">
                            <div class="col-md-8">
                              <div class="card-dash">
                                <div class="card-header card-header-white">
                                  <div class="ct-chart" style="
                                  height:240px;display: flex;
                                  justify-content: center;
                                  align-items: center;"
                                  ><img id="licenseimg" height="100%" src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png">
                                    
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>{{$devices_list[2]->pole_id}}</span></div> 
                                    <span class="text_font">{{ __('Licence Plate Recognition') }}</span>
                                    <div class="absolute1">
                                      <button id="btnlicense" class="btn btn-offline btn-sm1">Offline</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="card-dash">
                                <div class="card-header ">
                                  <div  class="icon_Face">
                                      <a id="faceimg"  href="#">
                                      <i class="icon-face text-orange"  style="font-size:120px;"></i>
                                      <p>Face Recognition <br>Thermometer</p>
                                    </a>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>{{$devices_list[3]->pole_id}}</span></div> 
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
                                      <div class="dash-tri"><span>{{$devices_list[4]->pole_id}}</span></div> 
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
                                      <div class="dash-tri"><span>{{$devices_list[5]->pole_id}}</span></div> 
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
                                      <div class="dash-tri"><span>{{$devices_list[6]->pole_id}}</span></div> 
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
                                      <div class="dash-tri"><span>{{$devices_list[7]->pole_id}}</span></div> 
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
                                      <div class="dash-tri"><span>{{$devices_list[8]->pole_id}}</span></div> 
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
                                          <div class="dash-tri"><span>{{$devices_list[9]->pole_id}}</span></div> 
                                          <div class="absolute1">
                                            {{-- <iframe id="loginexstreamer" style="display: none;" src={{$devices_list[10]->api_link}}></iframe> --}}
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
                                        <div class="dash-tri"><span>{{$devices_list[10]->pole_id}}</span></div> 
                                        <div class="absolute1">
                                          <iframe id="logininstreamer" style="display: none;" src={{$devices_list[11]->api_link}}></iframe>
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
                                        <div class="dash-tri"><span>{{$devices_list[11]->pole_id}}</span></div> 
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
                                        <div class="dash-tri"><span>{{$devices_list[12]->pole_id}}</span></div> 
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
                                      {{-- <div class="ct-chart" style="height:185px;"> --}}
                                        <div class="card" style="height:175px;">
                                        {{-- <iframe width="100%" height="100%" frameborder="0" scrolling="no"
                                          src="//umap.openstreetmap.fr/th-th/map/air-transmitter_595019?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#16/18.7953/458.9519">
                                        </iframe> --}}
                                        <div id="air_map"></div>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>{{$devices_list[13]->pole_id}}</span></div> 
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
  (function() {
    var devices_list = {!! json_encode($devices_list) !!};
    console.log(devices_list);
    var restdevice = 0;
    var totaldevice = devices_list.length;
    document.getElementById('totaldevice').innerHTML = "/"+totaldevice;
    // camera360
    $.ajax({
      type: "GET",
      // url: "http://10.2.4.54",
      url: devices_list[0]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[0]['api_link'] != null){
          document.getElementById('loginlive360').src = devices_list[0]['api_link'] + "/ISAPI/Streaming/channels/101";
          document.getElementById('live360').src = devices_list[0]['api_link'] + devices_list[0]['live_path'];
          document.getElementById('btnlive360').className = "btn btn-success btn-sm1";
          document.getElementById('btnlive360').onclick = function(ev) {window.location="{{ url('camera360') }}";};
          document.getElementById('btnlive360').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
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
          document.getElementById('interimg').src = devices_list[1]['api_link'] + ":8080/video.cgi";
          document.getElementById('btninter').className = "btn btn-success btn-sm1";
          document.getElementById('btninter').onclick = function(ev) {window.location="{{ url('intercom') }}";};
          document.getElementById('btninter').innerHTML = 'Online';
          restdevice++;
          document.getElementById('restdevice').innerHTML = restdevice;
        }
      },
      error: function() {
        console.log("live intercom error");     
        // document.getElementById('interimg').src = "https://www.kindpng.com/picc/m/116-1165084_disconnect-png-transparent-png.png"; 
      },
    });
    // LPR
    $.ajax({
      type: "GET",
      url: devices_list[2]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[2]['api_link'] != null){
          document.getElementById('licenseimg').src = devices_list[2]['api_link'] + "/axis-cgi/mjpg/video.cgi";
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
      url: devices_list[3]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[3]['api_link'] != null){
          document.getElementById('faceimg').src = devices_list[3]['api_link'] + "/axis-cgi/mjpg/video.cgi";
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
      url: devices_list[4]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[4]['api_link'] != null){
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
      url: devices_list[5]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[5]['api_link'] != null){
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
      url: devices_list[6]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[6]['api_link'] != null){
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
      url: devices_list[7]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[7]['api_link'] != null){
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
      url: devices_list[8]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[8]['api_link'] != null){
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
      // url: "http://10.2.4.52/index.html",
      url: devices_list[9]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[9]['api_link'] != null){
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
      // url: "http://10.2.4.53/index.html",
      url: devices_list[10]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[10]['api_link'] != null){
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
      url: devices_list[11]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[11]['api_link'] != null){
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
      url: devices_list[12]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[12]['api_link'] != null){
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
      url: devices_list[13]['api_link'],
      dataType: "script",
      timeout:5000,
      success: function() {
        if(devices_list[13]['api_link'] != null){
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
    google.maps.event.addDomListener(window, 'load', initMap);
  })();
</script>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
{{-- <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqTFzYkIkd1fw2jyCxkCVsRprw-RSs0AU&callback=initMap&libraries=&v=weekly"
  async>
</script> --}}
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
  function initMap() {
    var poles_list = {!! json_encode($poles_list) !!};
    console.log(poles_list.length);
    var isPole = true;
    if(poles_list.length==0){
      isPole = false;
      poles_list = [{'latitude':0, 'longitude':10}];
    }

    var air_pole = {!! json_encode($air_pole) !!};

    var response = false;
    if(air_pole!="'NA'"){
      var response = {!! $response !!};
      var last_air_data = response.data[response.data.length-1];
      console.log(last_air_data);
    }else{
      air_pole = [{'latitude':0, 'longitude':10}];
      console.log(air_pole);
    }

    var iconBase = '/material/img/pin_PM1/';
    var pm_names = ['good.png', 'moderate.png', 'unhealthy.png', 'unhealth_redy.png', 'veryunhealthy.png', 'hazardous.png'];
    // iconBase = iconBase + pm_names[4];
    if(response){
      var pm_value = parseInt(last_air_data.pm2_5);
      if(pm_value < 12) iconBase = iconBase + pm_names[0];
      else if(pm_value < 35) iconBase = iconBase + pm_names[1];
      else if(pm_value < 55) iconBase = iconBase + pm_names[2];
      else if(pm_value < 150) iconBase = iconBase + pm_names[3];
      else if(pm_value < 250) iconBase = iconBase + pm_names[4];
      else iconBase = iconBase + pm_names[5];
    }

    const air_map = new google.maps.Map(document.getElementById("air_map"), {
      zoom: 10,
      center: new google.maps.LatLng(air_pole[0]['latitude'], air_pole[0]['longitude']),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    const pole_map = new google.maps.Map(document.getElementById("pole_map"), {
      zoom: 12,
      center: new google.maps.LatLng(poles_list[0]['latitude'], poles_list[0]['longitude']),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    var infowindow = new google.maps.InfoWindow();

    if(response){
      for (var i=0; i<air_pole.length; i++) {  
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(air_pole[i]['latitude'], air_pole[i]['longitude']),
          map: air_map,
          icon: iconBase,
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            // infowindow.setContent("<pre>"+JSON.stringify(last_air_data,undefined, 2) +"</pre>");
            infowindow.setContent("<table class='table table-sm table-bordered'><tbody><tr><th>PM 2.5</th><th>Hum</th><th>Temp</th> </tr><tr><td>"+last_air_data.pm2_5+" </td> <td>"+parseInt(last_air_data.humi)+"</td><td>"+parseInt(last_air_data.temp)+"</td></tr></tbody></table>");
            infowindow.open(air_map, marker);
          }
        })(marker, i));
      }
    }

    if(isPole){
      for (var i=0; i<poles_list.length; i++) {  
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(poles_list[i]['latitude'], poles_list[i]['longitude']),
          map: pole_map,
        });

        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(poles_list[i]['location']);
            infowindow.open(pole_map, marker);
          }
        })(marker, i));
      }
    }
  }
</script>
@endsection
  
