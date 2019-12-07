<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Models\BlogEtcCategory;

class CtddController extends Controller
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

        $thongbao = BlogEtcCategory::where("slug", 'thong-bao')->firstOrFail();
        $pthongbao = $thongbao->posts()->where("blog_etc_post_categories.blog_etc_category_id", $thongbao->id)->offset(0)->limit(4);
        $data['thongbao'] = $pthongbao->orderBy("posted_at", "desc")->paginate(4);

        return view('pages.ctdd',$data);
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
