<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main_Album;
use App\Models\Main__Img_Album;
use App\Models\Main_Video_Album;
use App\Models\Sub_Album;
use App\Models\Sub_Img_Album;
use App\Models\Sub_Video_Album;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function index() {
        $malbums = Main_Album::paginate(12);
        $data = compact('malbums');
        return view('frontend/index')->with($data);
    }

    public function store(Request $request) {
        $malbum = new Main_Album;
        $malbum->m_title = $request['m_title'];
        $malbum->m_link = $request['m_link'];
        $malbum->save();

        return redirect('/frontend/index');
    }

    public function sub($id) {
        $salbums = DB::select("select * from sub_album where m_id='$id'");
        $mialbums = DB::select("select * from main__img_album where m_id='$id'");
        $mvalbums = DB::select("select * from main_video_album where m_id='$id'");
        $data = compact('salbums', 'mialbums', 'mvalbums');
        return view('frontend/sub-show')->with($data);
    }

    public function subSub($id) {
        $sialbums = DB::select("select * from sub_img_album where s_id='$id'");
        $svalbums = DB::select("select * from sub_video_album where s_id='$id'");
        $data = compact('sialbums', 'svalbums');
        return view('frontend/sub-Sub-show')->with($data);
    }
}
