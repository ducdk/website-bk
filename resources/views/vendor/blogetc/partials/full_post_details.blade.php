{{--@if(\Auth::check() && \Auth::user()->canManageBlogEtcPosts())--}}
{{--    <a href="{{$post->edit_url()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit--}}
{{--        Post</a>--}}
{{--@endif--}}

<h2 class='blog_title'>{{$post->title}}</h2>
{{--<h5 class='blog_subtitle'>{{$post->subtitle}}</h5>--}}


<p class="blog_body_content">
    {!! $post->post_body_output() !!}

    {{--@if(config("blogetc.use_custom_view_files")  && $post->use_view_file)--}}
    {{--                                // use a custom blade file for the output of those blog post--}}
    {{--   @include("blogetc::partials.use_view_file")--}}
    {{--@else--}}
{{--       {!! $post->post_body !!}--}}
{{--       {{ $post->post_body }}          // for safe escaping--}}
    {{--@endif--}}
</p>

<hr/>

Posted <strong>{{$post->posted_at->diffForHumans()}}</strong>

@includeWhen($post->author,"blogetc::partials.author",['post'=>$post])
@includeWhen($post->categories,"blogetc::partials.categories",['post'=>$post])
