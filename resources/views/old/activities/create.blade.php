@extends('layouts.admin')

@section('head')

    <title>Admin - Dashboard</title>

@endsection

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Activity</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('activities.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
         <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('activities.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="title" class="form-control" placeholder="title">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>category:</strong>
                <textarea class="form-control" style="height:150px" name="category" placeholder="category"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description1:</strong>
                <textarea class="form-control" style="height:150px" name="description1" placeholder="description1"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description2:</strong>
                <textarea class="form-control" style="height:150px" name="description2" placeholder="description2"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start date:</strong>
                <input type="date" name="datedebut" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>end date:</strong>
                <input type="date" name="datefin" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Select City</label>

                <select name="city_id" class="form-control" required>
                    @foreach($cities as $id => $city)
                        <option value="{{ $id }}">
                            {{ $city }}
                        </option>
                    @endforeach
                </select>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>adresse:</strong>
                <input type="text" name="adresse" class="form-control" placeholder="adresse">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="Post Title">
                @error('image')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>

@endsection
