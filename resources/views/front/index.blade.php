<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bangladesh Sweden Trust Fund</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- ---------------------------------- first section ------------------------------------------- -->

    <section class="first-section">
        <!-- --------------- navbar ----------------- -->

        {{--    <img --}}
        {{--        src="{{ asset('assets/images/logo_bstf.png') }}" --}}
        {{--        alt="" --}}
        {{--        style="width: 200px; height: 180px; position: absolute; top: 0; left: 0" --}}
        {{--    /> --}}

        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: transparent">
                <a class="navbar-brand" href="#" id="navbar_brand">Bangladesh Sweden Trust Fund</a>


                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('front.about') }}" id="">About Us </a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('front.contact') }}" id="">Contact Us </a>
                        </li>

                        {{--  ------------------------------ modified message ----------------------------- --}}

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Messages
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('front.message') }}">Hon'ble Minister, Ministry
                                    of Finance</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('front.message2') }}">Secretary, Economic
                                    Relations Division</a>
                            </div>
                        </li>

                        {{--  ------------------------------ modified message ----------------------------- --}}

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('front.faq') }}" id="">FAQ</a>
                        </li>

                        @if (auth()->user() == null)
                            <li class="nav-item active">
                                <a class="nav-link" href="#" id="sign_in">Sign In </a>
                            </li>
                        @else
                            <li class="nav-item active">
                                <a class="nav-link" href="#" id="">Logout </a>
                            </li>
                        @endif

                        <li class="nav-item active">
                            <button class="btn btn-outline-success nav-btn-language nav_en_btn" id="nav_en_btn">
                                English
                            </button>
                            <button class="btn btn-outline-success nav-btn-language" id="nav-bn-btn">
                                বাংলা
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- ------------------------------ end - navbar  -->

        <!-- ----------- Starting content --------------  -->

        <div class="starting-content">

            {{-- -------------------------------- mujib borsho ------------------------------------  --}}

            {{--        <img src="{{ asset('assets/images/mujib.jpg') }}" alt="" --}}
            {{--             style="width: 200px; height: 100px; top: 10%; right: 50px; position: absolute"> --}}

            {{-- -------------------------------- mujib borsho ------------------------------------  --}}

            <div class="starting-content-mobile-img-div">
                <img src="{{ asset('assets/images/flag.png') }}" alt="" width="500px"
                    class="starting-content-mobile-img" />
            </div>

            <div class="row" style="margin: 0; padding: 0">
                <div class="col"></div>
                <div class="col-md-5">
                    <div class="starting-content-left-div">
                        <div>
                            <p class="starting-content-left-p" id="starting_content">
                                Fund for one way air travel fare to the eligible candidates.
                            </p>
                        </div>

                    </div>

                    <div class="register_and_return_to_dashboard_button">
                        @if (auth()->user() == null)
                            <a class="btn btn-success starting-content-left-button" id="register" href="#">
                                Register
                            </a>
                        @else
                            <a class="btn btn-success starting-content-left-button" id="register"
                                href="{{ route('home') }}">
                                Return to dashboard
                            </a>
                        @endif
                    </div>

                </div>

                <div class="col-md-5">
                    <div class="starting-content-right-img-div">
                        <img src="{{ asset('assets/images/flag.png') }}" alt="" width="500px"
                            class="starting-content-right-img img-responsive" />
                    </div>
                </div>
                <div class="col"></div>
            </div>

        </div>
        <!-- ---------------------- end - Starting content -->
    </section>

    <!-- ------------------------------------------------------------------------ end - first section -->

    <!-- ------------------------------------------- second section --------------------------------  -->

    <section class="second-section">
        <img src="{{ asset('assets/images/bottom-image.png') }}" alt="" style="margin-top: -210px"
            class="img-fluid" />

        <div class="second-section-div">
            <p class="second-section-title" id="eligible_candidates">
                Eligible Candidates
            </p>
            <div class="row" style="margin: 0; padding: 0">
                <div class="col-lg-4 second-section-col-padding">
                    <div class="second-section-col-box">
                        <img src="{{ asset('assets/images/icon-1.png') }}" alt=""
                            class="second-section-col-box_img" />
                        <p class="second-section-col-box_p" id="student_box_1">
                            Bangladeshi Students who have enrolled at Foreign University/
                            Educational Institutes for Under grad/Graduate/Post grad/ Ph.D
                            level program.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 second-section-col-padding">
                    <div class="second-section-col-box">
                        <img src="{{ asset('assets/images/icon-2.png') }}" alt=""
                            class="second-section-col-box_img" />
                        <p class="second-section-col-box_p" id="student_box_2">
                            Students Who have not got travel grant/air ticket from
                            Bangladesh-Sweden Trust fund or any other source earlier.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 second-section-col-padding">
                    <div class="second-section-col-box">
                        <img src="{{ asset('assets/images/icon-3.png') }}" alt=""
                            class="second-section-col-box_img" />
                        <p class="second-section-col-box_p" id="student_box_3">
                            Students Who have not got third division/class/equivalent GPA in
                            any public examination.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------------------------------------------------------- end - second section   -->

    <!-- ---------------------------------------- footer section ------------------------------------ -->

    <section class="footer">
        <div class="footer-div">
            <div class="row" style="margin: 0; padding: 0">
                <div class="col"></div>
                <div class="col-lg-4 col-md-7">
                    <div class="footer-alignments">
                        <span class="footer-text-1" id="footer_text_1">Bangladesh Sweden Trust Fund</span>
                        <span class="footer-language-btn"><a id="bangla_btn" class="language-btn">BN</a> |
                            <a href="" class="language-btn" id="language_en">EN</a></span>
                    </div>

                    <hr style="background-color: white" />
                </div>
                <div class="col"></div>
            </div>
            <p style="text-align: center" class="footer-section-p" id="footer_section_p">
                Design And Developed by SIS Inflexionpoint BD for Economics Relations
                Division.
            </p>
        </div>
    </section>

    <!-- ---------------------------------------------------------------------- end - footer section  -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- ------------------------------ landing.js file ---------------------------- -->

    <script src="{{ asset('assets/js/landing.js') }}"></script>

    <!-- ---------------------------------------------------- end - landing.js file  -->
</body>

</html>
