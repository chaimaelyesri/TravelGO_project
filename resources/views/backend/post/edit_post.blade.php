@extends('backend.backend_layout')

@section('head')
    <title>TravelGo - Admin dashboard</title>
    <meta name="description" content="">
@endsection

@section('custom_css')
    <!-- Plugin styles -->
    <link href="/backend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="/backend/vendor/dropzone.css" rel="stylesheet">
    <link href="/backend/css/date_picker.css" rel="stylesheet">
    <!-- WYSIWYG Editor -->
    <link rel="stylesheet" href="/backend/js/editor/summernote-bs4.css">
    <!-- Your custom styles -->
    <link href="/backend/css/custom.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add post</li>
            </ol>

            <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @foreach($errors->all() as $error)
                    {{ $error  }}
                @endforeach

                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>Basic info</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Body</label>
                                <textarea id="summernote" name="body">{{$post->body}}</textarea>
                            </div>
                        </div>
                    </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Picture</label>
                                    <img src="/uploads/blog/{{ $post->image }}" width="200px">
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                </div>
                <!-- /box_general-->
                <input type="submit" class="btn_1 medium" value="Publish"/>
            </form>

        </div>
        <!-- /.container-fluid-->
    </div>
@endsection

@section('custom_js')
    <!-- Custom scripts for this page-->
    <script src="/backend/vendor/dropzone.min.js"></script>
    <script src="/backend/vendor/bootstrap-datepicker.js"></script>
    <script>$('input.date-pick').datepicker();</script>
    <!-- WYSIWYG Editor -->
    <script src="/backend/js/editor/summernote-bs4.min.js"></script>
    <script>
        $('.editor').summernote({
            fontSizes: ['10', '14'],
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']]
            ],
            placeholder: 'Write here your description....',
            tabsize: 2,
            height: 200
        });
        var markupStr = $('#summernote').summernote('body');
    </script>
@endsection
