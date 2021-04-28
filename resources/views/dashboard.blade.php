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
                                <i class="material-icons text-success" style="font-size:50px;"> notifications</i>
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
                                  height:350px;display: flex;
                                  justify-content: center;
                                  align-items: center;"
                                  ><img id="interimg" src="http://10.2.4.54:80/ISAPI/Streaming/channels/101/httpPreview" width="100%" height="80%">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera360') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>1</span></div> 
                                    <span class="text_font">{{ __('Speed Dome Camera 360°') }}</span>
                                    <div class="absolute">
                                      <button class="btn btn-success btn-sm1">Online</button>
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
                                  ><img id="interimg" src="http://10.2.4.50:8080/video.cgi" width="100%">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('intercom') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>4</span></div> 
                                    <span class="text_font">{{ __('Intercom') }}</span>
                                    <div class="absolute">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
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
                                  ><img id="tempimg" src="http://202.28.247.117/axis-cgi/mjpg/video.cgi" width="100%">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera_temp') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>4</span></div> 
                                    <span class="text_font">{{ __('Camera Temp') }}</span>
                                    <div class="absolute1">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
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
                                  ><img id="licenseimg" src="http://202.28.247.117/axis-cgi/mjpg/video.cgi" width="100%">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera_license') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>1</span></div> 
                                    <span class="text_font">{{ __('Licence Plate') }}</span>
                                    <div class="absolute1">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
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
                                  ><img id="faceimg" src="http://202.28.247.117/axis-cgi/mjpg/video.cgi" width="100%">
                                  </div>
                                </div>
                                <div class="card-footer" onclick="window.location='{{ url('camera_face') }}'">
                                  <div class="stats">
                                    <hr class="dash_status">
                                    <div class="dash-tri"><span>4</span></div> 
                                    <span class="text_font">{{ __('Face') }}</span>
                                    <div class="absolute1">
                                      <button class="btn btn-success btn-sm1 ">Online</button>
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
                                      <a class="dash-link" href="{{ route('esave_dashboard') }}">
                                        <i class="icon-gauge text-orange"  style="font-size:65px;"></i>
                                        <p>E-Save <br> Dashboard</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>1</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">{{ ('Online') }}</button>
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
                                      <a class="dash-link " href="{{ route('cluster_projector') }}">
                                        <i class="icon-cluster_projectors text-orange"  style="font-size:65px;"></i>
                                        <p>Cluster <br> Projectors</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>1</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">Online</button>
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
                                      <a class="dash-link " href="{{ route('cluster_projector_lador') }}">
                                        <i class="icon-cluster_projectors_ladar text-orange"  style="font-size:65px;"></i>
                                        <p>Cluster <br> Projectors Lador</p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                  <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>3</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">Online</button>
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
                                      <a class="dash-link " href="{{ route('meteodata') }}">
                                        <i class="icon-cloudy1 text-orange"  style="font-size:65px;"></i>
                                        <p>E-Save <br> Meteodata </p>
                                      </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>2</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">Online</button>
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
                                        <a class="dash-link " href="{{ route('occupancy') }}">
                                          <i class="icon-occupancy text-orange"  style="font-size:65px;"></i>
                                          <p>Occupancy  <br> Sensor</p>
                                        </a>
                                    </div>
                                  </div>
                                  <div class="card-footer">
                                    <div class="stats">
                                      <hr class="dash_status1">
                                      <div class="dash-tri"><span>2</span></div> 
                                      <div class="absolute1">
                                        <button class="btn btn-success btn-sm2 ">Online</button>
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
                                        <a class="dash-link " href="{{ route('ex_speaker') }}">
                                          <i class="icon-bullhorn text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Exstreamer <br>Loud Speaker</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                          <hr class="dash_status1">
                                          <div class="dash-tri"><span>4</span></div> 
                                          <div class="absolute1">
                                            <button class="btn btn-success btn-sm3">Online</button>
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
                                        <a class="dash-link " href="{{ route('in_speaker') }}">
                                          <i class="icon-In-loud text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Instreamer <br>Loud Speaker </p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>4</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-success btn-sm3">Online</button>
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
                                        <a class="dash-link " href="{{ route('digital_signage') }}">
                                          <i class="icon-Digital_Signage text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Digital <br> Signage</p>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>4</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-success btn-sm3">Online</button>
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
                                        <a class="dash-link " href="{{ route('power_socket') }}">
                                          <i class="icon-power-plug text-orange"  style="font-size:60px;"></i>
                                          <p class="icon_dashAd">Roud <br> Power Socket
                                        </a>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>4</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-offline btn-sm3">Offline</button>
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
                                        <iframe width="100%" height="100%" frameborder="0" scrolling="no"
                                          src="//umap.openstreetmap.fr/th-th/map/air-transmitter_595019?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#16/18.7953/458.9519">
                                        </iframe>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="stats">
                                        <hr class="dash_status1">
                                        <div class="dash-tri"><span>3</span></div> 
                                        <div class="absolute1">
                                          <button class="btn btn-success btn-sm2 ">Online</button>
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
                                  <div class="card " style="height:277px;">
                                    <div class="absoluteMap">
                                      <button class="btn btn-success btn-sm4">Online</button>
                                    </div>
                                      <div class="text-dash-online"> 11 </div>
                                      <div class="text-dash-onlineall"> /15 </div>
                                      <div class="text-dash-onlinetag"> devices </div>
                                    <iframe width="100%" height="100%" frameborder="0"  
                                      src="//umap.openstreetmap.fr/en/map/poles-map_595016?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=null&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false#14/18.7968/98.9639">
                                    </iframe>
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
@endsection
  
