{{-- resources/views/layouts/template.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cuba Admin')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('cuba-assets/images/favicon.png') }}" type="image/x-icon">

    <!-- ---------------------------------- -->
    <!-- Google Fonts                      -->
    <!-- ---------------------------------- -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- ---------------------------------- -->
    <!-- Core & Vendor CSS                 -->
    <!-- ---------------------------------- -->
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/themify.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/vendors/feather-icon.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('cuba-assets/css/color-1.css') }}">
    <link rel="stylesheet" href="{{ asset('cuba-assets/css/responsive.css') }}">

    @stack('styles') <!-- Halaman bisa menambahkan CSS extra -->
</head>
<body>
    <!-- ========== Sidebar ========== -->
    @include('layouts.partials.sidebar')

    <!-- ========== Header / Navbar ========== -->
    @include('layouts.partials.header')

    <!-- ========== Main Content ========== -->
    <div class="page-body">
        @yield('content')
    </div>

    <!-- (Optional) Footer  -->
    @hasSection('footer')
        @yield('footer')
    @endif

    <!-- ---------------------------------- -->
    <!-- Core & Vendor JS                  -->
    <!-- ---------------------------------- -->
    <script src="{{ asset('cuba-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/config.js') }}"></script>
    <script src="{{ asset('cuba-assets/js/script.js') }}"></script>

    @stack('scripts') <!-- Halaman bisa menambahkan JS extra -->
</body>
</html>
