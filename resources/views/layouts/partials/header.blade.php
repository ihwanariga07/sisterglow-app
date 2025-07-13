<!-- resources/views/layouts/partials/header.blade.php -->
<div class="page-main-header">
  <div class="main-header-right row">
    <div class="main-header-left d-lg-none w-auto">
      <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid" src="{{ asset('cuba-assets/images/logo/logo.png') }}" alt=""></a></div>
    </div>
    <div class="mobile-sidebar w-auto"><i class="fa fa-bars"></i></div>

    <div class="nav-right col">
      <ul class="nav-menus">
        <li class="onhover-dropdown">
          <div class="media align-items-center">
            <img class="align-self-center pull-right img-50 rounded-circle" src="{{ asset('cuba-assets/images/user/1.jpg') }}" alt="user">
            <div class="media-body">
              <span>{{ Auth::user()->name ?? 'Admin' }}</span>
              <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="#"><i data-feather="user"></i><span>Profile</span></a></li>
            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-danger w-100 text-start" type="submit">
                  <i data-feather="log-out"></i> Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
