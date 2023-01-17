<!DOCTYPE html>
<html lang="en">

<head>

    @yield('head')

    @include('frontend.layouts.includes.head')

    @yield('custom_css')

</head>

<body>

<div id="page">

    @include('frontend.layouts.includes.header')

    @yield('content')

    @include('frontend.layouts.includes.footer')

    @yield('custom_js')

</body>
</html>
