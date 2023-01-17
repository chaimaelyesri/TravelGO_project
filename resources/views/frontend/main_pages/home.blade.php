@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>TravelGO | Home</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')
<main>
    <section class="slider">
        <div id="slider" class="flexslider">

            <ul class="slides">
                @foreach($cities as $city)
                <li>
                    <img src="/uploads/city/{{$city->image}}" alt="">
                    <div class="meta" style="bottom: 45% !important;">
                        <h3>{{$city->city}}, {{$city->country}}</h3>
                        <h5 style="color:white">{{$city->description}}</h5>
                        <div class="info">
                        </div>
                        <a href="/activities/{{$city->id}}" class="btn_1">Read more</a>
                    </div>
                </li>
                @endforeach
            </ul>
            <div id="icon_drag_mobile"></div>
        </div>
        <div id="carousel_slider_wp">
            <div id="carousel_slider" class="flexslider">
                <ul class="slides">
                    @foreach($cities as $city)
                    <li>
                        <img src="/uploads/city/{{$city->image}}" style="width: 400px; height: 200px;" alt="">
                        <div class="caption">
                            <h3>{{$city->city}} <span>{{$city->country}}</span></h3>
                            <small>$75 per person</small>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <div class="search_container">
        <div class="container">
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
        </div>
    </div>
    <!-- /search_container -->

    <div class="container container-custom margin_60_0">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Our Popular Tours</h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
        </div>
        <div id="reccomended" class="owl-carousel owl-theme">
            <!-- /item -->
            @foreach($activities as $activity)
            <div class="item">
                <div class="box_grid">
                    <figure>
                        <a href='/activities/details/{{$activity->id}}'><img src="/uploads/activities/{{$activity->cover}}" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
                        <small>{{ $activity->category }}</small>
                    </figure>
                    <div class="wrapper">
                        <h3><a href='/activities/details/{{$activity->id}}'>{{ $activity->title }}</a></h3>
                        <p>{{ $activity->description1 }}</p>
                        <span class="price">From <strong>${{ $activity->price }}</strong> /per person</span>
                    </div>
                    <ul>
                        @php
                            $date1 = new DateTime($activity->datedebut) ;
                            $date2 = new DateTime($activity->datefin);
                            $interval = $date1->diff($date2);
                        @endphp
                        <li><i class="icon_clock_alt"></i> {!! $interval->days !!} days</li>
                        <li><div class="score"><span>Good<em>350 Reviews</em></span><strong>7.0</strong></div></li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
        <!-- /carousel -->
        <p class="btn_home_align"><a href="/activities" class="btn_1 rounded">View all Tours</a></p>
        <hr class="large">
    </div>

    <!-- /container -->

        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h3>News and Events</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-lg-6">
                        <a class="box_news" href="/blog/{{ $post->id }}">
                            <figure><img src="/uploads/blog/{{ $post->image }}" alt="">
                                <figcaption><strong>{{ date('d', strtotime($post->created_at)) }}</strong>{{ date('M', strtotime($post->created_at)) }}</figcaption>
                            </figure>
                            <ul>
                                <li>Mark Twain</li>
                                <li>{{ date('Y-m-d', strtotime($post->created_at)) }}</li>
                            </ul>
                            <h4>{{ $post->title }}</h4>
                            @php
                                $body = substr($post->body, 0, 150);
                            @endphp
                            <p>{!! $body !!}....</p>
                        </a>
                    </div>
                    @endforeach
                    <!-- /box_news -->

                    <!-- /box_news -->

                    <!-- /box_news -->

                    <!-- /box_news -->
                </div>
                <!-- /row -->
                <p class="btn_home_align"><a href="/blog" class="btn_1 rounded">View all news</a></p>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->

    <div class="call_section" style="background-image: url('/frontend/img/back_2.jpg');">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                <div class="block-reveal">
                    <div class="block-vertical"></div>
                    <div class="box_1">
                        <h3>Enjoy a GREAT travel with us</h3>
                        <p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
                        <a href="/about" class="btn_1 rounded">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/call_section-->
</main>
<!-- /main -->
@endsection
