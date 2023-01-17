@extends ('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit activity</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('activities.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
             <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('activities.update',$activity->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>title</strong>
                    <input type="text" name="title" value="{{ $activity->title }}" class="form-control" placeholder="title">
                </div>
            </div>




        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>category:</strong>
                <textarea class="form-control" style="height:50px" name="category" placeholder="category">{{ $activity->category }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description1:</strong>
                <textarea class="form-control" style="height:150px" name="description1" placeholder="description1">{{ $activity->description1 }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>description2:</strong>
                <textarea class="form-control" style="height:150px" name="description2" placeholder="description2">{{ $activity->description2 }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" value="{{ $activity->price }}" class="form-control" placeholder="price">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Start date:</strong>
                <input type="date" value="{{ $activity->datedebut }}" name="datedebut" class="form-control" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>end date:</strong>
                <input type="date" value="{{ $activity->datefin }}" name="datefin" class="form-control" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>adresse:</strong>
                <input type="text" name="adresse" value="{{ $activity->adresse }}" class="form-control" placeholder="adresse">
            </div>
        </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="{{ Storage::url($activity->image) }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
