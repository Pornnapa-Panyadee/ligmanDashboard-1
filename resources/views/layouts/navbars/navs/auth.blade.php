<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-minimize">
        <button id="minimizeSidebar" class="btn btn-just-icon btn-orange  btn-round" >
            <i class="material-icons text_align-center text-orange visible-on-sidebar-regular" >arrow_left</i>
            <i class="material-icons text-orange visible-on-sidebar-mini" >arrow_right</i>
            <div class="ripple-container" > </div>
        </button>

      </div>
      <a class="navbar-brand" href="#">{{ $titlePage ?? '' }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
     
      <ul class="navbar-nav">
        <li class="nav-item active">
          <div class="text_usernameadmin" >{{ __('Username') }}</div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              {{ __('Account') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
          
            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
          <!-- for admin  -->
            {{-- <a class="dropdown-item" href="{{ route('adminForm.admin.list') }}">{{ __('Settings') }}</a> --}}
          <!-- for superadmin -->
            <a class="dropdown-item" href="{{ route('adminForm.superadmin.list') }}">{{ __('Settings') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
