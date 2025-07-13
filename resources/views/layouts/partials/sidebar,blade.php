<!-- resources/views/layouts/partials/sidebar.blade.php -->
<div class="sidebar-wrapper">
  <div>
    <div class="logo-wrapper">
      <a href="{{ route('admin.dashboard') }}">
        <img class="img-fluid for-light" src="{{ asset('cuba-assets/images/logo/logo.png') }}" alt="">
        <img class="img-fluid for-dark" src="{{ asset('cuba-assets/images/logo/logo_dark.png') }}" alt="">
      </a>
    </div>
    <div class="logo-icon-wrapper">
      <a href="{{ route('admin.dashboard') }}">
        <img class="img-fluid" src="{{ asset('cuba-assets/images/logo/icon.png') }}" alt="">
      </a>
    </div>

    <nav class="sidebar-main">
      <div id="sidebar-menu">
        <ul class="sidebar-links custom-scrollbar">
          <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><i data-feather="grid"></i><span>Dashboard</span></a></li>
          
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="{{ route('admin.dashboard') }}">
              <i data-feather="home"></i><span>Dashboard</span>
            </a>
          </li>

          <!-- Tambahkan menu lain di sini -->
        </ul>
      </div>
    </nav>
  </div>
</div>
