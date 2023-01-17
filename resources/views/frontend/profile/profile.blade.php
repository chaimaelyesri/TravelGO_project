@extends('frontend.layouts.user_layout')

@section('head')
    <title>TravelGo - Profile</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
            <form class="container-fluid" action="{{ route('user.profile.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-user"></i>Profile details</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-12 add_top_30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control"  name="name" value='{{ Auth::user()->name }}' placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="lastname" value='{{ Auth::user()->lastname }}' placeholder="Your last name">
                                    </div>
                                </div>
                            </div>
                            <!-- /row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class="form-control" name="telephone" value='{{ Auth::user()->telephone }}' placeholder="Your telephone number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" value='{{ Auth::user()->email }}' placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                            <!-- /row-->
                        </div>
                    </div>
                </div>
                <!-- /box_general-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="box_general padding_bottom">
                            <div class="header_box version_2">
                                <h2><i class="fa fa-lock"></i>Change password</h2>
                            </div>
                            <div class="form-group">
                                <label>Old password</label>
                                <input class="form-control"  value="{{ Auth::user()->password }}"  type="password">
                            </div>
                            <div class="form-group">
                                <label>New password</label>
                                <input class="form-control" name="password" type="password">
                            </div>
                            <div class="form-group">
                                <label>Confirm new password</label>
                                <input class="form-control" name="password_confirmation" type="password_confirmation">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /row-->
                <button class="btn_1 medium" type="submit"> Save</button>

            </form>
        </div>
        <!-- /.container-fluid-->
    </div>

@endsection
