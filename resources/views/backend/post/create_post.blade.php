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

            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                                    <input type="text" name="title" class="form-control" placeholder="title">
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Body</label>
                                    <textarea id="summernote" name="body"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Picture</label>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>
                            </div>
                        </div>
                        <!-- /row-->
                </div>
                <!-- /box_general-->
                <p><input type="submit" class="btn_1 medium" value="Publish"></p>
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
            styleTags: [
                'p',
                { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
            lineHeights: ['1.8'],
            placeholder: 'Write here your description....',
            tabsize: 2,
            height: 200,
        });
        var markupStr = $('#summernote').summernote('body');
    </script>
@endsection
