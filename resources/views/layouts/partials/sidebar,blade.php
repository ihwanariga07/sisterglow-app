<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('dashboard') }}">
                <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}" alt="">
            </a>
        </div>
        <div class="logo-icon-wrapper"><a href="{{ route('dashboard') }}"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-angle-left"></i><span>Back</span></a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('dashboard') }}">
                            <i data-feather="home"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="/costumer"><i data-feather="user"></i><span>Data Costumer</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="/layanan"><i data-feather="settings"></i><span>Data Layanan</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="/booking"><i data-feather="calendar"></i><span>Data Booking</span></a></li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
