@extends('layouts.admin')

@section('head')
    <title>Admin - Dashboard</title>

@endsection

@section('content')



    <div class="container-fluid">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h3 class="text-dark mb-0">Dashboard</h3>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4 col-md-4">
                <div class="card shadow border-left-primary py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>New reservations</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($bookings) }}</span></div>
                            </div>
                            <div class="col-auto"><i class="fa fa-calendar-check-o fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-md-4">
                <div class="card shadow border-left-success py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span style="border-color: var(--blue);color: var(--blue);">new users</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($users) }}</span></div>
                            </div>
                            <div class="col-auto"><i class="fa fa-user-plus fa-2x text-gray-300"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 col-md-4">
                <div class="card shadow border-left-warning py-2">
                    <div class="card-body">
                        <div class="row align-items-center no-gutters">
                            <div class="col mr-2">
                                <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span style="color: var(--blue);">offers</span></div>
                                <div class="text-dark font-weight-bold h5 mb-0"><span>{{ count($activities) }}</span></div>
                            </div>
                            <div class="col-auto"><i class="fa fa-suitcase fa-2x text-gray-300" style="color: var(--gray-dark);"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
