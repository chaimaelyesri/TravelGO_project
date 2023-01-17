@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="content-wrapper">


        <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin/cities">Cities</a>
                </li>
                <li class="breadcrumb-item active">Edit City</li>
            </ol>

            <div class="box_general padding_bottom">
                <form action="{{ route('cities.update',$city->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @foreach($errors->all() as $error)
                        {{ $error  }}
                    @endforeach

                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Edit City</h2>
                </div>
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" value="{{ $city->city }}" class="form-control" name="city" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" value="{{ $city->country }}" class="form-control" name="country" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" value="{{ $city->description }}" class="form-control" name="description" >
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <img src="{{ Storage::url($city->image) }}" class="mw-100"  alt="" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" placeholder="City Title">

                        </div>
                    </div>
                </div>

            <p><button type="submit" class="btn_1 medium">Submit</button></p>

            </form>
        </div>
    </div>

@endsection
