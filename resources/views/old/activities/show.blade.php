@extends ('layouts.admin')

@section('content')
    <div class="container-fluid">

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show activity</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('activities.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>title:</strong>
            {{ $activity->title }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>small description:</strong>
            {{ $activity->description1 }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Big description:</strong>
            {{ $activity->description2 }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>price:</strong>
            {{ $activity->price }}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>adresse:</strong>
            {{ $activity->adresse }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            <img src="{{ Storage::url($activity->image) }}" width="500px">
        </div>
    </div>

    <hr>

    <h4>Activity Program</h4>
                    @foreach($activity->days as $day)
                        <div class="display-day">
                            <strong>{{ $day->title }}</strong>

                            <p>{{ $day->description }}</p>
                            <form action="{{ route('days.destroy',$day->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                        </div>
                    @endforeach

    <hr>

    <h4>Activity images</h4>
    @foreach($activity->images as $image)
        <div class="display-day">

            <strong>Images:</strong>
            <img src="{{ Storage::url($image->image) }}" height="75" width="75" alt="" />

            <form action="{{ route('images.destroy',$image->id) }}" method="POST">

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    @endforeach

    <hr>



    <div class='container'>
        <h4>Add day</h4>


    <form method="post" action="{{ route('day.add') }}">
        @csrf
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>day title:</strong>
                <input type="text" name="title" class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <strong>description</strong>

            <textarea class="form-control" style="height:150px" name="description" placeholder="description2"></textarea>
        </div>

        <div class="form-group">

            <input type="hidden" name="activity_id" value="{{ $activity->id }}" />
        </div>


        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Add Day" />
        </div>
    </form>

        <div class="container mt-5">
            <h3 class="text-center mb-5">Add image</h3>
            <form action="{{route('photos/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="user-image mb-3 text-center">
                    <div class="imgPreview"> </div>
                </div>

                <div class="form-group">
                    <strong>Post Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Post Title">
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">

                    <input type="hidden" name="activity_id" value="{{ $activity->id }}" />
                </div>

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Upload Images
                </button>
            </form>
        </div>

        <!-- jQuery -->


    </div>


</div>
    </div>


@endsection
