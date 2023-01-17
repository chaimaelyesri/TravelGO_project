@extends('frontend.layouts.user_layout')

@section('head')
    <title>TravelGo - Profile</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Bookings list</li>
            </ol>
            <div class="box_general">
                <div class="list_general">
                    <ul>
                        @foreach($orders as $order)
                            <li>
                                <figure><img src="img/item_1.jpg" alt=""></figure>
                                <h4>ORDER # {{ $order->id }} @if($order->statut == 2)<i class="approved">Approved</i>@elseif($order->statut == 0)<i class="cancel">Cancelled</i>@else<i class="pending">Pending</i>@endif</h4>
                                <ul class="booking_list">
                                    <li><strong>Created at:</strong> {{ $order->created_at }}</li>
                                    <li><strong>Payment method:</strong> {{ $order->paymentmethod }}</li>
                                    <li><strong>Ammount payed:</strong> {{ $order->cart_total }} Dhs</li>
                                    <li><strong>Client:</strong> {{ $order->firstname }} {{ $order->lastname }}</li>
                                </ul>
                                <a href="/admin/bookings/viewinvoice/{{ $order->id }}" target=”_blank” class="btn_1 gray"><i class="fa fa-fw fa-print"></i> Print invoice</a></p>
                                <ul class="buttons">

                                        <form action="{{ route('bookings.update',$order->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="statut" value="0" />
                                            <li><button href="{{ route('bookings.update',$order->id) }}" class="btn_1 gray delete" type="submit"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</button></li>
                                        </form>

                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- /box_general-->
            <nav aria-label="...">
                <ul class="pagination pagination-sm add_bottom_30">
                    {!!$orders->links()!!}
                </ul>
            </nav>
            <!-- /pagination-->
        </div>
        <!-- /container-fluid-->
    </div>

@endsection
