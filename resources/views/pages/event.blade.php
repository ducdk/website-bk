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
                        <h1 class="page-title"> Tin tức sự kiện</h1>
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
                                <li class="item-current item-10"><span class="bread-current bread-10"> Tin tức sự kiện</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="porlet-layout mt-5 mb-5">
        <div class="porlet-event">
            <div class="content-row-post">
                @forelse($posts as $post)
                    <div class="content-cell">
                        <?=$post->image_tag("medium", true, ''); ?>
{{--                        <img class="content-image" src="{{ asset('images/course.jpg') }}" alt="">--}}
                        <div class="education-single-event-text">
                            <h3>
                                <a href="{{$post->url()}}">{{$post->title}}</a>
                            </h3>
                            <div class="education-single-item-comment-view">
                                <span><i class="fa fa-clock-o"></i> 07:30 AM-06:30 PM</span>
{{--                                <span><i class="fa fa-map-marker"></i> Mirpur Indunesia</span>--}}
                            </div>
                            <p>{{$post->subtitle}}</p>
                            <a class="button-default" href="{{$post->url()}}">Xem chi tiết</a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>

    <div class="space"></div>

@endsection
