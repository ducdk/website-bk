<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Models\BlogEtcCategory;

class KhoaHocController extends Controller
{
    public function index()
    {
        return view('pages.khoahoc');
    }
}
