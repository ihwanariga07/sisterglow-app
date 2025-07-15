<!-- Page Header Starts -->
<div class="page-header">
  <div class="header-wrapper row m-0">

    <!-- Search Bar -->
    <form class="form-inline search-full col" action="#" method="get">
      <div class="form-group w-100">
        <div class="Typeahead Typeahead--twitterUsers">
          <div class="u-posRelative">
            <input class="demo-input Typeahead-input form-control-plaintext w-100"
              type="text" placeholder="Search Anything Here..." name="q" autofocus>
            <div class="spinner-border Typeahead-spinner" role="status">
              <span class="sr-only">Loading...</span>
            </div>
            <i class="close-search" data-feather="x"></i>
          </div>
          <div class="Typeahead-menu"></div>
        </div>
      </div>
    </form>

    <!-- Logo -->
    <div class="header-logo-wrapper col-auto p-0">
      <div class="logo-wrapper">
        <a href="{{ route('admin.dashboard') }}">
          <img class="img-fluid for-light" src="{{ asset('cuba/assets/images/logo/logo.png') }}" alt="">
          <img class="img-fluid for-dark" src="{{ asset('cuba/assets/images/logo/logo_dark.png') }}" alt="">
        </a>
      </div>
      <div class="toggle-sidebar">
        <i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
      </div>
    </div>

    <!-- Notification Slider -->
    <div class="left-header col-xxl-5 col-xl-6 col-lg-5 col-md-4 col-sm-3 p-0">
      <div class="notification-slider">
        <div class="d-flex h-100">
          <img src="{{ asset('cuba/assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400">
            <span class="font-primary">Don't Miss Out! </span>
            <span class="f-light"> Our new update has been released.</span>
          </h6>
          <i class="icon-arrow-top-right f-light"></i>
        </div>
        <div class="d-flex h-100">
          <img src="{{ asset('cuba/assets/images/giftools.gif') }}" alt="gif">
          <h6 class="mb-0 f-w-400">
            <span class="f-light">Something you love is now on sale! </span>
          </h6>
          <a class="ms-1" href="https://1.envato.market/3GVzd" target="_blank">Buy now!</a>
        </div>
      </div>
    </div>

    <!-- Right Header -->
    <div class="nav-right col-xxl-7 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
      <ul class="nav-menus">
        <!-- Language Dropdown -->
        <li class="language-nav">
          <div class="translate_wrapper">
            <div class="current_lang">
              <div class="lang">
                <i class="flag-icon flag-icon-us"></i>
                <span class="lang-txt">EN</span>
              </div>
            </div>
            <div class="more_lang">
              @php
                $langs = [
                  ['code' => 'en', 'flag' => 'us', 'name' => 'English (US)'],
                  ['code' => 'de', 'flag' => 'de', 'name' => 'Deutsch'],
                  ['code' => 'es', 'flag' => 'es', 'name' => 'Español'],
                  ['code' => 'fr', 'flag' => 'fr', 'name' => 'Français'],
                  ['code' => 'pt', 'flag' => 'pt', 'name' => 'Português (BR)'],
                  ['code' => 'cn', 'flag' => 'cn', 'name' => '简体中文'],
                  ['code' => 'ae', 'flag' => 'ae', 'name' => 'لعربية (ae)'],
                ];
              @endphp
              @foreach($langs as $lang)
                <div class="lang{{ $loop->first ? ' selected' : '' }}" data-value="{{ $lang['code'] }}">
                  <i class="flag-icon flag-icon-{{ $lang['flag'] }}"></i>
                  <span class="lang-txt">{{ $lang['name'] }}</span>
                </div>
              @endforeach
            </div>
          </div>
        </li>

        <!-- Fullscreen Button -->
        <li class="fullscreen-body">
          <span><svg id="maximize-screen"><use href="{{ asset('cuba/assets/svg/icon-sprite.svg#full-screen') }}"></use></svg></span>
        </li>

        <!-- Search Icon -->
        <li>
          <span class="header-search">
            <svg><use href="{{ asset('cuba/assets/svg/icon-sprite.svg#search') }}"></use></svg>
          </span>
        </li>

        <!-- Bookmark Dropdown (you can modularize later) -->
        <li class="onhover-dropdown">
          <svg><use href="{{ asset('cuba/assets/svg/icon-sprite.svg#star') }}"></use></svg>
          <div class="onhover-show-div bookmark-flip">
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="front">
                  <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                  <ul class="bookmark-dropdown">
                    {{-- Add content here --}}
                  </ul>
                  <div class="text-center">
                    <a class="flip-btn f-w-700 btn btn-primary w-100" id="flip-btn" href="#!">Add Bookmark</a>
                  </div>
                </div>
                <div class="back">
                  <ul>
                    <li>
                      <div class="bookmark-dropdown flip-back-content">
                        <input type="text" placeholder="Search...">
                      </div>
                    </li>
                    <li>
                      <a class="f-w-700 d-block flip-back btn btn-primary w-100" id="flip-back" href="#!">Back</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </li>

        <!-- Dark Mode Toggle -->
        <li class="mode">
          <svg><use href="{{ asset('cuba/assets/svg/icon-sprite.svg#moon') }}"></use></svg>
        </li>

        <!-- Cart Dropdown (skipped for now if not used) -->

        <!-- Notification Dropdown -->
        <li class="onhover-dropdown">
          <div class="notification-box">
            <svg><use href="{{ asset('cuba/assets/svg/icon-sprite.svg#notification') }}"></use></svg>
            <span class="badge rounded-pill badge-success">4</span>
          </div>
          <div class="onhover-show-div notification-dropdown">
            <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
            <ul>
              <li class="toast default-show-toast">
                <div class="d-flex justify-content-between">
                  <div class="toast-body"><p>Delivery processing</p></div>
                  <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
              </li>
              <!-- Add more list if needed -->
            </ul>
          </div>
        </li>

        <!-- Profile Dropdown -->
        <li class="profile-nav onhover-dropdown pe-0 py-0">
          <div class="d-flex profile-media">
            <img class="b-r-10" src="{{ asset('cuba/assets/images/dashboard/profile.png') }}" alt="">
            <div class="flex-grow-1">
              <span>{{ Auth::user()->name ?? 'Admin' }}</span>
              <p class="mb-0">Admin <i class="middle fa-solid fa-angle-down"></i></p>
            </div>
          </div>
          <ul class="profile-dropdown onhover-show-div">
            <li><a href="#"><i data-feather="user"></i><span>Account</span></a></li>
            <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
            <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
            <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i data-feather="log-in"></i><span>Log out</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
            </li>
          </ul>
        </li>
      </ul>
    </div>

  </div>
</div>
<!-- Page Header Ends -->
