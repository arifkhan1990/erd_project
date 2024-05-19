<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bangladesh Sweden Trust Fund</title>

    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/summernote/summernote-bs4.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">
    <style>
        .custom-spacing .form-group {
            padding: 0 15px;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
                <div class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar"
                                class="nav-link nav-link-lg
                                          collapse-btn"> <i
                                    data-feather="align-justify"></i></a></li>
                        <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a></li>
                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                        data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                                src="{{Auth::user()->profile_pic}}" class="user-img-radious-style"> <span
                                class="d-sm-none d-lg-inline-block"></span></a>
                        <div class="dropdown-menu dropdown-menu-right pullDown">
                            <div class="dropdown-title">Hello {{Auth::user()->name}}</div>
                            <a href="{{ route('user.profile', ['id' => Auth::user()->id]) }}" class="dropdown-item has-icon"> <i
                                    class="far
                                              fa-user"></i> Profile
                            </a> <a href="{{ route('user.application')}}" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                                Application
                            </a> <a href="{{ route('user.profile', ['id' => Auth::user()->id]) }}" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                                Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"> <i
                                    class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href='/'> <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">BSTFund</span>
                        </a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Main</li>
                        <li class="dropdown active">
                            <a href="{{ route('user.dashboard') }}" class="nav-link"><i
                                    data-feather="monitor"></i><span>Dashboard</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('user.profile', ['id' => Auth::user()->id]) }}" class="nav-link"><i
                                    data-feather="user"></i><span>Profile</span></a>
                        </li>
                    </ul>
                </aside>
            </div>
            <main class="py-4">
                <div class="main-content">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        @yield('content')

                        <div class="settingSidebar">
                            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                            </a>
                            <div class="settingSidebar-body ps-container ps-theme-default">
                                <div class=" fade show active">
                                    <div class="setting-panel-header">Setting Panel
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <h6 class="font-medium m-b-10">Select Layout</h6>
                                        <div class="selectgroup layout-color w-50">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="1"
                                                    class="selectgroup-input-radio select-layout" checked>
                                                <span class="selectgroup-button">Light</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="value" value="2"
                                                    class="selectgroup-input-radio select-layout">
                                                <span class="selectgroup-button">Dark</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                        <div class="selectgroup selectgroup-pills sidebar-color">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="icon-input" value="1"
                                                    class="selectgroup-input select-sidebar">
                                                <span class="selectgroup-button selectgroup-button-icon"
                                                    data-toggle="tooltip" data-original-title="Light Sidebar"><i
                                                        class="fas fa-sun"></i></span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="icon-input" value="2"
                                                    class="selectgroup-input select-sidebar" checked>
                                                <span class="selectgroup-button selectgroup-button-icon"
                                                    data-toggle="tooltip" data-original-title="Dark Sidebar"><i
                                                        class="fas fa-moon"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <h6 class="font-medium m-b-10">Color Theme</h6>
                                        <div class="theme-setting-options">
                                            <ul class="choose-theme list-unstyled mb-0">
                                                <li title="white" class="active">
                                                    <div class="white"></div>
                                                </li>
                                                <li title="cyan">
                                                    <div class="cyan"></div>
                                                </li>
                                                <li title="black">
                                                    <div class="black"></div>
                                                </li>
                                                <li title="purple">
                                                    <div class="purple"></div>
                                                </li>
                                                <li title="orange">
                                                    <div class="orange"></div>
                                                </li>
                                                <li title="green">
                                                    <div class="green"></div>
                                                </li>
                                                <li title="red">
                                                    <div class="red"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <div class="theme-setting-options">
                                            <label class="m-b-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input" id="mini_sidebar_setting">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="control-label p-l-10">Mini Sidebar</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-15 border-bottom">
                                        <div class="theme-setting-options">
                                            <label class="m-b-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input" id="sticky_header_setting">
                                                <span class="custom-switch-indicator"></span>
                                                <span class="control-label p-l-10">Sticky Header</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                            <i class="fas fa-undo"></i> Restore Default
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </main>

            <footer class="main-footer">
                <div class="footer-right">
                    Design And Developed by <a href="https://arif-portfolio-orcin.vercel.app/">Arif Khan</a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script type="text/javascript" src="{{ asset('assets/bundles/jquery-validation/dist/jquery.validate.min.js') }}"></script>

    <script src="{{ asset('assets/bundles/jquery-steps/jquery.steps.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/bundles/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/summernote/summernote-bs4.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/page/form-wizard.js') }}"></script> --}}

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
