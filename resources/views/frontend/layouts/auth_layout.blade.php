<!DOCTYPE html>
<body lang="en">

<head>

    @yield('head')

    @include('frontend.layouts.includes.head')

    @yield('custom_css')

</head>

    @yield('content')

    @yield('custom_js')

    <!-- COMMON SCRIPTS -->
    <script src="/frontend/js/jquery-2.2.4.min.js"></script>
    <script src="/frontend/js/common_scripts.js"></script>
    <script src="/frontend/js/main.js"></script>
    <script src="/frontend/assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/pw_strenght.js"></script>
</body>
</html>
