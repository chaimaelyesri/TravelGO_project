@extends('layouts.user')

@section('head')
<title>Profile</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection



@section('content')
<div class="container-fluid">

    <div class="content-wrapper">
        <div class="box_general padding_bottom pb-5">
            <div class="header_box version_2">
                <h1 class="h3 mb-2 text-gray-800">Profile details</h1>
            </div>
            <div class="row">
                <div class="col-md-8 add_top_40">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name='name' class="form-control" value='{{ Auth::user()->name }}' placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" placeholder="Your last name">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="text" class="form-control" placeholder="Your telephone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value='{{ Auth::user()->email }}' placeholder="Your email">
                            </div>
                        </div>
                    </div>
                    <!-- /row-->

                    <!-- /row-->
                </div>
            </div>
    </div>
        <!-- /box_general-->
        <div class="row">

            <div class="col-md-6">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h4><i class="fa fa-lock"></i>Change password</h4>
                    </div>
                    <div class="form-group">
                        <label>Old password</label>
                        <input class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <label>New password</label>
                        <input class="form-control" type="password">
                    </div>
                    <div class="form-group">
                        <label>Confirm new password</label>
                        <input class="form-control" type="password">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h4><i class="fa fa-envelope"></i>Change email</h4>
                    </div>
                    <div class="form-group">
                        <label>Old email</label>
                        <input class="form-control" name="old_email" value="{{ Auth::user()->email }}" id="old_email" type="email">
                    </div>
                    <div class="form-group">
                        <label>New email</label>
                        <input class="form-control" name="email" id="new_email" type="email">
                    </div>
                    <div class="form-group">
                        <label>Confirm new email</label>
                        <input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email">
                    </div>
                </div>
            </div>


        </div>

    </div>




</div>

<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body text-center shadow"><img class="rounded-circle mb-3 mt-4" src="assets/img/dogs/image2.jpeg" width="160" height="160">
                    <div class="mb-3"><button class="btn btn-primary btn-sm" type="button" style="background: #f85959;border-color: rgba(255,255,255,0);">Change Photo</button></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row mb-3 d-none">
                <div class="col">
                    <div class="card text-white bg-primary shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card text-white bg-success shadow">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <p class="m-0">Peformance</p>
                                    <p class="m-0"><strong>65.2%</strong></p>
                                </div>
                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                            </div>
                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 font-weight-bold" style="color: var(--gray-dark);">User Settings</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username" placeholder="user.name" name="username"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="email"><strong>Email Address</strong></label><input class="form-control" type="email" id="email" placeholder="user@example.com" name="email"></div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <div class="form-group"><label for="first_name"><strong>First Name</strong></label><input class="form-control" type="text" id="first_name" placeholder="John" name="first_name"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label for="last_name"><strong>Last Name</strong></label><input class="form-control" type="text" id="last_name" placeholder="Doe" name="last_name"></div>
                                    </div>
                                </div>
                                <div class="form-group"><button class="btn btn-primary btn-sm" type="submit" style="background: #f85959;border-color: rgba(255,255,255,0);">Save Settings</button></div>
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

<style>
    .content-wrapper {
        min-height: calc(100vh - 62px);
        padding-top: 1rem;
    }
</style>
