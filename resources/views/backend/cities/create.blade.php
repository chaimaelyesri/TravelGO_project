@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="content-wrapper">

        <form class="container-fluid" action="{{ route('cities.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @foreach($errors->all() as $error)
            {{ $error  }}
        @endforeach
        <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add City</li>
            </ol>


            <div class="box_general padding_bottom">

                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Add City</h2>
                </div>


                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="country" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text" class="form-control" name="description" >
                        </div>
                    </div>

                </div>
                <!-- /row-->

                <!-- /row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" id="input-file-now-custom-3"  class="form-control" name="image">
                        </div>
                    </div>

                </div>



                <!-- /row-->

                <!-- /row-->
            </div>


                <!-- /row-->







            <p><button type="submit" class="btn_1 medium">Submit</button></p>


        </form>

    </div>

@endsection
