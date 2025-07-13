<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Dashboard')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- Styles --}}
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}">
  @stack('styles')
</head>
<body>
  <!-- Header / Sidebar / Navbar -->
  @include('layouts.partials.sidebar')
  @include('layouts.partials.header')

  <!-- Content -->
  <div class="page-body">
    @yield('content')
  </div>

  <!-- Scripts -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>
