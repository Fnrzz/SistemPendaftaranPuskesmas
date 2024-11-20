<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('user') }}">
            <span class="align-middle">Dashboard</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Route::is('user') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('user') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('user.pelayanan') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('user.pelayanan') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Pelayanan</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('user.riwayat') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('user.riwayat') }}">
                    <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Riwayat</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
