<!-- Navbar Vertical -->
<aside
    class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
        <div class="navbar-vertical-footer-offset">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('home') }}" aria-label="Front">
                <img class="navbar-brand-logo" src="{{ asset('assets/img/logo-bbib.webp') }}" alt="Logo"
                    data-hs-theme-appearance="default">
                <img class="navbar-brand-logo" src="{{ asset('assets/img/logo-bbib.webp') }}" alt="Logo"
                    data-hs-theme-appearance="dark">
                <img class="navbar-brand-logo-mini" src="{{ asset('assets/img/icon-bbib.png') }}" alt="Logo"
                    data-hs-theme-appearance="default">
                <img class="navbar-brand-logo-mini" src="{{ asset('assets/img/icon-bbib.png') }}" alt="Logo"
                    data-hs-theme-appearance="dark">
            </a>
            <!-- End Logo -->

            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                <i class="bi-arrow-bar-left navbar-toggler-short-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                <i class="bi-arrow-bar-right navbar-toggler-full-align"
                    data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                    data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
            </button>

            <!-- End Navbar Vertical Toggle -->

            <!-- Content -->
            <div class="navbar-vertical-content">
                <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">

                    <!-- Collapse -->
                    <div class="navbar-nav nav-compact">

                    </div>

                    <div id="navbarVerticalMenuPagesMenu">
                        <!-- Home -->
                        <div class="nav-item">
                            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}" data-placement="left">
                                <i class="bi-house-door nav-icon"></i>
                                <span class="nav-link-title">{{ __('Dashboard') }}</span>
                            </a>
                        </div>
                        <!-- End Home -->

                        <span class="dropdown-header mt-4">{{ __('Data Management') }}</span>
                        <small class="bi-three-dots nav-subtitle-replacer"></small>

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle  collapsed" href="#" role="button"
                                data-bs-toggle="collapse" data-bs-target="#medicineData" aria-expanded="false"
                                aria-controls="medicineData">
                                <i class="bi-capsule nav-icon"></i>
                                <span class="nav-link-title">{{ __('Medicine Data') }}</span>
                            </a>

                            <div id="medicineData" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                                <div id="medicineDataMenu">
                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle " href="#medicineDataWarehouseMenu"
                                            role="button" data-bs-toggle="collapse"
                                            data-bs-target="#medicineDataWarehouseMenu" aria-expanded="false"
                                            aria-controls="medicineDataWarehouseMenu">
                                            {{ __('Medicine Warehouse') }}
                                        </a>

                                        <div id="medicineDataWarehouseMenu" class="nav-collapse collapse "
                                            data-bs-parent="#medicineDataMenu">
                                            <a class="nav-link " href="#">{{ __('All Data') }}</a>
                                            <a class="nav-link " href="#">{{ __('New Data') }}</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle " href="#medicineDataStockMenu"
                                            role="button" data-bs-toggle="collapse"
                                            data-bs-target="#medicineDataStockMenu" aria-expanded="false"
                                            aria-controls="medicineDataStockMenu">
                                            {{ __('Medicine Stock') }}
                                        </a>

                                        <div id="medicineDataStockMenu" class="nav-collapse collapse "
                                            data-bs-parent="#medicineDataMenu">
                                            <a class="nav-link " href="#">{{ __('All Data') }}</a>
                                            <a class="nav-link " href="#">{{ __('New Data') }}</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle " href="#medicineDataMedicineRetrievalMenu"
                                            role="button" data-bs-toggle="collapse"
                                            data-bs-target="#medicineDataMedicineRetrievalMenu" aria-expanded="false"
                                            aria-controls="medicineDataMedicineRetrievalMenu">
                                            {{ __('Medicine Retrieval') }}
                                        </a>

                                        <div id="medicineDataMedicineRetrievalMenu" class="nav-collapse collapse "
                                            data-bs-parent="#medicineDataMenu">
                                            <a class="nav-link " href="#">{{ __('All Data') }}</a>
                                            <a class="nav-link " href="#">{{ __('New Data') }}</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->
                                </div>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle  collapsed" href="#" role="button"
                                data-bs-toggle="collapse" data-bs-target="#farmData" aria-expanded="false"
                                aria-controls="farmData">
                                <i class="bi-pin nav-icon"></i>
                                <span class="nav-link-title">{{ __('Farm Data') }}</span>
                            </a>

                            <div id="farmData" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                                <div id="farmDataMenu">
                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle " href="#farmDataFarmCategory"
                                            role="button" data-bs-toggle="collapse"
                                            data-bs-target="#farmDataFarmCategory" aria-expanded="false"
                                            aria-controls="farmDataFarmCategory">
                                            {{ __('Farm Category') }}
                                        </a>

                                        <div id="farmDataFarmCategory" class="nav-collapse collapse "
                                            data-bs-parent="#farmDataMenu">
                                            <a class="nav-link " href="#">{{ __('All Data') }}</a>
                                            <a class="nav-link " href="#">{{ __('New Data') }}</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle " href="#farmDataFarmsData" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#farmDataFarmsData"
                                            aria-expanded="false" aria-controls="farmDataFarmsData">
                                            {{ __('Farm Data') }}
                                        </a>

                                        <div id="farmDataFarmsData" class="nav-collapse collapse "
                                            data-bs-parent="#farmDataMenu">
                                            <a class="nav-link " href="#">{{ __('All Data') }}</a>
                                            <a class="nav-link " href="#">{{ __('New Data') }}</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->
                                </div>
                            </div>
                        </div>
                        <!-- End Collapse -->

                        <!-- Collapse -->
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle align-items-center collapsed" href="#" role="button"
                                data-bs-toggle="collapse" data-bs-target="#barnData" aria-expanded="false"
                                aria-controls="barnData">
                                <i class="fas fa-cow nav-icon"></i>
                                <span class="nav-link-title">{{ __('Barn Data') }}</span>
                            </a>

                            <div id="barnData" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                                <div id="barnDataMenu">
                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle " href="#barnDataFarmCategory"
                                            role="button" data-bs-toggle="collapse"
                                            data-bs-target="#barnDataFarmCategory" aria-expanded="false"
                                            aria-controls="barnDataFarmCategory">
                                            {{ __('Farm Category') }}
                                        </a>

                                        <div id="barnDataFarmCategory" class="nav-collapse collapse "
                                            data-bs-parent="#barnDataMenu">
                                            <a class="nav-link " href="#">{{ __('All Data') }}</a>
                                            <a class="nav-link " href="#">{{ __('New Data') }}</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->

                                    <!-- Collapse -->
                                    <div class="nav-item">
                                        <a class="nav-link dropdown-toggle " href="#barnDataFarmsData" role="button"
                                            data-bs-toggle="collapse" data-bs-target="#barnDataFarmsData"
                                            aria-expanded="false" aria-controls="barnDataFarmsData">
                                            {{ __('Farm Data') }}
                                        </a>

                                        <div id="barnDataFarmsData" class="nav-collapse collapse "
                                            data-bs-parent="#barnDataMenu">
                                            <a class="nav-link " href="#">{{ __('All Data') }}</a>
                                            <a class="nav-link " href="#">{{ __('New Data') }}</a>
                                        </div>
                                    </div>
                                    <!-- End Collapse -->
                                </div>
                            </div>
                        </div>
                        <!-- End Collapse -->
                    </div>
                    <!-- End Collapse -->
                </div>

            </div>
            <!-- End Content -->

            <!-- Footer -->
            <div class="navbar-vertical-footer">
                <ul class="navbar-vertical-footer-list">
                    <li class="navbar-vertical-footer-list-item">
                        <!-- Style Switcher -->
                        <div class="dropdown dropup">
                            <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-dropdown-animation>

                            </button>

                            <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless"
                                aria-labelledby="selectThemeDropdown">
                                <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                                    <i class="bi-moon-stars me-2"></i>
                                    <span class="text-truncate" title="Auto (system default)">Auto (system
                                        default)</span>
                                </a>
                                <a class="dropdown-item" href="#" data-icon="bi-brightness-high"
                                    data-value="default">
                                    <i class="bi-brightness-high me-2"></i>
                                    <span class="text-truncate" title="Default (light mode)">Default (light
                                        mode)</span>
                                </a>
                                <a class="dropdown-item active" href="#" data-icon="bi-moon"
                                    data-value="dark">
                                    <i class="bi-moon me-2"></i>
                                    <span class="text-truncate" title="Dark">Dark</span>
                                </a>
                            </div>
                        </div>

                        <!-- End Style Switcher -->
                    </li>

                    <li class="navbar-vertical-footer-list-item">
                        <!-- Other Links -->
                        <div class="dropdown dropup">
                            <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-dropdown-animation>
                                <i class="bi-info-circle"></i>
                            </button>

                            <div class="dropdown-menu navbar-dropdown-menu-borderless"
                                aria-labelledby="otherLinksDropdown">
                                <span class="dropdown-header">Help</span>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-journals dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Resources &amp; tutorials">Resources
                                        &amp; tutorials</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-command dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Keyboard shortcuts">Keyboard
                                        shortcuts</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-alt dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Connect other apps">Connect other
                                        apps</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-gift dropdown-item-icon"></i>
                                    <span class="text-truncate" title="What's new?">What's new?</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <span class="dropdown-header">Contacts</span>
                                <a class="dropdown-item" href="#">
                                    <i class="bi-chat-left-dots dropdown-item-icon"></i>
                                    <span class="text-truncate" title="Contact support">Contact
                                        support</span>
                                </a>
                            </div>
                        </div>
                        <!-- End Other Links -->
                    </li>

                    <li class="navbar-vertical-footer-list-item">
                        <!-- Language -->
                        <div class="dropdown dropup">
                            <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                data-bs-dropdown-animation>
                                <img class="avatar avatar-xss avatar-circle border"
                                    src="{{ asset('assets/vendor/flag-icon-css/flags/1x1/' . $currLang->flag() . '.svg') }}"
                                    alt="{{ $currLang->label() }}" />
                            </button>

                            <div class="dropdown-menu navbar-dropdown-menu-borderless"
                                aria-labelledby="selectLanguageDropdown">
                                <span class="dropdown-header">{{ __('Select Language') }}</span>
                                @foreach ($languages as $language)
                                    <a class="dropdown-item @if ($language->value === $currLang->value) active @endif"
                                        href="{{ route('locale', $language->value) }}">
                                        <img class="avatar avatar-xss avatar-circle me-2"
                                            src="{{ asset('assets/vendor/flag-icon-css/flags/1x1/' . $language->flag() . '.svg') }}"
                                            alt="Flag">
                                        <span class="text-truncate" title="English">{{ $language->label() }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- End Language -->
                    </li>
                </ul>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</aside>
<!-- End Navbar Vertical -->
