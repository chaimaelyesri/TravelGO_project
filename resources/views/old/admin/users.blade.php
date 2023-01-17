@extends ('layouts.admin')


@section('content')

<div id="content">




<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Users</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Users</h6>
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
                            <th>Email</th>
                            <th>type</th>
                            <th>Created at</th>
                            
                            

                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->is_admin }}</td>
                            <td>{{ $user->created_at }}</td>
                            
                        </tr>

                        @endforeach



                    </tbody>
                </table>
               

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

@endsection


