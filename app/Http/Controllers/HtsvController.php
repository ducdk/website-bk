<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Models\BlogEtcCategory;

class HtsvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc = BlogEtcCategory::where("slug", 'tin-tuc')->firstOrFail();
        $ptintuc = $tintuc->posts()->where("blog_etc_post_categories.blog_etc_category_id", $tintuc->id)->offset(0)->limit(4);
        $data['tintuc'] = $ptintuc->orderBy("posted_at", "desc")->paginate(4);

        $hoctap = BlogEtcCategory::where("slug", 'hoc-tap')->firstOrFail();
        $phoctap = $hoctap->posts()->where("blog_etc_post_categories.blog_etc_category_id", $hoctap->id)->offset(0)->limit(4);
        $data['hoctap'] = $phoctap->orderBy("posted_at", "desc")->paginate(4);

        $sinhvien = BlogEtcCategory::where("slug", 'sinh-vien')->firstOrFail();
        $psinhvien = $sinhvien->posts()->where("blog_etc_post_categories.blog_etc_category_id", $sinhvien->id)->offset(0)->limit(4);
        $data['sinhvien'] = $psinhvien->orderBy("posted_at", "desc")->paginate(4);

        $hocbong = BlogEtcCategory::where("slug", 'hoc-bong')->firstOrFail();
        $phocbong = $hocbong->posts()->where("blog_etc_post_categories.blog_etc_category_id", $hocbong->id)->offset(0)->limit(4);
        $data['hocbong'] = $phocbong->orderBy("posted_at", "desc")->paginate(4);

        $hd = BlogEtcCategory::where("slug", 'hoat-dong-sinh-vien')->firstOrFail();
        $phd = $hd->posts()->where("blog_etc_post_categories.blog_etc_category_id", $hd->id);
        $data['hdsv'] = $phd->orderBy("posted_at", "desc")->paginate(9);
        return view('pages.htsv', $data);
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
