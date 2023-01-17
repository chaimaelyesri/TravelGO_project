@extends('frontend.layouts.frontend_layout')

@section('head')
    <title>Panagea | Premium site template for travel agencies, hotels and restaurant listing.</title>
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
@endsection

@section('custom_css')
    <!-- SPECIFIC CSS -->
    <link href="/frontend/css/blog.css" rel="stylesheet">
@endsection

@section('content')
    <main>
        <section class="hero_in general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Panagea blog</h1>
                </div>
            </div>
        </section>
        <!--/hero_in-->

        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-9">
                    <div class="bloglist singlepost">
                        <p><img alt="" class="img-fluid" src="/uploads/blog/{{ $posts->image }}"></p>
                        <h1>{{ $posts->title }}</h1>
                        <div class="postmeta">
                            <ul>
                                <li><a href="#"><i class="icon_folder-alt"></i> Collections</a></li>
                                <li><a href="#"><i class="icon_clock_alt"></i> {{ date('Y-m-d', strtotime($posts->published_at)) }}</a></li>
                                <li><a href="#"><i class="icon_pencil-edit"></i> Hanane Jabou</a></li>
                                <li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li>
                            </ul>
                        </div>
                        <!-- /post meta -->
                        <div class="post-content">
                            {!! $posts->body !!}<p></p>
                        </div>
                        <!-- /post -->
                    </div>
                    <!-- /single-post -->

                    <div id="comments">
                        <h5>Comments</h5>
                        <ul>
                            <li>
                                <div class="avatar">
                                    <a href="#"><img src="/frontend/img/avatar1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="comment_right clearfix">
                                    <div class="comment_info">
                                        By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                    </div>
                                    <p>
                                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                    </p>
                                </div>
                                <ul class="replied-to">
                                    <li>
                                        <div class="avatar">
                                            <a href="#"><img src="/frontend/img/avatar2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="comment_right clearfix">
                                            <div class="comment_info">
                                                By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                            </div>
                                            <p>
                                                Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                            </p>
                                            <p>
                                                Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                            </p>
                                        </div>
                                        <ul class="replied-to">
                                            <li>
                                                <div class="avatar">
                                                    <a href="#"><img src="/frontend/img/avatar2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="comment_right clearfix">
                                                    <div class="comment_info">
                                                        By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                                    </div>
                                                    <p>
                                                        Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                                    </p>
                                                    <p>
                                                        Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="avatar">
                                    <a href="#"><img src="/frontend/img/avatar3.jpg" alt="">
                                    </a>
                                </div>

                                <div class="comment_right clearfix">
                                    <div class="comment_info">
                                        By <a href="#">Anna Smith</a><span>|</span>25/10/2019<span>|</span><a href="#">Reply</a>
                                    </div>
                                    <p>
                                        Cursus tellus quis magna porta adipiscin
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <hr>

                    <h5>Leave a Comment</h5>
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Message Below"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit2" class="btn_1 rounded add_bottom_30"> Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /col -->

                <aside class="col-lg-3">

                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Recent Posts</h4>
                        </div>
                        <ul class="comments-list">
                            @foreach($latest as $latest)
                                <li>
                                    <div class="alignleft">
                                        <a href="/blog/{{ $latest->id }}"><img src="/uploads/blog/{{ $latest->image }}" style="width: auto; height: 80px;" alt=""></a>
                                    </div>
                                    <small>{{ $latest->created_at }}</small>

                                    <h3><a href="#" title="">{{ $latest->title }}</a></h3>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Popular Tags</h4>
                        </div>
                        <div class="tags">
                            <a href="#">Information tecnology</a>
                            <a href="#">Students</a>
                            <a href="#">Community</a>
                            <a href="#">Carreers</a>
                            <a href="#">Literature</a>
                            <a href="#">Seminars</a>
                        </div>
                    </div>
                    <!-- /widget -->
                </aside>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
@endsection
