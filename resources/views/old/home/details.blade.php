@extends('layouts.app')

@section('head')
    <title>Details</title>
    <meta charset="utf-8">

@endsection


@section('content')



    <div class="hero-wrap js-fullheight" style="background-image: url('/travelgo/images/bg_5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="/activities">Offer</a></span> <span>Offer details</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ $activity->title }}</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar">
                    <div class="sidebar-wrap bg-light ftco-animate">
                        <h3 class="heading mb-4">Find City</h3>
                        <form action="#">
                            <div class="fields">

                                <div class="form-group">
                                    <div class="select-wrap one-third">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control" placeholder="Keyword search">
                                            <option value="">Select Location</option>
                                            <option value="">San Francisco USA</option>
                                            <option value="">Berlin Germany</option>
                                            <option value="">Lodon United Kingdom</option>
                                            <option value="">Paris Italy</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="single-slider owl-carousel">
                                @foreach($activity->images as $image)
                                    <div class="item">
                                        <div class="hotel-img" style="background-image: url('{{ Storage::url($image->image) }}');"></div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                            <span>Our Best hotels &amp; Rooms</span>
                            <h2>{{ $activity->title }}</h2>
                            <p class="rate mb-5">
                                <span class="loc"><a href="#"><i class="icon-map"></i>{{ $activity->adresse }}</a></span>
                                <span class="star">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-o"></i>
                                8 Rating</span>
                            </p>
                            <p> {{ $activity->description1 }}.</p>
                            <p> {{ $activity->description2 }}.</p>

                        </div>

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-12 ftco-animate">
                                    <h4>Activity program</h4>
                                    <ul class="timeline">


                                        @foreach($activity->days as $day)





                                            <li>
                                                <div></div>
                                                <h6>{{ $day->title }}</h6>
                                                <p>{{ $day->description }}</p>
                                            </li>



                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Take A Tour</h4>
                            <div class="block-16">
                                <figure>
                                    <img src="{{ Storage::url($activity->image) }}" alt="Image placeholder" class="img-fluid">
                                    <a href="https://www.youtube.com/watch?v=5EnillgEpUw" class="play-button popup-youtube"><span class="icon-play"></span></a>
                                </figure>
                            </div>
                        </div>
                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-4">Our Rooms</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(/travelgo/images/room-4.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel {{ $activity->city }}</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(/travelgo/images/room-5.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel {{ $activity->city }}</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$80<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(/travelgo/images/room-6.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel {{ $activity->city }}</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$120<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                        </div>


                        <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                            <h4 class="mb-5">Check Availability &amp; Booking</h4>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href='/payments/{{$activity->id}}'>Book now</a>
                                </div>
                            </div>








                        </div>
                    </div> <!-- .col-md-8 -->
                </div>
            </div>
    </section> <!-- .section -->



    <style>
        ul.timeline {
            list-style-type: none;
            position: relative;
        }

        ul.timeline:before {
            content: ' ';
            background: #f85959;
            display: inline-block;
            position: absolute;
            left: 29px;
            width: 2px;
            height: 100%;
            z-index: 400;
        }

        ul.timeline>li {
            margin: 20px 0;
            padding-left: 20px;
        }

        ul.timeline>li:before {
            content: ' ';
            background: white;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #f85959;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 400;
        }
    </style>

@endsection
