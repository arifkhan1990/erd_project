<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Login Form Design</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sign_in.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
</head>

<body>

    {{-- ------------------------------------------------------- main signup content ---------------------------------------------------------- --}}


    <!---------------------------------------------- navbar   ------------------------------------------------------->

    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: transparent">
            <a class="navbar-brand" href="/">Bangladesh Sweden Trust Fund</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}"
                            style="padding-left: 30px; padding-right: 30px; border-radius: 20px 20px 20px 20px; background: #1A3051;
color: white">Sign
                            In <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!------------------------------------------ end - navbar   ----------------------------------------------------->

    <!---------------------------------------------- Signup form   --------------------------------------------------->

    <div class="test">
        <div class="row" style="margin: 0; padding: 0">
            <div class="col-md-12">
                <div>
                    <div class="contain">
                        <h1 class="sign-title">Sign Up</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <label for="" style="margin-bottom: -30px; font-weight: bold">Full Name</label>
                            <input type="text" placeholder="" id="name" type="text"
                                class="input-email form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus />

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for=""
                                style="
                    margin-bottom: -30px;
                    margin-top: 5px;
                    font-weight: bold;
                  ">Email</label>
                            <input type="email" placeholder="" id="email" type="email"
                                class="input-email form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for=""
                                style="
                    margin-bottom: -30px;
                    margin-top: 10px;
                    font-weight: bold;
                  ">Password</label>
                            <input type="password" placeholder="" id="password" type="password"
                                class="input-password form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for=""
                                style="
                    margin-bottom: -30px;
                    margin-top: 10px;
                    font-weight: bold;
                  ">Confirm
                                Password</label>
                            <input type="password" placeholder="" id="password-confirm" type="password"
                                class="form-control input-password" name="password_confirmation" required
                                autocomplete="new-password" />

                            <div class="submit-btn-div">
                                <button class="input-button" style="margin-top: -50px" type="submit">
                                    Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------------ end - Login form   --------------------------------------------------->


    {{-- ------------------------------------------------------------------------------------------------------------- end - main signup content --}}
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="{{ asset('assets/js/signin.js') }}"></script>

</html>
