@extends ('layouts.admin')


@section('content')

    <div class="container-fluid">
        <h3 class="text-dark mb-4">Offers</h3>
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 font-weight-bold">Offers info</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm">
                                    <option value="10" selected="">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>&nbsp;</label></div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                    </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>City</th>
                            <th>Price</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($activities as $activity)
                            <tr>

                                <td>{{ $activity->title }}</td>
                                <td>{{ $activity->category }}</td>
                                <td>{{ $activity->city }}</td>
                                <td>{{ $activity->price }}</td>
                                <td><form action="{{ route('activities.destroy',$activity->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('activities.show',$activity->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('activities.edit',$activity->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                    </div>
                    <div class="col-md-6">
                        {!! $activities->links() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5rem;">
            <div class="col-lg-12 margin-tb">

                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('activities.create') }}"> Create New Activity</a>
                </div>
            </div>
        </div>





@endsection
