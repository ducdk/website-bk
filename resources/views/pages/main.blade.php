@extends('layouts.app')

@section('css')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="porlet-layout">
        <img class="banner-main" src="{{ asset('images/banner.jpg') }}" alt="">
    </div>

    <div class="porlet-layout">
        <div class="portlet-boundary">
            <div class="content-row">
                <div class="content-cell">
                    <img class="content-image" src="{{ asset('images/icon5.png') }}" alt="">
                    <a href="#" class="content-link">Tổng quan</a>
                </div>
                <div class="content-cell">
                    <img class="content-image" src="{{ asset('images/icon1.png') }}" alt="">
                    <a href="#" class="content-link">Khóa học</a>
                </div>
                <div class="content-cell">
                    <img class="content-image" src="{{ asset('images/icon4.png') }}" alt="">
                    <a href="#" class="content-link">Tin tức</a>
                </div>

                <div class="content-cell">
                    <img class="content-image" src="{{ asset('images/icon2.png') }}" alt="">
                    <a href="#" class="content-link">Sự kiện</a>
                </div>

                <div class="content-cell">
                    <img class="content-image" src="{{ asset('images/sis.jpg') }}" alt="">
                    <a href="#" class="content-link">Hỗ trợ sinh viên</a>
                </div>

                <div class="content-cell">
                    <img class="content-image" src="{{ asset('images/icon7.png') }}" alt="">
                    <a href="#" class="content-link">Công tác đoàn đội</a>
                </div>
            </div>
        </div>
    </div>

    <div class="porlet-layout">
        <div class="porlet-left tin-tuc mr-3">
            <div class="porlet-title">Tin tức</div>
            <div class="porlet-post">
                <div class="porlet-list">
                    @forelse($tintuc as $post)
                        <div class="content-item">
{{--                            <img class="content-image" src="{{ asset('images/article.jpg') }}" alt="">--}}
                            <?=$post->image_tag("medium", true, ''); ?>
                            <a href="{{$post->url()}}" class="content-title">
                                {{$post->title}}
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
        <div class="porlet-right tin-tuc">
            <div class="porlet-title">Tin tức nổi bật</div>
            <div class="porlet-post">
                <ul class="porlet-list">
                    <li class="content-item">
                        <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                    </li>
                    <li class="content-item">
                        <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                    </li>

                </ul>

                <a href="#" class="read-more">> Xem tất cả</a>
            </div>
        </div>
    </div>

    <div class="porlet-layout su-kien">
        <div class="porlet-left tin-tuc mr-3">
            <div class="porlet-title">Sự kiện nổi bật</div>
            <div class="porlet-post">
                <div class="porlet-list">
                    @forelse($sukien as $post)
                        <div class="content-item">
                            {{--                            <img class="content-image" src="{{ asset('images/article.jpg') }}" alt="">--}}
                            <?=$post->image_tag("medium", true, ''); ?>
                            <a href="{{$post->url()}}" class="content-title">
                                {{$post->title}}
                            </a>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>

        <div class="porlet-right tin-tuc">
            <div class="porlet-title">Sự kiện sắp diễn ra</div>
            <div class="porlet-post">
                <ul class="porlet-list">
                    <li class="content-item">
                        <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                    </li>
                    <li class="content-item">
                        <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                    </li>

                </ul>

                <a href="#" class="read-more">> Xem tất cả</a>
            </div>
        </div>
    </div>

    <div class="porlet-layout">
        <div class="porlet-center tin-tuc mr-3">
            <div class="porlet-title">Khóa học</div>
            <div class="porlet-post-horizontal">
                <div class="porlet-list">
                    <div class="content-item">
                        <img class="content-image" src="{{ asset('images/article.jpg') }}" alt="">
                        <div class="content">
                            <span class="content-title">Tri ân các thầy/cô giáo</span>
                            <span class="content-des">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</span>
                            <a href="#" class="read-more">> Xem chi tiết</a>
                        </div>

                    </div>

                    <div class="content-item">
                        <img class="content-image" src="{{ asset('images/article4.jpg') }}" alt="">
                        <div class="content">
                            <span class="content-title">Tri ân các thầy/cô giáo</span>
                            <span class="content-des">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</span>
                            <a href="#" class="read-more">> Xem chi tiết</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="porlet-layout hoat-dong-sinh-vien">
        <div class="porlet-left container tin-tuc">
            <div class="porlet-title">Hoạt động sinh viên</div>
            <div class="row d-flex">
                <div class="porlet-post col-4">
                    <ul class="porlet-list">
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>

                    </ul>

                    <a href="#" class="read-more">> Xem tất cả</a>
                </div>

                <div class="porlet-post col-4">
                    <ul class="porlet-list">
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>

                    </ul>

                    <a href="#" class="read-more">> Xem tất cả</a>
                </div>

                <div class="porlet-post col-4">
                    <ul class="porlet-list">
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>
                        <li class="content-item">
                            <a href="#" class="content-title">Tri ân các thầy/cô giáo Trường Đại học Bách khoa Hà Nội</a>
                        </li>

                    </ul>

                    <a href="#" class="read-more">> Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
@endsection
