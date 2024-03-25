<!--  Header Start -->
<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                    <i class="ti ti-bell-ringing"></i>
                    <div class="notification bg-primary rounded-circle"></div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex gap-2" href="javascript:void(0)">
                    <i class="ti ti-clock"></i>
                    <span class="d-none d-md-none d-lg-inline" id="showClock">00:00:00</span>
                    <div class="notification bg-primary rounded-circle" id="clockIndicator"></div>
                </a>
            </li>
        </ul>
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('vendor/blade-country-flags/4x3-'. Language::getLanguages()->flag() .'.svg') }}" alt="{{ Language::getLanguages()->label() }}"
                            width="35" height="35" class="border" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                        <li>
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="{{ route('locale', 'id') }}">
                                <img src="{{ asset('vendor/blade-country-flags/4x3-id.svg') }}" width="24" />
                                Indonesia
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="{{ route('locale', 'en') }}">
                                <img src="{{ asset('vendor/blade-country-flags/4x3-us.svg') }}" width="24" />
                                English
                            </a>
                        </li>
                    </ul>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ Gravatar::get('email@example.com') }}" alt="{{ auth()->user()->name }}"
                                width="35" height="35" class="rounded-circle" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body">
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-user fs-6"></i>
                                    <p class="mb-0 fs-3">My Profile</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-mail fs-6"></i>
                                    <p class="mb-0 fs-3">My Account</p>
                                </a>
                                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                    <i class="ti ti-list-check fs-6"></i>
                                    <p class="mb-0 fs-3">My Task</p>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-outline-primary mx-3 mt-2 d-block">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>
</header>
<!--  Header End -->
