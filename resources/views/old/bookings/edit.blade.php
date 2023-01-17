@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Booking</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
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
  
    <form action="{{ route('bookings.update',$booking->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>name:</strong>
                    <input type="text" name="name" value="{{ $booking->name }}" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <strong>Last name:</strong>
                    <input type="text" name="lastname" value="{{ $booking->lastname }}" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <strong>Phone:</strong>
                    <input type="text" name="phone" value="{{ $booking->phone }}" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $booking->email }}" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <strong>Number of people:</strong>
                    <input type="text" name="numpeople" value="{{ $booking->numpeople }}" class="form-control" placeholder="Title">
                </div>
                <div class="form-group">
                    <strong>Room Type:</strong>
                    <input type="text" name="roomtype" value="{{ $booking->roomtype }}" class="form-control" placeholder="Title">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection

