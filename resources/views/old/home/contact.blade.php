@extends('layouts.app')


@section('head')
<title>Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('/travelgo/images/bg_2.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{'home'}}">Home</a></span> <span>Contact</span></p>
        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h4">Contact Information</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3">
        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
      </div>
      <div class="col-md-3">
        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
      </div>
      <div class="col-md-3">
        <p><span>Email:</span> <a href="mailto:travelgo2021@gmail.com">travelgo2021@gmail.com</a></p>
      </div>
      <div class="col-md-3">
        <p><span>Website</span> <a href="{{'home'}}">TravelGo.com</a></p>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 pr-md-5">



        <form method="POST" action="{{route('send-email')}}" enctype=" multipart/form-data">

          @csrf


          @if(Session::has("success"))
          <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
          @elseif(Session::has("failed"))
          <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
          @endif



            <div class="form-group">

              <input type="email" name="emailRecipient" id="emailRecipient" class="form-control" placeholder="Mail To">
            </div>

            <div class="form-group">

              <input type="email" name="emailCc" id="emailCc" class="form-control" placeholder="Mail CC">
            </div>

            <div class="form-group">

              <input type="email" name="emailBcc" id="emailBcc" class="form-control" placeholder="Mail BCC">
            </div>

            <div class="form-group">

              <input type="text" name="emailSubject" id="emailSubject" class="form-control" placeholder="Mail Subject">
            </div>

            <div class="form-group">

              <textarea name="emailBody" id="emailBody" class="form-control" placeholder="Mail Body"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
        </form>

      </div>

      <div class="col-md-6" id="map"></div>
    </div>
  </div>
</section>

@endsection
