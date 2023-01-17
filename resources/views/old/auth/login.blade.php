@extends('old.layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background: url(/adminpage/assets/img/dogs/image_8.jpg);background-size: cover;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">{{ __('Login') }}</h4>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="email" id=email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror

                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password"name="password" required autocomplete="current-password">
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check">
                                                    <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label custom-control-label" style="color: black;" for="formCheck-1"> Remember me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background: #f85959;border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;"> {{ __('Login') }}</button>
                                        <hr>
                                        <hr>

                                    <div class="text-center"><a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></div>
                                    <div class="text-center"><a class="small" href="{{ route('register') }}">Create an Account!</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
