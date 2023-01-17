@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="content-wrapper">

        <form class="container-fluid" action="{{ route('adventures.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach($errors->all() as $error)
                {{ $error  }}
            @endforeach

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin/adventures">Adventures</a>
                </li>
                <li class="breadcrumb-item active">Add Adventure</li>
            </ol>

            <div class="box_general padding_bottom">

                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Add Adventure</h2>
                </div>


                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Adventure Title</label>
                            <input type="text" class="form-control" name="title" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control" required>
                                <option value="easy">Easy</option>
                                <option value="medium">Medium</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>
                    </div>

                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Small description</label>
                            <textarea class="form-control" style="height:150px" name="small_description" placeholder="Small description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Big description</label>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Big description"></textarea>
                        </div>
                    </div>
                </div>

                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price"  class="form-control" placeholder="price">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Cover image</label>
                            <input type="file" name="cover" class="form-control" placeholder="cover">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Images</label>
                            <div class="form-group">
                                <input type="file" name="images[]" class="form-control" id="images" multiple="multiple">
                            </div>

                        </div>
                    </div>

                </div>


                <!-- /row-->

                <!-- /row-->
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-map-marker"></i>Location</h2>
                </div>
                <div class="row">


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="location" class="form-control" placeholder="ex. 250, Fifth Avenue...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <select name="city_id" class="form-control" required>
                                @foreach($cities as $id => $city)
                                    <option value="{{ $id }}">
                                        {{ $city }}
                                    </option>
                                @endforeach
                            </select>
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
                            <input type="date" name="stardate" class="form-control" >
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">End date</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="date" name="enddate" class="form-control" >
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
                            <tr class="pricing-list-item">
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="text" name="day_title[]" class="form-control" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="text" name="day_description[]" class="form-control" placeholder="Description">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <input type="file" name="image[]" class="form-control" placeholder="Image">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <a href="#0" class="btn_1 gray add-pricing-list-item"><i class="fa fa-fw fa-plus-circle"></i>Add Item</a>
                    </div>

                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->

            <p><button type="submit" class="btn_1 medium">Submit</button></p>


        </form>

    </div>
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
