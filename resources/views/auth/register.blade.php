@extends('frontend.layouts.auth_layout')

@section('content')

    <body style="background-image: url('/frontend/img/back_1.jpg');  "  id="register_bg">

    <nav id="menu" class="fake_menu"></nav>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <div id="login">
        <aside>
            <figure>
                <img src="/frontend/img/logo-color.png" width="140" height="20" data-retina="true"  alt="" class="logo_sticky m-2">
            </figure>
            <form method="POST" action="{{ route('register') }}">
                @csrf  @foreach($errors->all() as $error)
                <div class="alert alert-success">
                        {{ $error  }}
                </div>
                @endforeach
                <div class="form-group">
                    <label>Your first Name</label>
                    <input class="form-control" type="text" id="exampleFirstName" name="firstname" value="{{ old('firstname') }}">
                    <i class="ti-user"></i>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="form-group">
                    <label>Your Last Name</label>
                    <input class="form-control" type="text" id="exampleLastName" name="lastname" value="{{ old('lastname') }}">
                    <i class="ti-user"></i>
                </div>

                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="email" id="exampleInputEmail-2" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                    <i class="icon_mail_alt"></i>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control" type="text" id="exampleInputEmail-2"  name="phone" value="{{ old('phone') }}">
                    <i class="icon-phone"></i>
                </div>
                <div class="form-group">
                    <label>Your password</label>
                    <input class="form-control" type="password" id="examplePasswordInput"  name="password" required autocomplete="new-password">
                    <i class="icon_lock_alt"></i>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <div class="form-group">
                    <label>Confirm password</label>
                    <input class="form-control" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                    <i class="icon_lock_alt"></i>
                </div>
                <div id="pass-info" class="clearfix"></div>
                <button class="btn_1 rounded full-width add_top_30" type="submit" style="
                                background: #f85959;border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;"> Register Now!</button>
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="/login">Sign In</a></strong></div>
            </form>
            <div class="copy">Créé par Hanane Jabou</div>
        </aside>
    </div>
    <!-- /login -->

    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/pw_strenght.js"></script>



    </body>

@endsection
