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
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Cities</li>
            </ol>
            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block ">Cities</h2>
                </div>
                <div class="list_general">

                    <ul>
                        @foreach ($cities as $city)
                            <li>
                                <figure><img src="{{ Storage::url($city->image) }}" alt=""></figure>
                                <small>{{ $city->city }}</small>
                                <h4>{{ $city->country }}</h4>
                                <p>{{ $city->description }}</p>

                                <form action="{{ route('cities.destroy',$city->id) }}" method="POST">
                                    <p><a href="{{ route('cities.edit',$city->id) }}" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> Edit item</a></p>
                                    <ul class="buttons">
                                        <form action="{{ route('cities.destroy',$city->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <li> <button type="submit" class="btn_1 gray delete wishlist_close">Delete</button></li>
                                        </form>
                                    </ul>
                                </form>
                            </li>
                        @endforeach
                    </ul>

                    <hr>
                    <p class="d-flex justify-content-end pb-4"><a href="{{ route('cities.create') }}" class="btn_1 bg-dark"><i class="fa fa-fw fa-plus"></i> Add a new city</a></p>

                </div>
            </div>
            <!-- /box_general-->
            <nav aria-label="...">
                <ul class="pagination pagination-sm add_bottom_30">
                    {!!$cities->links()!!}
                </ul>
            </nav>
            <!-- /pagination-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
