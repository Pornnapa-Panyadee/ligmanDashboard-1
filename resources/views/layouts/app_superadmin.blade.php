<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Ligman Administrator') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/logo/favicon.jpg">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- <link href="https://material-dashboard-pro-laravel.creative-tim.com/css/material-dashboard.css" rel="stylesheet" /> -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
    <!-- CSS icon font + Nav  -->
    <link href="{{ asset('material') }}/css/demo.css" rel="stylesheet" />
    <link href="{{ asset('material') }}/css/style.css" rel="stylesheet" />
    
    </head>
    <body class="{{ $class ?? '' }}">
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.page_templates.auth_superadmin')
        @endauth
        @guest()
            @include('layouts.page_templates.guest')
        @endguest
        
        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
    
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('material') }}/demo/demo.js"></script>
        <script src="{{ asset('material') }}/js/settings.js"></script>
       
        <script>
          $(document).ready(function() {
          $('#datatables').DataTable({
              "pagingType": "full_numbers",
              "lengthMenu": [
              [10, 25, 50, -1],
              [10, 25, 50, "All"]
              ],
              responsive: true,
              language: {
              search: "_INPUT_",
              searchPlaceholder: "Search records",
              }
          });

          var table = $('#datatable').DataTable();

          // Edit record
          table.on('click', '.edit', function() {
              $tr = $(this).closest('tr');
              var data = table.row($tr).data();
              alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
          });

          // Delete a record
          table.on('click', '.remove', function(e) {
              $tr = $(this).closest('tr');
              table.row($tr).remove().draw();
              e.preventDefault();
          });

          //Like record
          table.on('click', '.like', function() {
              alert('You clicked on Like button');
          });
          });
        </script>
        @stack('js')
    </body>
</html>