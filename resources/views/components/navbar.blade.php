<!-- --------------- navbar ----------------- -->

<div class="content">
    <nav
        class="navbar navbar-expand-lg navbar-light"
        style="background-color: #e8eeef"
    >
        <a class="navbar-brand" href="/" id="navbar_brand"
        >Bangladesh Sweden Trust Fund</a>

        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
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
                        <a class="dropdown-item" href="{{ route('front.message') }}">Hon'ble Minister, Ministry of Finance</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('front.message2') }}">Secretary, Economic Relations Division</a>
                    </div>
                </li>

                {{--  ------------------------------ modified message ----------------------------- --}}

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('front.faq') }}" id="">FAQ</a>
                </li>

                @if(auth()->user() == null)
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('login') }}" id="sign_in">Sign In </a>
                    </li>

                @else
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('logout-page') }}" id="">Logout </a>
                    </li>
                @endif

                <li class="nav-item active">
                    {{--                    <button--}}
                    {{--                        class="btn btn-outline-success nav-btn-language nav_en_btn"--}}
                    {{--                    >--}}
                    {{--                        English--}}
                    {{--                    </button>--}}
                    <button
                        class="btn btn-outline-success nav-btn-language"
                        onclick="bn()"
                        id="bn_btn"
                    >
                        বাংলা
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- ------------------------------ end - navbar  -->
