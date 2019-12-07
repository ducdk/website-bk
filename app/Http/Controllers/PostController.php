<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Captcha\UsesCaptcha;
use WebDevEtc\BlogEtc\Models\BlogEtcCategory;
use WebDevEtc\BlogEtc\Models\BlogEtcPost;

class PostController extends Controller
{

    use UsesCaptcha;
    public function viewSinglePost(Request $request, $blogPostSlug)
    {
        // the published_at + is_published are handled by BlogEtcPublishedScope, and don't take effect if the logged in user can manage log posts
        $blog_post = BlogEtcPost::where("slug", $blogPostSlug)
            ->firstOrFail();

        $tintuc = BlogEtcCategory::where("slug", 'tin-tuc')->firstOrFail();
        $ptintuc = $tintuc->posts()->where("blog_etc_post_categories.blog_etc_category_id", $tintuc->id)->offset(0)->limit(8);
        $datatintuc = $ptintuc->orderBy("posted_at", "desc")->paginate(4);

        if ($captcha = $this->getCaptchaObject()) {
            $captcha->runCaptchaBeforeShowingPosts($request, $blog_post);
        }

        return view("blogetc::single_post", [
            'post' => $blog_post,
            'tintuc' => $datatintuc,
            // the default scope only selects approved comments, ordered by id
            'comments' => $blog_post->comments()
                ->with("user")
                ->get(),
            'captcha' => $captcha,
        ]);
    }
    //
}
