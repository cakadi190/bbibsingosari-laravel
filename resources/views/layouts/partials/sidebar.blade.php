<!-- Sidebar navigation-->
<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Menu Utama</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('home') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Beranda Dasbor</span>
            </a>
        </li>

        @can('list farm')
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Kandang</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-building-cottage"></i>
                </span>
                <span class="hide-menu">Data Kandang</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-pig"></i>
                </span>
                <span class="hide-menu">Data Ternak</span>
            </a>
        </li>
        @endcan

        @can('list sperm bank')
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Inseminasi</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-pills"></i>
                </span>
                <span class="hide-menu">Data Inseminasi</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-pill"></i>
                </span>
                <span class="hide-menu">Data Ambil Inseminasi</span>
            </a>
        </li>
        @endif

        @can('list medicine')
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Obat-Obatan</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-pills"></i>
                </span>
                <span class="hide-menu">Data Obat-Obatan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-pill"></i>
                </span>
                <span class="hide-menu">Data Ambil Obat</span>
            </a>
        </li>
        @endcan

        @can('list barn')
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Pakan</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-plant"></i>
                </span>
                <span class="hide-menu">Data Pakan Ternak</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="./ui-buttons.html" aria-expanded="false">
                <span>
                    <i class="ti ti-plant-2"></i>
                </span>
                <span class="hide-menu">Data Ambil Pakan</span>
            </a>
        </li>
        @endcan

        @can('list user')
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Manajemen Pengguna</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ url('roles') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-pin"></i>
                </span>
                <span class="hide-menu">Izin dan Akses</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ url('user') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Pengguna</span>
            </a>
        </li>
        @endcan

        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Ekstra</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ url('about') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-info-circle"></i>
                </span>
                <span class="hide-menu">Informasi Aplikasi</span>
            </a>
        </li>
    </ul>
</nav>
<!-- End Sidebar navigation -->
