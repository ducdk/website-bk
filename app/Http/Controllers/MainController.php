<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Swis\LaravelFulltext\Search;
use WebDevEtc\BlogEtc\Captcha\UsesCaptcha;
use WebDevEtc\BlogEtc\Models\BlogEtcCategory;
use WebDevEtc\BlogEtc\Models\BlogEtcPost;

class MainController extends Controller
{
    use UsesCaptcha;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc = BlogEtcCategory::where("slug", 'tin-tuc')->firstOrFail();
        $ptintuc = $tintuc->posts()->where("blog_etc_post_categories.blog_etc_category_id", $tintuc->id);
        $data['tintuc'] = $ptintuc->orderBy("posted_at", "desc")->paginate(3);
        $data['tintucnoibat'] = BlogEtcPost::all()->random(4);

        $sukien = BlogEtcCategory::where("slug", 'su-kien')->firstOrFail();
        $psukien = $sukien->posts()->where("blog_etc_post_categories.blog_etc_category_id", $sukien->id);
        $data['sukien'] = $psukien->orderBy("posted_at", "desc")->paginate(3);
        $data['sukiennoibat'] = BlogEtcPost::all()->random(4);
//        dd($data);

        $hd = BlogEtcCategory::where("slug", 'hoat-dong-sinh-vien')->firstOrFail();
        $phd = $hd->posts()->where("blog_etc_post_categories.blog_etc_category_id", $hd->id);
        $data['hdsv'] = $phd->orderBy("posted_at", "desc")->paginate(9);

        $data['khoahoc'] = Course::all()->random(2);
        return view('pages.main', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
