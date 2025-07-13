<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>@yield('title','Auth − Cuba Admin')</title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap">

  <!-- Cuba core & vendor CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendors/icofont.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendors/themify.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/vendors/feather-icon.css') }}">

  <!-- Tema -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

  @stack('styles')
</head>
<body class="dark-only">

  @yield('content')

  <!-- Cuba JS -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>

  @stack('scripts')
</body>
</html>
