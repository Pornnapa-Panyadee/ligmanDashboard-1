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

        <li class="nav-item{{ $activePage == 'listadmin' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('adminForm.admin.list') }}">
            <i class="material-icons text-orange">format_list_bulleted</i>
            <p>{{ __('List') }}</p>
          </a>
        </li>

        <li class="nav-item{{ $activePage == 'create_location' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('adminForm.admin.location') }}">
            <i class="material-icons text-orange">location_on</i>
              <p>{{ __('Create Pole Location ') }}</p>
          </a>
        </li>

        <li class="nav-item{{ $activePage == 'create_device' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('adminForm.admin.create_device') }}">
            <i class="material-icons text-orange">lightbulb</i>
              <p>{{ __('Create Device ') }}</p>
          </a>
        </li>

        
        
        
      </ul>
    </div>
  </div>
