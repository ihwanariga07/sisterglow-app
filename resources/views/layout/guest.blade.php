<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','Login | Cuba Admin')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Vendor & theme CSS (kopi dari template Cuba) -->
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('cuba-assets/css/color-1.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/responsive.css') }}">

    @stack('styles')
</head>
<body class="dark-only"> {{-- “login-dark” kelas khas Cuba --}}
    @yield('content')

    <!-- Vendor & theme JS -->
    <script src="{{ asset('cuba-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/config.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/script.js') }}"></script>

    @stack('scripts')
</body>
</html>
