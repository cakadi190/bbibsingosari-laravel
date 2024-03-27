<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @hasSection('title')
        <title>{{ $__env->yieldContent('title') }} &bullet; {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css') }}" />

    <!-- CSS Front Template -->

    <link rel="preload" href="{{ asset('assets/css/theme.min.css') }}" data-hs-appearance="default" as="style" />
    <link rel="preload" href="{{ asset('assets/css/theme-dark.min.css') }}" data-hs-appearance="dark" as="style" />

    @yield('link')

    <style data-hs-appearance-onload-styles>
        * {
            transition: unset !important;
        }

        body {
            opacity: 0;
        }
    </style>

    @yield('style')

    <script>
        window.hs_config = {
            "autopath": "@@autopath",
            "deleteLine": "hs-builder:delete",
            "deleteLine:build": "hs-builder:build-delete",
            "deleteLine:dist": "hs-builder:dist-delete",
            "previewMode": false,
            "startPath": "/index.html",
            "vars": {
                "themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
                "version": "?v=1.0"
            },
            "layoutBuilder": {
                "extend": {
                    "switcherSupport": true
                },
                "header": {
                    "layoutMode": "default",
                    "containerMode": "container-fluid"
                },
                "sidebarLayout": "default"
            },
            "themeAppearance": {
                "layoutSkin": "default",
                "sidebarSkin": "default",
                "styles": {
                    "colors": {
                        "primary": "#377dff",
                        "transparent": "transparent",
                        "white": "#fff",
                        "dark": "132144",
                        "gray": {
                            "100": "#f9fafc",
                            "900": "#1e2022"
                        }
                    },
                    "font": "Inter"
                }
            },
            "languageDirection": {
                "lang": "en"
            },
            "skipFilesFromBundle": {
                "dist": [
                    "{{ asset('assets/js/hs.theme-appearance.js') }}",
                    "{{ asset('assets/js/hs.theme-appearance-charts.js') }}",
                    "{{ asset('assets/js/demo.j') }}s"
                ],
                "build": [
                    "{{ asset('assets/css/theme.css') }}",
                    "{{ asset('assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}",
                    "{{ asset('assets/js/demo.js') }}",
                    "{{ asset('assets/css/theme-dark.css') }}",
                    "{{ asset('assets/css/docs.css') }}",
                    "{{ asset('assets/vendor/icon-set/style.css') }}",
                    "{{ asset('assets/js/hs.theme-appearance.js') }}",
                    "{{ asset('assets/js/hs.theme-appearance-charts.js') }}",
                    "{{ asset('node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}",
                    "{{ asset('assets/js/demo.j') }}s"
                ]
            },
            "minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"],
            "copyDependencies": {
                "dist": {
                    "*assets/js/theme-custom.js": ""
                },
                "build": {
                    "*assets/js/theme-custom.js": "",
                    "node_modules/bootstrap-icons/font/*fonts/**": "assets/css"
                }
            },
            "buildFolder": "",
            "replacePathsToCDN": {},
            "directoryNames": {
                "src": "./src",
                "dist": "./dist",
                "build": "./build"
            },
            "fileNames": {
                "dist": {
                    "js": "theme.min.js",
                    "css": "theme.min.css"
                },
                "build": {
                    "css": "theme.min.css",
                    "js": "theme.min.js",
                    "vendorCSS": "vendor.min.css",
                    "vendorJS": "vendor.min.js"
                }
            },
            "fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
        }
        window.hs_config.gulpRGBA = (p1) => {
            const options = p1.split(',')
            const hex = options[0].toString()
            const transparent = options[1].toString()

            var c;
            if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
                c = hex.substring(1).split('');
                if (c.length == 3) {
                    c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c = '0x' + c.join('');
                return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
            }
            throw new Error('Bad Hex');
        }
        window.hs_config.gulpDarken = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = -parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
        window.hs_config.gulpLighten = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
    </script>
</head>

<body class="d-flex align-items-center min-h-100">

    <script src="{{ asset('assets/js/hs.theme-appearance.js') }}"></script>

    <!-- ========== HEADER ========== -->
    <header class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
        <div class="d-flex d-lg-none justify-content-between">
            <a href="{{ route('login') }}">
                <img class="w-100" src="{{ asset('assets/img/logo-bbib.png') }}" alt="Image Description"
                    data-hs-theme-appearance="default" style="min-width: 7rem; max-width: 7rem;">
                <img class="w-100" src="{{ asset('assets/img/logo-bbib.png') }}" alt="Image Description"
                    data-hs-theme-appearance="dark" style="min-width: 7rem; max-width: 7rem;">
            </a>

            <!-- Select -->
            <div class="tom-select-custom tom-select-custom-end zi-2">
                <select class="js-select form-select form-select-sm form-select-borderless"
                    data-hs-tom-select-options='{
                    "searchInDropdown": false,
                    "hideSearch": true,
                    "dropdownWidth": "12rem",
                    "placeholder": "Select language"
                }'>
                    <option label="empty"></option>
                    @foreach ($languages as $language)
                        <option value="{{ $language->value }}" @if (app()->getLocale() == $language->value) selected @endif
                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss border avatar-circle me-2" src="{{ asset('assets/vendor/flag-icon-css/flags/1x1/' . $language->flag() . '.svg') }}" alt="{{ $language->label() }}" width="16"/><span>{{ $language->label() }}</span></span>'>
                            {{ $language->label() }}
                        </option>
                    @endforeach
                </select>
            </div>
            <!-- End Select -->
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="main pt-0">
        <!-- Content -->
        <div class="container-fluid px-3">
            <div class="row">
                <div
                    class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
                    <!-- Logo & Language -->
                    <div class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
                        <div class="d-none d-lg-flex justify-content-between">
                            <a href="{{ route('login') }}">
                                <img class="w-100" src="{{ asset('assets/img/logo-bbib.png') }}"
                                    alt="Logo BBIB Singosari" data-hs-theme-appearance="default"
                                    style="min-width: 7rem; max-width: 7rem;">
                                <img class="w-100" src="{{ asset('assets/img/logo-bbib.png') }}"
                                    alt="Logo BBIB Singosari" data-hs-theme-appearance="dark"
                                    style="min-width: 7rem; max-width: 7rem;">
                            </a>

                            <!-- Select -->
                            <div class="tom-select-custom tom-select-custom-end tom-select-custom-bg-transparent zi-2">
                                <select class="js-select form-select form-select-sm form-select-borderless"
                                    data-hs-tom-select-options='{
                                        "searchInDropdown": false,
                                        "hideSearch": true,
                                        "dropdownWidth": "12rem",
                                        "placeholder": "Select language"
                                    }'>
                                    <option label="empty"></option>
                                    @foreach ($languages as $language)
                                        <option value="{{ $language->value }}"
                                            @if (app()->getLocale() == $language->value) selected @endif
                                            data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss border avatar-circle me-2" src="{{ asset('assets/vendor/flag-icon-css/flags/1x1/' . $language->flag() . '.svg') }}" alt="{{ $language->label() }}" width="16"/><span>{{ $language->label() }}</span></span>'>
                                            {{ $language->label() }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- End Select -->
                        </div>
                    </div>
                    <!-- End Logo & Language -->

                    <div style="max-width: 23rem;">
                        <div class="text-center mb-5">
                            <img class="img-fluid" src="./assets/svg/illustrations/oc-chatting.svg"
                                alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="default">
                            <img class="img-fluid" src="./assets/svg/illustrations-light/oc-chatting.svg"
                                alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="dark">
                        </div>

                        <div class="mb-5">
                            <h2 class="display-5">Build digital products with:</h2>
                        </div>

                        <!-- List Checked -->
                        <ul class="list-checked list-checked-lg list-checked-primary list-py-2">
                            <li class="list-checked-item">
                                <span class="d-block fw-semibold mb-1">All-in-one tool</span>
                                Build, run, and scale your apps - end to end
                            </li>

                            <li class="list-checked-item">
                                <span class="d-block fw-semibold mb-1">Easily add &amp; manage your services</span>
                                It brings together your tasks, projects, timelines, files and more
                            </li>
                        </ul>
                        <!-- End List Checked -->

                        <div class="row justify-content-between mt-5 gx-3">
                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->

                            <div class="col">
                                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Logo">
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Col -->

                <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
                    <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1"
                        style="max-width: 25rem;">

                        @yield('content')
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Content -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Global Compulsory  -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js') }}"></script>
    <script src="{{ asset('assets/vendor/tom-select/dist/js/tom-select.complete.min.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    @yield('link-scripts')

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            window.onload = function() {
                // INITIALIZATION OF BOOTSTRAP VALIDATION
                // =======================================================
                HSBsValidation.init('.js-validate', {
                    onSubmit: data => {
                        data.event.preventDefault();
                        data.form.submit();
                    }
                })

                // INITIALIZATION OF TOGGLE PASSWORD
                // =======================================================
                new HSTogglePassword('.js-toggle-password')

                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')
            }
        })()
    </script>

    @yield('script')
</body>

</html>
