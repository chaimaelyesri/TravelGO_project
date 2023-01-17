@extends('layouts.app')

@section('head')
<title>Make a Payment</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection


@section('content')

<div class="hero-wrap" style="background-image: url('/theme/images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Activity</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Offers</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="col-md-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>
        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
            <h4 class="mb-5">Booking</h4>

            @if (Auth::check())

            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="fields">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="activity_id" value="{{ $activity->id }}" />

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }} " placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="{{ Auth::user()->email }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" name="numpeople" class="form-control" min="0" max="10" placeholder="number of people" required>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="select-wrap one-third">


                                    <select name="roomtype" id="" class="form-control" placeholder="Room type" required>
                                        <option value="0">Room type</option>
                                        <option value="1">simple</option>
                                        <option value="2">double</option>
                                        <option value="3">Triple</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Check Availability" class="btn btn-primary py-3">
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            @else
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf
                <div class="fields">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="hidden" name="activity_id" value="{{ $activity->id }}" />

                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="number" name="numpeople" class="form-control" min="0" max="10" placeholder="number of people" required>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="select-wrap one-third">

                                    <select name="roomtype" id="" class="form-control" placeholder="Room type" required>
                                        <option value="0">Room type</option>
                                        <option value="1">simple</option>
                                        <option value="2">double</option>
                                        <option value="3">Triple</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="" class="btn btn-primary py-3">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endif
        </div>
        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
            <h4 class="mb-5">Payment</h4>

            <script
    src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>

</div>
    </div>

</section>

@endsection
