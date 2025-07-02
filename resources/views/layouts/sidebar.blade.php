<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="img-fluid">
                <h4>Sisterglow</h4>
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo-icon.png') }}" alt="">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i class="fa fa-angle-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links custom-scrollbar">
                    <li class="back-btn">
                        <a href="{{ route('home') }}"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Main</h6>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('home') }}" class="sidebar-link sidebar-title">
                            <i class="fa fa-home"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('costumers.index') }}" class="sidebar-link sidebar-title">
                            <i class="fa fa-users"></i><span>Costumers</span>
                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a href="{{ route('layanan.index') }}" class="sidebar-link sidebar-title">
                            <i class="fa fa-cogs"></i><span>Layanan</span>
                        </a>
                    </li>
                    <!-- Tambahkan menu lain sesuai kebutuhan -->
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i class="fa fa-angle-right"></i></div>
        </nav>
    </div>
</div>
