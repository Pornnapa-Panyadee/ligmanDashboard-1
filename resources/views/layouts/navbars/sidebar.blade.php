  <div class="sidebar" data-color="white" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
      <a href="/" class="simple-text logo-normal">
        <img src="{{ asset('material/img/logo/ligman_logo_20_2c_fn_200.png') }}" widht="100%" >
      </a>
      <!-- <a href="/" class="simple-text hidden logo-mini ">
        <img src="{{ asset('material/img/logo/ligman_logo_20_2c_fn_200.png') }}" widht="10%" >
      </a> -->
    </div>
    
    <div class="sidebar-wrapper">
      
      <ul class="nav">
        <div id="group">
        <li class="menu-title text-head ">Camera</li>
        </div>
        <li class="nav-item{{ $activePage == 'camera360' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('camera360') }}">
              <i class="icon-dome-camera text-orange"></i>
              <p>{{ __('Speed Dome Camera 360°') }}</p>
          </a>
        </li>
        
        <li class="nav-item{{ $activePage == 'camera_license' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('camera_license') }}">
            <i class="icon-car text-orange"></i>
              <p>{{ __('Camera Fix Lens (plate)') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'camera_temp' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('camera_temp') }}">
            <i class="icon-temp text-orange"></i>
              <p>{{ __('Camera Temp Monitoring') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'camera_face' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('camera_face') }}">
            <i class="icon-face text-orange"></i>
            <p>{{ __('Camera Fix Lens (Face)') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'intercom' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('intercom') }}">
            <i class="icon-intercom text-orange"></i>
              <p>{{ __('Intercom') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Advertisement</li>
        </div>
        <li class="nav-item{{ $activePage == 'ex_speaker' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('ex_speaker') }}">
            <i class="icon-bullhorn text-orange"></i>
            <p>{{ __('Exstreamer Loud Speaker') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'in_speaker' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('in_speaker') }}">
            <i class="icon-In-loud text-orange"></i>
            <p>{{ __('Instreamer Loud Speaker') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'digital_signage' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('digital_signage') }}">
            <i class="icon-Digital_Signage text-orange"></i>
            <p>{{ __('Digital Signage') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Weather</li>
        </div>
        <li class="nav-item {{ $activePage == 'meteodata' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('meteodata') }}">
            <i class="icon-cloudy1 text-orange"></i>
            <p>{{ __('e-Save Meteodata') }}</p>
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'air_transmitter' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('air_transmitter') }}">
            <i class="icon-pm text-orange" ></i>
            <p>{{ __('Air Transmitter') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Control System</li>
        </div>
        <li class="nav-item {{ $activePage == 'occupancy' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('occupancy') }}">
            <i class="icon-occupancy text-orange"></i>
            <p>{{ __('Occupancy Sensor') }}</p>
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'power_socket' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('power_socket') }}">
            <i class="icon-power-plug text-orange"></i>
            <p>{{ __('Roud Power Socket') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Smart Lighting</li>
        </div>
<<<<<<< master
        <li class="nav-item {{ $activePage == 'esave_dashboard' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('esave_dashboard') }}">
            <i class="icon-gauge text-orange" ></i>
            <p>{{ __('e-Save Dashboard') }}</p>
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'cluster_projector' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('cluster_projector') }}">
            <i class="icon-cluster_projectors text-orange"></i>
            <p>{{ __('Cluster Projectors') }}</p>
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'cluster_projector_lador' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('cluster_projector_lador') }}">
            <i class="icon-cluster_projectors_ladar text-orange"></i>
            <p>{{ __('Cluster Projectors Lador ') }}</p>
          </a>
        </li>
        
        <li class="nav-item {{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('upgrade') }}">
            <i class="icon-imergency text-orange"></i>
            <p>{{ __('Beacon Glow Blue') }}</p>
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('upgrade') }}">
            <i class="icon-imergency text-orange"></i>
            <p>{{ __('Emergency Beacon ') }}</p>
          </a>
        </li>      
      </ul>
    </div>
  </div>
=======
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}" onclick="openRequestedSinglePopup('https://www.esaveag.com/slcontrol/?id=230&lang=en')">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  function openRequestedSinglePopup(url) {
    newWindow = window.open(url, "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=190,left=255,width=1640,height=800");
    // focus on the popup //
    newWindow.focus();
    // newWindow.close();
    
    // if you want to close it after some time (like for example open the popup print the receipt and close it) //
    // setTimeout(function() {
    //   newWindow.close();
    // }, 5000);
  }

</script>
>>>>>>> master
