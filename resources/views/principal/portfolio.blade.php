@extends('layouts.internal.main')
@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title"> Sobre</h1>
                            <h3 class="subtitle"> Sobre Dra.Rhaiana</h3>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                            <div class="container">
                                <div class="breadcrumb-wrapper-inner">
                                        <span>
                                            <a title="Go to Delmont." href="{{ route('home-site') }}" class="home"><i class="themifyicon ti-home"></i>&nbspHome</a>
                                        </span>
                                    <span class="ttm-bread-sep">&nbsp; | &nbsp;</span>
                                    <span>Sobre</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->







        <div class="gallery">
            <a href="{{ asset('principal/images/gallery/1.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/1.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/2.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/2.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/3.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/3.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/4.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/4.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/5.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/5.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/6.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/6.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/7.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/7.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/8.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/8.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/9.jpeg') }}"  data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/9.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/10.jpeg') }}" data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/10.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/11.jpeg') }}" data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/11.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/12.jpeg') }}" data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/12.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/13.jpeg') }}" data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/13.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/14.jpeg') }}" data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/14.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/15.jpeg') }}" data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/15.jpeg') }}"></a>
            <a href="{{ asset('principal/images/gallery/16.jpeg') }}" data-lightbox="mygallery"><img src="{{ asset('principal/images/gallery/16.jpeg') }}"></a>






    </div><!--site-main end-->

@endsection

