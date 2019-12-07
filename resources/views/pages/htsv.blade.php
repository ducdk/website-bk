@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="porlet-layout">
        <img class="banner-main" src="{{ asset('images/banner2.jpg') }}" alt="">
    </div>


    <div class="porlet-layout">
        <div class="porlet-left tin-tuc mr-3">
            <div class="porlet-title text-center">Tin tức</div>
            <div class="porlet-post">
                <div class="porlet-list">

                    @forelse($tintuc as $post)
                    <div class="content-item">
                        <?=$post->image_tag("medium", true, ''); ?>
{{--                        <img class="content-image" src="{{ asset('images/sinhvien.png') }}" alt="">--}}
                        <a href="{{$post->url()}}" class="content-title">{{$post->title}}</a>
                    </div>

                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="porlet-layout">
        <div class="porlet-left land mr-3">
            <div class="porlet-title title-land">HỌC TẬP VÀ LÀM THEO TƯ TƯỞNG, ĐẠO ĐỨC, PHONG CÁCH HỒ CHÍ MINH</div>
            <div class="porlet-post porlet-content">
                <div class="content-left mr-5">
                    <img src="{{ asset('images/bacho.jpg') }}" alt="">
                </div>

                <div class="content-right">
                    <ul class="porlet-list">
                        @forelse($hoctap as $post)
                        <li class="content-item">
                            <a href="{{$post->url()}}" class="content-title">{{$post->title}}</a>
                        </li>
                        @empty
                        @endforelse

                    </ul>

                    <a href="{{ url('blog/category/hoc-tap') }}" class="read-more">> Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>

    <div class="porlet-layout">
        <div class="porlet-left land mr-3">
            <div class="porlet-title title-land">GƯƠNG SÁNG SINH VIÊN</div>
            <div class="porlet-post porlet-content">
                <div class="content-left mr-5">
                    <img src="{{ asset('images/guong.jpg') }}" alt="">
                </div>

                <div class="content-right">
                    <ul class="porlet-list">
                        @forelse($sinhvien as $post)
                            <li class="content-item">
                                <a href="{{$post->url()}}" class="content-title">{{$post->title}}</a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                    <a href="{{ url('blog/category/sinh-vien') }}" class="read-more">> Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>


    <div class="porlet-layout">
        <div class="porlet-left land mr-3">
            <div class="porlet-title title-land">HỌC BỔNG</div>
            <div class="porlet-post porlet-content">
                <div class="content-left mr-5">
                    <img src="{{ asset('images/hocbong.jpg') }}" alt="">
                </div>

                <div class="content-right">
                    <ul class="porlet-list">
                        @forelse($hocbong as $post)
                            <li class="content-item">
                                <a href="{{$post->url()}}" class="content-title">{{$post->title}}</a>
                            </li>
                        @empty
                        @endforelse
                    </ul>
                    <a href="{{ url('blog/category/hoc-bong') }}" class="read-more">> Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>

    <div class="porlet-layout hoat-dong-sinh-vien">
        <div class="porlet-left container tin-tuc">
            <div class="porlet-title">Hoạt động sinh viên</div>
            <div class="row d-flex">
                @foreach ($hdsv->chunk(3) as $chunk)

                    <div class="porlet-post col-4">
                        <ul class="porlet-list">
                            @foreach ($chunk as $po)
                                <li class="content-item">
                                    <a href="{{$po->url()}}" class="content-title">{{$po->title}}</a>
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ url('blog/category/hoat-dong-sinh-vien') }}" class="read-more">> Xem tất cả</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
