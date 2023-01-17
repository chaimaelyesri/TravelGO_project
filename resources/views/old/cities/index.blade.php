@extends('layouts.admin')

@section('content')

    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">

            <div class="container-fluid">
                <h3 class="text-dark mb-4">Cities</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Cities Info</p>
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
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($cities as $city)
                                    <tr>

                                        <td>{{ $city->id }}</td>
                                        <td><img src="{{ Storage::url($city->image) }}" height="75" width="75" alt="" /></td>
                                        <td>{{ $city->title }}</td>
                                        <td><form action="{{ route('cities.destroy',$city->id) }}" method="POST">

                                                <a class="btn btn-primary" href="{{ route('cities.edit',$city->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form></td>

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
                                {!! $cities->links() !!}
                            </div>
                        </div>
                    </div>
                </div>






@endsection
