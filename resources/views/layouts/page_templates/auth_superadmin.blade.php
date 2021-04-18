<div class="wrapper ">

  @include('layouts.navbars.sidebar_superadmin')
  <div class="main-panel">
    @include('layouts.navbars.navs.auth')
    @yield('content')
    <!-- @include('layouts.footers.auth') -->
  </div>
</div>