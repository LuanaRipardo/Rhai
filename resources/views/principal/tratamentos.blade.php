@extends('layouts.internal.main')

@section('titleSite',  $post->title . ' | ' . env('APP_NAME') )

@inject('type', 'App\Models\Blog\Post')
@inject('recents', 'App\Models\Blog\Post')
@inject('posts', 'App\Models\Blog\Post')

@section('content')

    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{ $post->title }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="index.html" class="home"><i class="themifyicon ti-home"></i>Home</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>Tratamentos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->
    <!--site-main start-->
    <div class="site-main single">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <!-- post -->
                        <article class="post ttm-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid" src="{{ asset($post->path ?? $post->thumb_path) }}" alt="">
                                </div>

                            </div><!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-content -->
                            <div class="ttm-blog-classic-content">

                                <div class="entry-content">

                                    {!! $post->content !!}


                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-social-share-wrapper">
                                            <div class="ttm-social-share-title">Redes Sociais</div>
                                            <div class="social-icons circle">
                                                <ul>
                                                    <li><a href="https://www.facebook.com/clinicaandros/"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="https://www.instagram.com/clinicaandros/"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="https://www.youtube.com/channel/UC5P5NB8d8MCzhiKIc0ugNEA""><i class="fa fa-youtube-play"></i></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>

                                    </div>

                                </div>
                            </div><!-- ttm-blog-classic-content end -->
                        </article><!-- post end -->
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form  box-shadow" action="#">
                                <label>
                                    <span class="screen-reader-text">Buscar:</span>
                                    <input type="search" class="input-text" placeholder="Buscar …" value="" name="q">
                                </label>
                                <input type="submit" class="search-submit" value="Buscar">
                            </form>
                        </aside>

                        <div class="widget">
                            <h5 class="widget-title line-bottom">Tratamentos</h5>
                            <div class="latest-posts">
                                @foreach($recents->limit(30)->treatment()->get() as $recent)
                                    <article class="post media-post clearfix pb-0 mb-10" style="padding: 10px;border-top: 1px dashed #b3b3b3">
                                        <div class="post-right">
                                            <h5 class="post-title mt-0"><a href="{{ route('tratamentos', $recent->slug) }}">{{ $recent->title }}</a></h5>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>

                        <aside class="widget widget-recent-post">
                            <h3 class="widget-title">Notícias Recentes</h3>

                            @foreach($recents->limit(8)->blog()->get() as $recent)
                                <ul class="widget-post ttm-recent-post-list">
                                    <li>
                                        <a href="{{ route('blog.show', $recent->slug) }}"><img src="{{ $recent->thumb_path == '' ? 'https://placehold.it/75x75' : asset($recent->thumb_path) }}" alt="post-img"></a>
                                        <span class="post-date"></span>
                                        <a href="{{ route('blog.show', $recent->slug) }}">{{ $recent->title }}</a>
                                    </li>

                                </ul>
                            @endforeach
                        </aside>



                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->


@endsection
