@extends('layouts.app')

@section('head')
<title>TravelGo - Activity</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection

@section('content')
<div class="hero-wrap" style="background-image: url('/travelgo/images/bg_5.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
				<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/home">Home</a></span> <span>Activity</span></p>
				<h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our Offers</h1>
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

				@foreach ($activities as $activity)

					<div class="col-md-6 ftco-animate">
						<div class="destination">

							<a href='details/{{$activity->id}}' class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{ Storage::url($activity->image) }}') ;">
								<div class="icon d-flex justify-content-center align-items-center">
									<span class="icon-search2"></span>
								</div>
							</a>
							<div class="text p-3">
								<div class="d-flex">
									<div class="one">
										<h3><a href="">{{ $activity->title }}</a></h3>

									</div>
									<div class="two">
										<span class="price per-price"> {{ $activity->price }}<br>></span>
									</div>
								</div>
								<p> {{ $activity->description1 }}</p>
								<hr>
								<p class="bottom-area d-flex">
									<span><i class="icon-map-o"></i> {{ $activity->adresse }}</span>
									<span class="ml-auto"><a href='details/{{$activity->id}}'>Check details</a></span>
								</p>
							</div>
						</div>
					</div>

					@endforeach





				</div>
				<div class="row mt-5">
					<div class="col text-center">
						<div class="block-27">
							<ul>
								<li><a href="#">&lt;</a></li>
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&gt;</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- .col-md-8 -->
		</div>
	</div>
</section> <!-- .section -->

@endsection
