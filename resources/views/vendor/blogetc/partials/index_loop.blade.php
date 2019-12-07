<div class="content-cell">
    <?=$post->image_tag("medium", true, ''); ?>
    <div class="education-single-event-text">
        <h3>
            <a href="{{$post->url()}}">{{$post->title}}</a>
        </h3>
        <div class="education-single-item-comment-view">
{{--            <span><i class="fa fa-clock-o"></i> 07:30 AM-06:30 PM</span>--}}
        </div>
        <p>{{$post->subtitle}}</p>
        <a class="button-default" href="{{$post->url()}}">Xem chi tiết</a>
    </div>
</div>
