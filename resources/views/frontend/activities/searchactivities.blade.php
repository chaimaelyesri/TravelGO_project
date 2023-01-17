@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>TravelGo | Results.</title>
    <meta name="description" content="TravelGo | Results.">
@endsection

@section('content')

    <main>

        <section class="hero_in tours">
            <div class="wrapper" style="background-image: url('/frontend/img/pexels-taryn-elliott-3889843.jpg'); ">
                <div class="container">

                    <h1 class="fadeInUp"><span></span> tours list</h1>

                </div>
            </div>
        </section>

        <div class="container margin_60_35">
            <div class="col-lg-12">
                <form action="{{route('activity.search')}}" enctype="multipart/form-data">
                    <div class="row no-gutters custom-search-input-2 inner">
                        <div class="col-lg-7">
                            <div class="form-group">
                                <input name="searchcity" class="form-control" type="text" placeholder="Where do you want to go ?">
                                <i class="icon_pin_alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <select name="search" class="wide">
                                <option >All Categories</option>
                                <option value="Churches" >Churches</option>
                                <option value="Historic" >Historic</option>
                                <option value="Museums">Museums</option>
                                <option value="Walking tours">Walking tours</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                    </div>
                </form>
                <!-- /row -->
            </div>
            <!-- /custom-search-input-2 -->
            <div class="isotope-wrapper">
                @foreach ($results as $activity)
                    <div class="box_list isotope-item popular">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <small>{{$activity->category}}</small>
                                    <a href='/activities/details/{{$activity->id}}'><img src="/uploads/activities/{{$activity->cover}}" class="img-fluid" alt="" style="width: 400px; height: 267px;" width="400" height="267"><div class="read_more"><span>Read more</span></div></a>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <h3><a href='activities/details/{{$activity->id}}'>{{ $activity->title }}</a></h3>
                                    <p>{{ $activity->description1 }}</p>
                                    <span class="price">From <strong>{{ $activity->price }}</strong> /per person</span>
                                </div>
                                <ul>
                                    @php
                                        $date1 = new DateTime($activity->datedebut) ;
                                        $date2 = new DateTime($activity->datefin);
                                        $interval = $date1->diff($date2);
                                    @endphp
                                    <li><i class="icon_clock_alt"></i>  {!! $interval->days !!} days </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /isotope-wrapper -->



        </div>
        <!-- /container -->
        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-help2"></i>
                            <h4>Need Help? Contact us</h4>
                            <p>Cum appareat maiestatis interpretaris et, et sit.</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-wallet"></i>
                            <h4>Payments and Refunds</h4>
                            <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#0" class="boxed_list">
                            <i class="pe-7s-note2"></i>
                            <h4>Quality Standards</h4>
                            <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
                        </a>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

@endsection
