<?php

namespace App\Http\Controllers;

use DB;
use App\Course;
use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Models\BlogEtcCategory;

class KhoaHocController extends Controller
{
    public function index()
    {
        $data['khoahoc'] = DB::table('courses')->paginate(9);
//        dd($data);
        return view('pages.khoahoc', $data);
    }

    public function show($id)
    {
        $data['post'] = Course::find($id);
        return view('pages.detail-khoahoc', $data);
    }
}
