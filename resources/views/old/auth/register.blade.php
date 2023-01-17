@extends('layouts.auth')

@section('content')

    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 col-xl-6 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background: url(/adminpage/assets/img/dogs/bg_3.jpg);background-size: cover;"></div>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="p-5" style="border-radius: 25px;">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail-2" aria-describedby="emailHelp" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password"  name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password"></div>
                                </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" style="
                                background: #f85959;border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;"> {{ __('Register') }}</button>
                                <hr>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
