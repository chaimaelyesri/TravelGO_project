@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-globe"></i>
                            </div>
                            <div class="mr-5"><h5>{{ count($adventures) }} Adventures!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/admin/adventures">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-briefcase"></i>
                            </div>
                            <div class="mr-5"><h5>{{ count($activities) }} Activities!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/admin/activities">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-calendar-check-o"></i>
                            </div>
                            <div class="mr-5"><h5>{{ count($bookings) }} New Bookings!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/admin/bookings">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card dashboard text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fa fa-fw fa-book"></i>
                            </div>
                            <div class="mr-5"><h5>{{ count($posts) }} Posts!</h5></div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="/admin/blog">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /cards -->
            <h2></h2>

        </div>
        <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->
@endsection
