<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('admin') }}">
            <span class="align-middle">Admin</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ Route::is('admin') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('admin.pelayanan') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.pelayanan') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Pelayanan</span>
                </a>
            </li>

            <li class="sidebar-item {{ Route::is('admin.riwayat') ? 'active' : '' }}">
                <a class="sidebar-link" href="{{ route('admin.riwayat') }}">
                    <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Riwayat</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
