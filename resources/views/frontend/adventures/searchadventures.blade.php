@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>TravelGO | Adventures results.</title>
    <meta name="description" content="TravelGO ">
@endsection

@section('content')

    <main>

        <section class="hero_in tours">
            <div class="wrapper" style="background-image: url('/frontend/img/back_5.jpg'); background-size: cover;">
            <div class="container">
                    <h1 class="fadeInUp"><span></span>Adventures list</h1>
                </div>
            </div>
        </section>

        <div class="container margin_60_35">
            <div class="col-lg-12">
                <form action="{{route('adventure.search')}}" enctype="multipart/form-data">
                    <div class="row no-gutters custom-search-input-2 inner">

                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" type="text" name="searchcity" placeholder="Where">
                                <i class="icon_pin_alt"></i>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input type="submit" class="btn_search" value="Search">
                        </div>
                    </div>
                </form>
                <!-- /row -->
            </div>
            <!-- /custom-search-input-2 -->
            <div class="isotope-wrapper">
                @foreach ($results as $adventure)
                    <div class="box_list isotope-item popular">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <small>{{$adventure->level}}</small>
                                    <a href='/activities/details/{{$adventure->id}}'><img src="/images/{{$adventure->cover}}" class="img-fluid" alt="" width="400" height="267"><div class="read_more"><span>Read more</span></div></a>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <h3><a href='activities/details/{{$adventure->id}}'>{{ $adventure->title }}</a></h3>
                                    <p>{{ $adventure->small_description }}</p>
                                    <span class="price">From <strong>{{ $adventure->price }}</strong> /per person</span>
                                </div>
                                <ul>
                                    @php
                                        $date1 = new DateTime($adventure->stardate) ;
                                        $date2 = new DateTime($adventure->enddate);
                                        $interval = $date1->diff($date2);
                                    @endphp
                                    <li><i class="icon_clock_alt"></i> {!! $interval->days !!}</li>
                                    <li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
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
