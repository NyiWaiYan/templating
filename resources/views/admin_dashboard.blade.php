<!DOCTYPE html>
<html lang="en">
   
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>Preskool - Dashboard</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png')}}">
  
      <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css')}}">
      <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
   </head>
   <body>
      <div class="main-wrapper">
            {{-- Header --}}
            @include('adminbody.header')
            {{-- SideBar --}}
            @include('adminbody.sidebar')

            @yield('admin')
      </div>
      <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('assets/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
      <script src="{{asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
      <script src="{{asset('assets/plugins/apexchart/chart-data.js')}}"></script>
      <script src="{{asset('assets/js/script.js')}}"></script>
   </body>
   
</html>