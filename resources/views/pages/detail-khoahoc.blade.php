@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection


@section('content')

    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
                        <h1 class="page-title"> Khóa học</h1>
                        <!-- End Custom Title  -->
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->

                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <ul id="breadcrumbs" class="breadcrumbs">
                                <li class="item-home">
                                    <a class="bread-link bread-home"
                                       href="{{ url('/') }}" title="Home">Trang chủ</a>
                                </li>
                                <li class="separator separator-home"> -</li>
                                <li class="item-current item-10"><span class="bread-current bread-10"> Khóa học</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="porlet-layout mt-5 mb-5">
        <div class="porlet-event flex-column">
            <h2 class='blog_title'>{{$post->fullname }}</h2>
            {{--<h5 class='blog_subtitle'>{{$post->subtitle}}</h5>--}}


            <p class="blog_body_content" style="font-size: 14px">
                {!! $post->summary !!}

                {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
                {{--                                // use a custom blade file for the output of those blog post--}}
                {{--   @include("blogetc::partials.use_view_file")--}}
                {{--@else--}}
                {{--       {!! $post->post_body !!}--}}
                {{--       {{ $post->post_body }}          // for safe escaping--}}
                {{--@endif--}}
            </p>
        </div>
    </div>

    <div class="space"></div>

@endsection
