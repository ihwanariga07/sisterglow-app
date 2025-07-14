<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="col-auto">
            <div class="logo-wrapper"><a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
        </div>
        <div class="col">
            <div class="header-left">
                <h4 class="mb-0">SISTERGLOW</h4>
            </div>
        </div>
        <div class="col-auto">
            <ul class="nav-menus">
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i data-feather="log-out"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
