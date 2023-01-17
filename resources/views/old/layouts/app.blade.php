<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('head')

    <!-- Style -->
    <link rel="stylesheet" href="/travelgo/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/travelgo/css/animate.css">

    <link rel="stylesheet" href="/travelgo/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/travelgo/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/travelgo/css/magnific-popup.css">

    <link rel="stylesheet" href="/travelgo/css/aos.css">

    <link rel="stylesheet" href="/travelgo/css/ionicons.min.css">

    <link rel="stylesheet" href="/travelgo/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/travelgo/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/travelgo/css/flaticon.css">
    <link rel="stylesheet" href="/travelgo/css/icomoon.css">
    <link rel="stylesheet" href="/travelgo/css/style.css">

    <!-- Scripts -->
    <link rel="stylesheet" href="/travelgo/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/travelgo/css/animate.css">

    <link rel="stylesheet" href="/travelgo/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/travelgo/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/travelgo/css/magnific-popup.css">

    <link rel="stylesheet" href="/travelgo/css/aos.css">

    <link rel="stylesheet" href="/travelgo/css/ionicons.min.css">

    <link rel="stylesheet" href="/travelgo/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/travelgo/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/travelgo/css/flaticon.css">
    <link rel="stylesheet" href="/travelgo/css/icomoon.css">
    <link rel="stylesheet" href="/travelgo/css/style.css">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

        <a class="navbar-brand" href="/home">TravelGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href='/home' class="nav-link">Home</a></li>

                <li class="nav-item"><a href="/offers" class="nav-link">Offers</a></li>

                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>


                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>

                @guest
                    <li class="nav-item cta"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    @if (Route::has('register'))

                        <li class="nav-item cta"><a style="margin-left: 10px;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>

                    @endif
                @else
                    <div class="dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @if (auth()->user()->is_admin == 1)
                            <a class="dropdown-item" href="/admin">
                                Admin space
                            </a>

                        @else
                            <a class="dropdown-item" href='/profile'>
                                Profil
                            </a>
                        @endif

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    </div>
                    </li>
                @endguest


            </ul>
        </div>
    </div>
</nav>
<main>


    @yield('content')


</main>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">TravelGo</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Service</a></li>
                        <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                        <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Customer Support</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">FAQ</a></li>
                        <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                        <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                        <li><a href="#" class="py-2 d-block">How it works</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
										View, San Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
											210</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span
                                        class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved


                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
    </svg></div>


<script src="/travelgo/js/jquery.min.js"></script>
<script src="/travelgo/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/travelgo/js/popper.min.js"></script>
<script src="/travelgo/js/bootstrap.min.js"></script>
<script src="/travelgo/js/jquery.easing.1.3.js"></script>
<script src="/travelgo/js/jquery.waypoints.min.js"></script>
<script src="/travelgo/js/jquery.stellar.min.js"></script>
<script src="/travelgo/js/owl.carousel.min.js"></script>
<script src="/travelgo/js/jquery.magnific-popup.min.js"></script>
<script src="/travelgo/js/aos.js"></script>
<script src="/travelgo/js/jquery.animateNumber.min.js"></script>
<script src="/travelgo/js/bootstrap-datepicker.js"></script>
<script src="/travelgo/js/jquery.timepicker.min.js"></script>
<script src="/travelgo/js/scrollax.min.js"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/travelgo/js/google-map.js"></script>
<script src="/travelgo/js/main.js"></script>

</body>
</html>
