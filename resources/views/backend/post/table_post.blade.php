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
                <li class="breadcrumb-item active">Posts</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Edits posts</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Published At</th>
                                <th>Created at</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Published At</th>
                                <th>Created at</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                                    <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                                    <td>
                                        <a href="/blog/{{$post->id}}" class="btn">Show</a>
                                        <a href="{{ route('post.edit',$post->id) }}" class="btn">Edit</a>
                                        <form action="{{ route('post.destroy',$post->id) }}" method="post" class="d-inline">
                                            {{ csrf_field() }}
                                            @method('DELETE')

                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
