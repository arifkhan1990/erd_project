<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bangladesh Sweden Trust Fund</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sign_in.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/bundles/jquery-selectric/selectric.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body
    style="background-image: url({{ asset('assets/images/ssskrrr.png') }});background-repeat: no-repeat; height: 100%; background-size: cover;">
    <div class="loader"></div>
    <div id="app">
        <div class="content" style="background: transparent;">
            <nav class="navbar" style="position: relative !important; left: 0px;">
                <a class="navbar-brand" href="/"
                    style="color: #000 !important; letter-spacing: 1.5px !important;padding-left: 30px !important">
                    Bangladesh Sweden Trust Fund
                </a>
            </nav>
        </div>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
        <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>


    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/auth-register.js') }}"></script>


    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
