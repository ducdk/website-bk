@extends("layouts.app",['title'=>$title])
@section('css')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection
@section("content")

    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
{{--                        <h1 class="page-title"> Tin tức sự kiện</h1>--}}
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
                                {{--                                <li class="separator separator-home"> -</li>--}}
                                {{--                                <li class="item-current item-10"><span class="bread-current bread-10"> </span>--}}
                                {{--                                </li>--}}
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{--    <div class='row'>--}}
    {{--        <div class='col-sm-12 blogetc_container'>--}}
    {{--            @if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts())--}}
    {{--                <div class="text-center">--}}
    {{--                        <p class='mb-1'>You are logged in as a blog admin user.--}}
    {{--                            <br>--}}

    {{--                            <a href='{{route("blogetc.admin.index")}}'--}}
    {{--                               class='btn border  btn-outline-primary btn-sm '>--}}

    {{--                                <i class="fa fa-cogs" aria-hidden="true"></i>--}}

    {{--                                Go To Blog Admin Panel</a>--}}


    {{--                        </p>--}}
    {{--                </div>--}}
    {{--            @endif--}}


    {{--            @if(isset($blogetc_category) && $blogetc_category)--}}
    {{--                <h2 class='text-center'>Viewing Category: {{$blogetc_category->category_name}}</h2>--}}

    {{--                @if($blogetc_category->category_description)--}}
    {{--                    <p class='text-center'>{{$blogetc_category->category_description}}</p>--}}
    {{--                @endif--}}

    {{--            @endif--}}

    <div class="porlet-layout mt-5 mb-5">
        <div class="porlet-event">
            <div class="content-row-post">
                @forelse($posts as $post)
                    @include("blogetc::partials.index_loop")
                @empty
                @endforelse
            </div>
        </div>
    </div>

    {{--            @forelse($posts as $post)--}}
    {{--                @include("blogetc::partials.index_loop")--}}
    {{--            @empty--}}
    {{--                <div class='alert alert-danger'>No posts</div>--}}
    {{--            @endforelse--}}

    <div class='text-center  col-sm-4 mx-auto'>
        {{$posts->appends( [] )->links()}}
    </div>




    {{--                @include("blogetc::sitewide.search_form")--}}

    {{--        </div>--}}
    {{--    </div>--}}
@endsection
