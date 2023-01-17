@extends ('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Bookings</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Bookings</h6>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Last name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Number of people</th>
                            <th>Room type</th>
                            <th width="280px">Action</th>

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $key => $value)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->lastname }}</td>
                            <td>{{ $value->phone }}</td>
                            <td>{{ $value->email }}</td>
                            <td>{{ $value->numpeople }}</td>
                            <td>{{ $value->roomtype }}</td>

                            <td>
                                <form action="{{ route('bookings.destroy',$value->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ route('bookings.show',$value->id) }}">Show</a>
                                    <a class="btn btn-primary" href="{{ route('bookings.edit',$value->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach



                    </tbody>
                </table>
                {!! $data->links() !!}

            </div>
        </div>
    </div>

</div>

@endsection