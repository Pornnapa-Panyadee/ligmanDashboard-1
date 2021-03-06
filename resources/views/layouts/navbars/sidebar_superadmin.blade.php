<div class="sidebar" data-color="white" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    
    <div class="logo">
      <a href="/" class="simple-text logo-normal">
        <img src="{{ asset('material/img/logo/ligman_logo_20_2c_fn_200.png') }}" widht="100%" >
      </a>
    </div>
    
    <div class="sidebar-wrapper">
      
      <ul class="nav">
        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('profile.edit') }}">
            <i class="material-icons text-orange">person</i>
              <p>{{ __('Profile') }}</p>
          </a>
        </li>

        <li class="nav-item{{ $activePage == 'superadmincreate' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('adminForm.superadmin.create') }}">
            <i class="material-icons text-orange">person_add_alt</i>
              <p>{{ __('Create Account') }}</p>
          </a>
        </li>
        
        <li class="nav-item{{ $activePage == 'superadminlist' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('adminForm.superadmin.list') }}">
            <i class="material-icons text-orange">people</i>
            <p>{{ __('User List') }}</p>
          </a>
        </li>

        <li class="nav-item{{ $activePage == 'deviceSuperadmin' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('superadmin_list') }}">
            <i class="material-icons text-orange">format_list_bulleted</i>
            <p>{{ __('Device Settings') }}</p>
          </a>
        </li>

        <li class="nav-item{{ $activePage == 'superadminDashboard' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('adminForm.superadmin.dashboard') }}">
            <i class="material-icons text-orange">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
