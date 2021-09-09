<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Apotik Sehat | {{ $page }}</title>
    <!-- Scripts -->
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('template/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('template/assets/css/argon.css?v=1.2.0') }}" type="text/css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body>
  {{-- Sidebar --}}
    @include('layouts.partials.ownersidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.partials.navbar')
    {{-- Main Content --}}
    @yield('content')
  </div>
  <script src="{{ asset('template/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('template/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('assets/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
