<?php

namespace App\Http\Controllers;

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
        $ptintuc = $tintuc->posts()->where("blog_etc_post_categories.blog_etc_category_id", $tintuc->id)->offset(0)->limit(3);
        $data['tintuc'] = $ptintuc->orderBy("posted_at", "desc")->paginate(3);

        $sukien = BlogEtcCategory::where("slug", 'su-kien')->firstOrFail();
        $psukien = $sukien->posts()->where("blog_etc_post_categories.blog_etc_category_id", $sukien->id);
        $data['sukien'] = $psukien->orderBy("posted_at", "desc")->paginate(3);
//        dd($data);
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
