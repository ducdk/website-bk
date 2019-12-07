@extends("layouts.app",['title'=>$post->gen_seo_title()])


@section('css')
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection

@section("content")

    <img src="{{ asset('images/anh.jpg') }}" alt="" style="width: 100%">
    <div class='container mt-5 mb-5'>
        <div class='row'>
            <div class="col-sm-3"></div>
            <div class='col-sm-6 blog'>

                @include("blogetc::partials.show_errors")
                @include("blogetc::partials.full_post_details")


                @if(config("blogetc.comments.type_of_comments_to_show","built_in") !== 'disabled')
                    <div class="" id='maincommentscontainer'>
                        <h2 class='text-center' id='blogetccomments'>Comments</h2>
                        @include("blogetc::partials.show_comments")
                    </div>
                @else
                    {{--Comments are disabled--}}
                @endif
            </div>

            <div class="col-sm-3">
                <div class="porlet-layout ">
                    <div class="porlet-right tin-tuc">
                        <div class="porlet-title">Tin tức nổi bật</div>
                        <div class="porlet-post">
                            <ul class="porlet-list">
                                <li class="content-item">
                                @forelse($tintuc as $po)
                                    <li class="content-item">
                                        <a href="{{$po->url()}}" class="content-title">{{$po->title}}</a>
                                    </li>
                                @empty
                                @endforelse
                            </ul>

                            <a href="{{ url('blog/category/tin-tuc') }}" class="read-more">> Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
