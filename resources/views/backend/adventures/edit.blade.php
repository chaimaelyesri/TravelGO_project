@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('content')

    <div class="content-wrapper">

        <form class="container-fluid" action="{{ route('adventures.update',$adventure->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @foreach($errors->all() as $error)
            {{ $error  }}
        @endforeach
        <!-- Breadcrumbs-->
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
                            <input type="text" value="{{$adventure->title}}" class="form-control" name="title" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level"  class="form-control" required>
                                <option value="" disabled selected>{{$adventure->level}}</option>
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
                            <textarea class="form-control" style="height:150px" name="small_description" placeholder="Small description">{{$adventure->small_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Big description</label>
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Big description">{{$adventure->description}}</textarea>
                        </div>
                    </div>
                </div>

                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" name="price" value="{{$adventure->price}}"  class="form-control" placeholder="price">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Cover image</label>
                            <img src="/uploads/adventures/{{$adventure->cover}}" width="300px">
                            <input type="file" name="cover" class="form-control" placeholder="image">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Images</label>

                            <input type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple>
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
                            <input type="text" name="location" value="{{$adventure->location}}" class="form-control" placeholder="ex. 250, Fifth Avenue...">
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

                            <input type="date" value="{{$adventure->stardate}}" name="stardate" class="form-control" >
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2">
                        <label class="fix_spacing">End date</label>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <input type="date" value="{{$adventure->enddate}}" name="enddate" class="form-control" >
                        </div>
                    </div>

                </div>


            </div>
            <!-- /box_general-->



            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-clock-o"></i>Program</h2>
                </div>
            <div class="col-md-12">
                <h6>Item</h6>
                <table id="pricing-list-container" style="width:100%;">
                    @foreach($data as $key=>$items)
                        <tr class="pricing-list-item">
                            <td>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" value="{{++$key}}" placeholder="Title">
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
                                            <input type="file" name="image[]" class="form-control" placeholder="Image">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <img src="{{ asset('storage/' . $items->image)  }}" style="width: 50px; height: 50px" class="img-fluid" alt="">
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
            <!-- /box_general-->

            <p><button type="submit" class="btn_1 medium">Submit</button></p>


        </form>

    </div>

@endsection
