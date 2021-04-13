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
        <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">
              <i class="icon-dome-camera text-orange"></i>
              <p>{{ __('Speed Dome Camera 360°') }}</p>
          </a>
        </li>
        
        <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('table') }}">
            <i class="icon-car text-orange"></i>
              <p>{{ __('Camera Fix Lens (plate)') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('typography') }}">
            <i class="icon-temp text-orange"></i>
              <p>{{ __('Camera Temp Monitoring') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('icons') }}">
            <i class="icon-face text-orange"></i>
            <p>{{ __('Camera Fix Lens (Face)') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'icons1' ? ' active' : '' }}">
          <a class="nav-link" href="/">
            <i class="icon-intercom text-orange"></i>
              <p>{{ __('Intercom') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Advertisement</li>
        </div>
        <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('notifications') }}">
            <i class="icon-bullhorn text-orange"></i>
            <p>{{ __('Exstreamer Loud Speaker') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('language') }}">
            <i class="icon-In-loud text-orange"></i>
            <p>{{ __('Instreamer Loud Speaker') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('language') }}">
            <i class="icon-Digital_Signage text-orange"></i>
            <p>{{ __('Digital Signage') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Weather</li>
        </div>
        <li class="nav-item ">
          <a class="nav-link " href="">
            <i class="icon-cloudy1 text-orange"></i>
            <p>{{ __('e-Save Meteodata') }}</p>
          </a>
        </li>
        <li class="nav-item a{{ $activePage == 'upgrade2' ? ' active' : '' }}">
          <a class="nav-link " href="">
            <i class="icon-pm text-orange" ></i>
            <p>{{ __('Air Transmitter') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Control System</li>
        </div>
        <li class="nav-item {{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('upgrade') }}">
            <i class="icon-occupancy text-orange"></i>
            <p>{{ __('Occupancy Sensor') }}</p>
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('upgrade') }}">
            <i class="icon-power-plug text-orange"></i>
            <p>{{ __('Roud Power Socket') }}</p>
          </a>
        </li>
        <div id="group">
          <li class="menu-title text-head ">Smart Lighting</li>
        </div>
        <li class="nav-item {{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('upgrade') }}">
            <i class="icon-gauge text-orange" ></i>
            <p>{{ __('e-Save Dashboard') }}</p>
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
            <i class="icon-cluster_projectors text-orange"></i>
            <p>{{ __('Cluster Projectors') }}</p>
          </a>
        </li>
        <li class="nav-item {{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link " href="{{ route('upgrade') }}">
            <i class="icon-cluster_projectors_ladar text-orange"></i>
            <p>{{ __('Cluster Projectors Lador ') }}</p>
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
