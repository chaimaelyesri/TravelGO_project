@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
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
                <div class="header_box">
                    <h2 class="d-inline-block">Bookings list</h2>
                    <div class="filter">
                        <select name="orderby" onchange="location = this.value;" class="selectbox">
                            <option value="/admin/bookings">Any status</option>
                            <option value="/admin/bookings/statut/2">Approved</option>
                            <option value="/admin/bookings/statut/1">Pending</option>
                            <option value="/admin/bookings/statut/0">Cancelled</option>
                        </select>
                    </div>
                </div>
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
                            <p><a href="mailto:{{ $order->email }}" class="btn_1 gray"><i class="fa fa-fw fa-envelope"></i> Send Message</a>
                                <a href="/admin/bookings/viewinvoice/{{ $order->id }}" target=”_blank” class="btn_1 gray"><i class="fa fa-fw fa-print"></i> Print invoice</a></p>
                            <ul class="buttons">
                                    <li>
                                    <form action="{{ route('bookings.update',$order->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="statut" value="2" />
                                        <a href="{{ route('bookings.update',$order->id) }}" class="btn_1 gray approve" type="submit"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a>
                                    </form>
                                </li>
                                    <li><form action="{{ route('bookings.update',$order->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="statut" value="0" />
                                        <a href="{{ route('bookings.update',$order->id) }}" class="btn_1 gray delete" type="submit"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a>
                                    </form></li>
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
                    </li>
                </ul>
            </nav>
            <!-- /pagination-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
