<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sign_in.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrap-social/bootstrap-social.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href="{{ asset('assets/img/favicon.ico') }}" />

</head>

<body>
    <div class="loader"></div>
    <div class="content" style="background: transparent;">
        <nav class="navbar" style="position: relative !important; left: 0px;">
            <a class="navbar-brand" href="/"
                style="color: #000 !important; letter-spacing: 1.5px !important;padding-left: 30px !important">
                Bangladesh Sweden Trust Fund
            </a>
        </nav>
    </div>


    <!---------------------------------------------- Login form   --------------------------------------------------->

    <div class="container mt-5" style="margin-top: 8rem !important;">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                            @csrf
                            <div class="form-group">
                                <label for="email" style="color: #282424 !important;">Email</label>
                                <input type="email" placeholder="" id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror input-email" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label" style="color: #282424 !important;">Password</label>
                                    @if (Route::has('password.request'))
                                        <div class="float-right">
                                            <a class="text-small" href="{{ route('password.request') }}">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <input type="password" placeholder=""
                                    class="input-password form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="current-password" />

                                <div class="invalid-feedback">
                                    please fill in your password
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }} />
                                    <label class="custom-control-label" for="remember" style="color: #282424 !important;">Remember Me</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mt-5 text-muted text-center">
                    Don't have an account? <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!------------------------------------------ end - Login form   --------------------------------------------------->
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
