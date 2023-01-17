<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
    <div id="logo">
        <a href="/">
            <img src="/frontend/img/logo-white.png" width="140" height="20" data-retina="true" alt="" class="logo_normal m-2">
            <img src="/frontend/img/logo-color.png" width="140" height="20" data-retina="true"  alt="" class="logo_sticky m-2">
        </a>
    </div>

    <ul id="top_menu">
        @auth
            @php
                $isAdmin = Auth::user()->is_admin;
            @endphp
            @if($isAdmin != 1)
                <li><a href="/cart" class="cart-menu-btn" title="Cart"><strong>{{Cart::count()}}</strong></a></li>
            @endif
        @endauth
        @guest
            <li><a href="/cart" class="cart-menu-btn" title="Cart"><strong>{{Cart::count()}}</strong></a></li>
            <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
        @endguest
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <nav id="menu" class="main-menu">
        <ul>
            <li><span><a href="/">Home</a></span></li>
            <li><span><a href="/activities">Activities</a></span></li>
            <li><span><a href="/adventures">Adventure</a></span></li>
            <li><span><a href="/about">About</a></span></li>
            <li><span><a href="/blog">Blog</a></span></li>
            <li><span><a href="/terms_and_conditions">Terms</a></span></li>
            <li><span><a href="/contact">Contact Us</a></span></li>
            @auth
                @php
                  $isAdmin = Auth::user()->is_admin;
                @endphp
                @if($isAdmin == 1)
                <li><span><a href="#0" style="text-transform: capitalize;">{{ Auth::user()->firstname }}</a></span>
                    <ul>
                        <li><a href="/admin/profile/{{Auth::user()->id}}">My Profile</a></li>
                        <li><a href="/admin">Admin Panel</a></li>
                        <li><a href="/admin/activities/create">Add New Activity</a></li>
                        <li><a href="/admin/adventures/create">Add New Adventure</a></li>
                        <li><a href="/admin/cities/create">Add New City</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                </li>
                @else
                <li><span><a href="#0" style="text-transform: capitalize;">{{ Auth::user()->firstname }}</a></span>
                    <ul>
                        <li><a href="/myaccount/{{Auth::user()->id}}">My Account</a></li>
                        <li><a href="/myaccount/bookings/{{Auth::user()->id}}">My Bookings</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                </li>
                @endif
            @endauth
        </ul>
    </nav>

</header>
<!-- /header -->
