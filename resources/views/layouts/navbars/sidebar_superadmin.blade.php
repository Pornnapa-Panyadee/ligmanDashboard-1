<div class="sidebar" data-color="white" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    
    <div class="logo">
      <a href="/" class="simple-text logo-normal">
        <img src="{{ asset('material/img/logo/ligman_logo_20_2c_fn_200.png') }}" widht="100%" >
      </a>
    </div>
    
    <div class="sidebar-wrapper">
      
      <ul class="nav">
        <li class="nav-item{{ $activePage == 'superadminlist' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('superadmin.list') }}">
            <i class="material-icons text-orange">person_add_alt</i>
              <p>{{ __('Create Account') }}</p>
          </a>
        </li>
        
        <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
          <a class="nav-link" href="">
              <i class="material-icons text-orange">dashboard</i>
              <p>{{ __('Dashboard') }}</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
