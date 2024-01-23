<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sub_Album;
use App\Models\Sub_Img_Album;
use App\Models\Sub_Video_Album;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;

class SubVideoAlbumController extends Controller
{
    public function index() {
        if(Session::has('loginEmail')) {
            $sessionData = Session::has('loginEmail');
        } else {
            return redirect('/login')->with('fail', 'You are not Loged In.');
        }
        $temp = "";
        $sialbums = Sub_Img_Album::all();
        $svalbums = Sub_Video_Album::all();
        $data = compact('sialbums', 'svalbums', 'temp');
        return view('/adminpanel/sub-sub-album')->with($data);
    }

    public function subDataAdd() {
        $temp1 = "No Refferance Id";
        $salbums1 = Sub_Album::all();
        $url = url('/sub/vid/store/data');
        $tital = "Add Data";
        $data = compact('salbums1', 'url', 'tital', 'temp1');
        return view('/adminpanel/sub-video-add-data')->with($data);
    }

    public function subDataWithAdd($id) {
        $temp1 = "Refferance Id";
        $salbums = Sub_Album::find($id);
        $url = url('/sub/vid/storeWith/data');
        $tital = "Add Data";
        $data = compact('salbums', 'url', 'tital', 'temp1');
        return view('/adminpanel/sub-video-add-data')->with($data);
    }

    public function store(Request $request) {
        $svalbum = new Sub_Video_Album;
        $svalbum->sV_title = $request['sV_title'];
        $svalbum->s_id = $request['s_id'];
        $svalbum->sV_link = $request['sV_link'];
        $svalbum->save();

        return redirect('/admin/sub/vid');
    }

    public function storeWith(Request $request) {
        $svalbum = new Sub_Video_Album;
        $svalbum->sV_title = $request['sV_title'];
        $svalbum->s_id = $request['s_id'];
        $svalbum->sV_link = $request['sV_link'];
        $svalbum->save();

        return redirect('/admin/sub/vidWith/'.$svalbum->s_id);
    }

    public function subDataDelete($id) {
        $svalbum = Sub_Video_Album::find($id);
        if (!is_null($svalbum)) {
            $svalbum->delete();
        }
        return redirect()->back();
    }

    public function subDataWithDelete($id) {
        $svalbum = Sub_Video_Album::find($id);
        if (!is_null($svalbum)) {
            $svalbum->delete();
        }
        return redirect()->back();
    }

    public function subDataEdit($id) {
        $svalbum = Sub_Video_Album::find($id);
        $salbums = Sub_Album::all();
        if (is_null($svalbum)) {
            return redirect('/admin/sub/vid');
        } else {
            $tital = "Update Data";
            $url = url('/sub/vid/data/update')."/".$id;

            $data = compact('salbums', 'svalbum', 'url', 'tital');
            return view('/adminpanel/sub-video-add-data')->with($data);
        }
    }

    public function subDataWithEdit($id) {
        $svalbum = Sub_Video_Album::find($id);
        $salbums = Sub_Album::all();
        if (is_null($svalbum)) {
            return redirect('/admin/sub/vidWith/'.$svalbum->s_id);
        } else {
            $tital = "Update Data";
            $url = url('/sub/vid/dataWith/update')."/".$id;

            $data = compact('salbums', 'svalbum', 'url', 'tital');
            return view('/adminpanel/sub-video-add-data')->with($data);
        }
    }

    public function subDataUpdate($id, Request $request) {
        $svalbum = Sub_Video_Album::find($id);
        $svalbum->sV_title = $request['sV_title'];
        $svalbum->s_id = $request['s_id'];
        $svalbum->sV_link = $request['sV_link'];
        $svalbum->save();

        return redirect('/admin/sub/vid');
    }

    public function subDataWithUpdate($id, Request $request) {
        $svalbum = Sub_Video_Album::find($id);
        $svalbum->sV_title = $request['sV_title'];
        $svalbum->s_id = $request['s_id'];
        $svalbum->sV_link = $request['sV_link'];
        $svalbum->save();

        return redirect('/admin/sub/vidWith/'.$svalbum->s_id);
    }

    public function subSubClick($id) {
        if(Session::has('loginEmail')) {
            $sessionData = Session::has('loginEmail');
        } else {
            return redirect('/login')->with('fail', 'You are not Loged In.');
        }
        $temp = "Sub Images Data";
        $sialbums = DB::select("select * from sub_img_album where s_id='$id'");
        $svalbums = DB::select("select * from sub_video_album where s_id='$id'");
        $data = compact('sialbums', 'svalbums', 'temp', 'id');
        return view('adminpanel/sub-sub-album')->with($data);
    }
}
