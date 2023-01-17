@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>TravelGo | Activities.</title>
    <meta name="description" content="TravelGo | Activities.">
@endsection

@section('content')
    <main>
        <section class="hero_in tours_detail" >
            <div class="wrapper"  style="background-image: url('/uploads/activities/{{$activity->cover}}'); background-size: cover; " >
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Tour detail page</h1>
                </div>
                <span class="magnific-gallery">
                        <a href="/uploads/activities/{{$activity->cover}}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
                     @foreach($activity->images as $image)
                        <a href="/uploads/activities/{{$image->name}}" title="Photo title" data-effect="mfp-zoom-in"></a>
                    @endforeach
				</span>
            </div>
        </section>
        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#description" class="active">Description</a></li>
                        <li><a href="#sidebar">Booking</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description">
                            <h2>Description</h2>
                            <p>{{ $activity->description1 }}</p>
                            <p> {!! $activity->description2 !!}</p>

                            <hr>

                            <h3>Program </h3>
                            <p>
                                {{ $activity->program }}
                            </p>
                            <ul class="cbp_tmtimeline">
                                @php
                                    $i=0;
                                @endphp
                                @foreach($activity->days as $day)
                                <li>

                                    <div class="cbp_tmicon">
                                        @php
                                            $i++;
                                        @endphp
                                        {!! $i !!}
                                    </div>
                                    <div class="cbp_tmlabel">
                                        <div class="hidden-xs">
                                            <img src="{{ asset('storage/' . $day->image)  }}" alt="" class="rounded-circle thumb_visit">
                                        </div>
                                        <h4>{{$day->day_title}}</h4>
                                        <p>
                                            {{$day->day_description}}
                                        </p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </section>
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                        <form action="/addtocart" method="post">
                            @csrf
                            <div class="price">
                                <span>{{ $activity->price }} Dhs <small>per person</small></span>
                            </div>

                            <div class="form-group" id="input_date">
                                <input class="form-control" type="text" name="date" id="datepicker" value="" placeholder="When..">
                                <i class="icon_calendar"></i>
                            </div>

                            <div class="panel-dropdown">
                                <input type="hidden" name="qty" id="qtyTotal" class="qtyTotal"/>
                                <a href="#">Guests <span class="qtyTotal2">1</span></a>
                                <div class="panel-dropdown-content right">
                                    <div class="qtyButtons">
                                        <label>Adults</label>
                                        <input type="text" name="qtyInput" value="1">
                                    </div>
                                    <div class="qtyButtons">
                                        <label>Childrens</label>
                                        <input type="text" name="qtyInput" value="0">
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn_1 full-width purchase" value="Purchase" />
                            <div class="text-center"><small>No money charged in this step</small></div>
                            <input type="hidden" name="id" value="{{ $activity->id }}">
                            <input type="hidden" name="title" value="{{ $activity->title }}">
                            <input type="hidden" name="price" value="{{ $activity->price }}">
                        </form>
                        </div>

                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
    <!--/main-->

@endsection

@section("custom_js")
    <!-- Map -->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="/frontend/js/map_single_tour.js"></script>
    <script src="/frontend/js/infobox.js"></script>


    <!-- DATEPICKER  -->
    <script>
        $('input[name="date"]').daterangepicker({
            "singleDatePicker": true,
            "autoApply": true,
            parentEl:'#input_date',
            "linkedCalendars": false,
            "showCustomRangeLabel": false
        }, function(start, end, label) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            document.getElementById("datepicker").setAttribute('value', start.format('DD-MM-YYYY') );

        });

    </script>

    <!-- INPUT QUANTITY  -->
    <script src="/frontend/js/input_qty.js"></script>
@endsection
