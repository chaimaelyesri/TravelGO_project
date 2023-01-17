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
                <li class="breadcrumb-item active">Activities</li>
            </ol>
            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block">Activities</h2>
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <div class="list_general">

                    <ul>
                        @foreach ($activities as $activity)
                        <li>
                            <figure><img src="/uploads/activities/{{$activity->cover}}" alt=""></figure>
                            <small>Activity</small>
                            <h4>{{ $activity->title }}</h4>
                            <p>{{ $activity->description1 }}</p>
                            <form action="{{ route('activities.destroy',$activity->id) }}" method="POST">
                            <p><a href="{{ route('activities.edit',$activity->id) }}" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> Edit item</a></p>
                            <ul class="buttons">
                                @csrf
                                @method('DELETE')
                                <li> <button type="submit" class="btn_1 gray delete wishlist_close">Delete</button></li>
                            </ul>
                            </form>
                        </li>
                        @endforeach
                    </ul>
                    <p class="d-flex justify-content-end pb-4"><a href="{{ route('activities.create') }}" class="btn_1 bg-dark"><i class="fa fa-fw fa-plus"></i> Create new activity</a></p>

                </div>
            </div>
            <!-- /box_general-->
            <nav aria-label="...">
                <ul class="pagination pagination-sm add_bottom_30">
                    {!!$activities->links()!!}
                </ul>
            </nav>
            <!-- /pagination-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
