<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title') | Dashboard</title>

  <!-- Cuba CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}">
</head>
<body>
  <!-- Main Wrapper -->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">

    <!-- Header (Navbar) -->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
          <a href="{{ url('/') }}">
            <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
            <img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="">
          </a>
        </div>
        <div class="nav-right col p-0">
          <ul class="nav-menus">
            <li><a class="text-dark" href="#" onclick="toggleFullScreen()"><i class="fa fa-expand"></i></a></li>
            <li class="onhover-dropdown">
              <div class="notification-box"><i class="fa fa-bell-o"></i><span class="badge rounded-pill badge-secondary">4</span></div>
              <ul class="notification-dropdown onhover-show-div">
                <li>Anda punya 4 notifikasi</li>
              </ul>
            </li>
            <li><a class="text-dark" href="#"><i class="fa fa-user"></i> SISTERGLOW
          </ul>
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar-wrapper">
      <div>
        <div class="logo-wrapper">
          <a href="#"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a>
        </div>
        <nav class="sidebar-main">
          <div class="left-arrow" id="left-arrow"><i class="fa fa-angle-left"></i></div>
          <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
              <li class="sidebar-main-title"><div><h6>Menu Utama</h6></div></li>
              <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="#"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
              </li>
              <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="#"><i class="fa fa-users"></i><span>Layanan</span></a>
              </li>
              <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="#"><i class="fa fa-building"></i><span>booking/a>
              </li>
              <li class="sidebar-list">
                <a class="sidebar-link sidebar-title link-nav" href="#"><i class="fa fa-user-graduate"></i><span>Costumer</a>
              </li>
            </ul>
          </div>
          <div class="right-arrow" id="right-arrow"><i class="fa fa-angle-right"></i></div>
        </nav>
      </div>
    </div>

    <!-- Main Content -->
    <div class="page-body">
      <div class="container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-6">
              <h3>@yield('headline')</h3>
            </div>
            <div class="col-6">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">@yield('title')</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        @yield('content')
      </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">Copyright © 2025 SIM. All rights reserved.</p>
          </div>
          <div class="col-md-6">
            <p class="mb-0 text-end">Versi 1.0</p>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <!-- Cuba JS -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>

  <script>
    function toggleFullScreen() {
      if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen();
      } else {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        }
      }
    }
  </script>
</body>
</html>
