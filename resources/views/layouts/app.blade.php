<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Laravel'))</title>

    {{-- Fonts --}}
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- CSS Cuba Admin --}}
    <link href="{{ asset('cuba/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cuba/assets/css/style.css') }}" rel="stylesheet">

    {{-- Tambahkan CSS tambahan jika perlu --}}
    @stack('styles')
</head>
<body>

    {{-- Sidebar Cuba Admin --}}
    @include('layouts.sidebar')

    {{-- Navbar Cuba Admin --}}
    @include('layouts.navbar')

    {{-- Konten Utama --}}
    <main class="page-body">
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </main>

    {{-- Footer (opsional) --}}
    @include('layouts.footer')

    {{-- JS Cuba Admin --}}
    <script src="{{ asset('cuba/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('cuba/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cuba/assets/js/script.js') }}"></script>

    {{-- Tambahkan JS tambahan jika perlu --}}
    @stack('scripts')
</body>
</html>
