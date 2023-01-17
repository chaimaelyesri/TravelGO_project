@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>TravelGO | Contact Us.</title>
    <meta name="description" content="TravelGO - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('content')
    <main>
        <section class="hero_in contacts">
            <div class="wrapper" style="background-image: url('/frontend/img/bg_4.jpg'); background-size: cover;">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Contact Us</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="contact_info">
            <div class="container">
                <ul class="clearfix">
                    <li>
                        <i class="pe-7s-map-marker"></i>
                        <h4>Address</h4>
                        <span>PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</span>
                    </li>
                    <li>
                        <i class="pe-7s-mail-open-file"></i>
                        <h4>Email address</h4>
                        <span>support@TravelGO.com - info@TravelGO.com<br><small>Monday to Friday 9am - 7pm</small></span>

                    </li>
                    <li>
                        <i class="pe-7s-phone"></i>
                        <h4>Contacts info</h4>
                        <span>+ 61 (2) 8093 3402 + 61 (2) 8093 3402<br><small>Monday to Friday 9am - 7pm</small></span>
                    </li>
                </ul>
            </div>
        </div>
        <!--/contact_info-->

        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="map_contact">
                        </div>
                        <!-- /map -->
                    </div>
                    <div class="col-lg-6">
                        <h4>Send a message</h4>
                        <p>Ex quem dicta delicata usu, zril vocibus maiestatis in qui.</p>
                        <div id="message-contact"></div>
                        <form method="POST" action="{{route('send-email')}}" enctype=" multipart/form-data">
                            @csrf
                            @if(Session::has("success"))
                                <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                            @elseif(Session::has("failed"))
                                <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                            @endif

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" id="name_contact" name="firstname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input class="form-control" type="text" id="lastname_contact" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" id="email_contact" name="emailCc">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input class="form-control" type="text" id="phone_contact" name="emailSubject">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" id="message_contact" name="emailBody" style="height:150px;"></textarea>
                            </div>

                            <p class="add_top_30"><input type="submit" value="Send message" class="btn_1 rounded" id="submit-contact"></p>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
@endsection
