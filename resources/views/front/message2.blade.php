<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <!-- google  font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href={{ asset('asset1/style.css') }} />
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}" />

    <title>Message</title>
</head>

<body>
    <header>
        <section>
            {{--  ---------------- extended navbar -------------------  --}}
            <x-navbar></x-navbar>
            {{--  ---------------- extended navbar -------------------  --}}
            <div class="container">
                <h3 class=" text-center text-font mt-3" id="message_title">
                    Message from Board Members
                </h3>
                <div class="row pt-3">
                    {{--                <div class="col-lg-12 col-12"> --}}
                    {{--                    <div class="d-flex justify-content-center align-item-center"> --}}
                    {{--                        <img class="img-fluid" src="asset1/image/mostafa.jpg" alt="" style="width: 180px"/> --}}
                    {{--                    </div> --}}

                    {{--                    <p class="fw-bold text-primary text-center text-font mt-3" id="board_member_1"> --}}
                    {{--                        A H M Mustafa Kamal, FCA, MP <br/> --}}
                    {{--                        Hon'ble Minister, Ministry of Finance --}}
                    {{--                    </p> --}}
                    {{--                    <div class="shadow-lg rounded-3 px-4 py-1"> --}}
                    {{--                        <p class="text-align"> --}}
                    {{--                            <small id="board_member_1_speech" --}}
                    {{--                            >The sphere of international education is a crossroad of --}}
                    {{--                                progress and free-thinking that offers the students a unique --}}
                    {{--                                opportunity to get acquainted with international cultures and --}}
                    {{--                                civilizations. It also enables the students to prepare --}}
                    {{--                                themselves to serve the motherland as well as the global --}}
                    {{--                                community. I hope that the travel grant from the --}}
                    {{--                                Bangladesh-Sweden Trust Fund will serve as a useful aid for --}}
                    {{--                                the Bangladeshi students pursuing higher studies abroad. I --}}
                    {{--                                urge upon everyone to dedicate their knowledge and efforts to --}}
                    {{--                                build a ‘Sonar Bangla’, as envisaged by the Father of the --}}
                    {{--                                Nation Bangabandhu Sheikh Mujibur Rahman, where our citizens --}}
                    {{--                                will enjoy progress and prosperity. --}}

                    {{--                                <br><br> --}}
                    {{--                                Joy Bangla, Joy Bangabandhu <br> May --}}
                    {{--                                Bangladesh Live Forever. --}}
                    {{--                            </small> --}}
                    {{--                        </p> --}}
                    {{--                    </div> --}}
                    {{--                </div> --}}

                    <div class="col-lg-12 col-12 mt-3">
                        <div class="d-flex justify-content-center align-item-center">
                            <img class="img-fluid" src="asset1/image/shochib.jpg" alt="" style="width: 180px" />
                        </div>

                        <p class="fw-bold text-primary text-center text-font mt-3" id="board_member_2">
                            Fatima Yasmin <br>
                            Secretary, Economic Relations Division

                        </p>

                        <div class="shadow-lg rounded-3 px-4 py-1">
                            <p class="text-align pt-3">
                                <small id="board_member_2_speech">The turn of the century and the dawn of the fourth
                                    industrial revolution have opened
                                    immense opportunities for the young generation. At the same time, it is now far more
                                    challenging to survive in the competitive global markets because of the rapid
                                    changes
                                    and evolution of technology. I am happy that the Bangladesh-Sweden Trust Fund has
                                    been
                                    providing financial aid to our meritorious students to support their initiatives in
                                    pursuing higher studies abroad. The knowledge and experience that they will acquire
                                    abroad will guide them in enhancing professional aptitudes. I firmly believe that
                                    our
                                    young generation will play pivotal role to further brighten the image of Bangladesh
                                    and
                                    carry forward the vibrant development process that the country has been passing
                                    through
                                    while getting increasingly integrated with the global economy.
                                    <br><br>

                                </small>
                            <p class=" fw-bold text-font mt-3 text-start"><small></small></p>

                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- footer -->
        <footer class="footer-bg p-5 mt-3" style="position: fixed; bottom:0; width: 100%;">
            <div class="d-flex justify-content-center align-item-center border-bottom">
                <h5 class="text-center text-white p-4">Bangladesh Sweden Trust Fund</h5>
                <div>
                    {{--      <button class="mt-3 btn btn-outline-light rounded-pill px-3"> --}}
                    {{--        <small>English</small> --}}
                    {{--      </button> --}}
                </div>
            </div>

            <p class="text-center text-white mt-4">
                <small>Design And Developed by SIS inflexionpoint BD for Economics Relations
                    Division.</small>
            </p>
        </footer>

    </header>
</body>

{{-- ------------------------------- english to bangla script ------------------------------ --}}

<script src="{{ asset('assets/js/messages2.js') }}"></script>

{{-- ------------------------------- english to bangla script ------------------------------ --}}


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>
