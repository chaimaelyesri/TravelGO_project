@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="content-wrapper">

        <form class="container-fluid" action="{{ route('activities.update',$activity->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @foreach($errors->all() as $error)
                {{ $error  }}
            @endforeach
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin/activities">Activities</a>
                </li>
                <li class="breadcrumb-item active">Add Activity</li>
            </ol>


            <div class="box_general padding_bottom">

                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Edit Activity</h2>
                </div>


                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Activity Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $activity->title }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category">
                                <option>{{ $activity->category }}</option>
                                <option value="Churches" >Churches</option>
                                <option value="Historic" >Historic</option>
                                <option value="Museums">Museums</option>
                                <option value="Walking tours">Walking tours</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Small description</label>
                            <textarea class="form-control" style="height:150px" name="description1" placeholder="Small description">{{ $activity->description1 }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Big description</label>
                            <textarea class="form-control" style="height:150px" name="description2" placeholder="Big description">{{ $activity->description2 }}</textarea>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" value="{{ $activity->price }}" class="form-control" placeholder="price">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Program description</label>
                            <textarea class="form-control" style="height:150px" name="program" placeholder="Program description">{{ $activity->program }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Cover</label>
                            <img src="/uploads/activities/{{$activity->cover}}" style="width: 50%;" alt="">
                            <input type="file" name="cover" class="form-control" placeholder="Image">
                        </div>
                    </div>
                </div>


                <!-- /row-->
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-map-marker"></i>Location</h2>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="adresse" value="{{ $activity->adresse }}" class="form-control" placeholder="ex. 250, Fifth Avenue...">
                        </div>
                    </div>
                </div>

                <!-- /row-->
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-clock-o"></i>Opening</h2>
                </div>

                <!-- /row-->

                <!-- /row-->

                <!-- /row-->
                <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">Start date</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="date" value="{{ $activity->datedebut }}" name="datedebut" class="form-control" >
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">End date</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="date" value="{{ $activity->datefin }}" name="datefin" class="form-control" >
                        </div>
                    </div>

                </div>


            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-clock-o"></i>Program</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Item</h6>
                        <table id="pricing-list-container" style="width:100%;">
                            @foreach($data as $key=>$items)
                            <tr class="pricing-list-item">
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" value="{{$items->id}}" placeholder="Title">
                                                <input type="text" name="day_title[]" value="{{$items->day_title}}" class="form-control" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text"  name="day_description[]" value="{{$items->day_description}}" class="form-control" placeholder="Description">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="file" name="image[]" value="{{$items->image}}" class="form-control" placeholder="Image">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                {{-- <form action="{{ route('days.destroy',$items->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>                                               --}}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->

            <p><button type="submit" class="btn_1 medium">Submit</button></p>


        </form>

    </div>
        <!-- /.container-fluid-->


@endsection

@section('custom_js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(function() {
            // Multiple images preview with JavaScript
            var multiImgPreview = function(input, imgPreviewPlaceholder) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#images').on('change', function() {
                multiImgPreview(this, 'div.imgPreview');
            });
        });
    </script>

@endsection
