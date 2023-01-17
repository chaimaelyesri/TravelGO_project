<!DOCTYPE html>
<html lang="en">

<head>

    @yield('head')

    @include('backend.includes.head')

    @yield('custom_css')

</head>


<body class="fixed-nav sticky-footer" id="page-top">

@include('frontend.layouts.includes.sidebar')

@yield('content')

@include('backend.includes.footer')

@yield('custom_js')


</body>
</html>
