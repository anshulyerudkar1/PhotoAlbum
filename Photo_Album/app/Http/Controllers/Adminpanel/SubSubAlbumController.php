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

class SubSubAlbumController extends Controller
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
        $url = url('/sub/img/store/data');
        $tital = "Add Data";
        $data = compact('salbums1', 'url', 'tital', 'temp1');
        return view('/adminpanel/sub-img-add-data')->with($data);
    }

    public function subDataAddWith($id) {
        $temp1 = "Refferance Id";
        $salbums = Sub_Album::find($id);
        $url = url('/sub/img/storeWith/data');
        $tital = "Add Data";
        $data = compact('salbums', 'url', 'tital', 'temp1');
        return view('/adminpanel/sub-img-add-data')->with($data);
    }

    public function store(Request $request) {
        $img = time() . '-' . $request->sI_title . '.jpg';
        $request->sI_link->move(public_path('images/SubSub'), $img);
        $pathImg = '/images/SubSub/' . $img;
        $sialbum = new Sub_Img_Album;
        $sialbum->sI_title = $request['sI_title'];
        $sialbum->s_id = $request['s_id'];
        $sialbum->sI_link = $pathImg;
        $sialbum->save();

        return redirect('/admin/sub/img');
    }

    public function storeWith(Request $request) {
        $img = time() . '-' . $request->sI_title . '.jpg';
        $request->sI_link->move(public_path('images/SubSub'), $img);
        $pathImg = '/images/SubSub/' . $img;
        $sialbum = new Sub_Img_Album;
        $sialbum->sI_title = $request['sI_title'];
        $sialbum->s_id = $request['s_id'];
        $sialbum->sI_link = $pathImg;
        $sialbum->save();

        return redirect('/admin/sub/imgClick/'.$sialbum->s_id);
    }

    public function subDataDelete($id) {
        $sialbum = Sub_Img_Album::find($id);
        $filename = $sialbum->sI_link;
        if (!is_null($sialbum)) {
            $sialbum->delete();
            File::delete(public_path($filename));
        }
        return redirect()->back();
    }

    public function subDataClickDelete($id) {
        $sialbum = Sub_Img_Album::find($id);
        $filename = $sialbum->sI_link;
        if (!is_null($sialbum)) {
            $sialbum->delete();
            File::delete(public_path($filename));
        }
        return redirect()->back();
    }

    public function subDataEdit($id) {
        $sialbum = Sub_Img_Album::find($id);
        $salbums = Sub_Album::all();
        if (is_null($sialbum)) {
            return redirect('/admin/sub/img');
        } else {
            $tital = "Update Data";
            $url = url('/sub/img/data/update')."/".$id;

            $data = compact('salbums', 'sialbum', 'url', 'tital');
            return view('/adminpanel/sub-img-add-data')->with($data);
        }
    }

    public function subDataWithEdit($id) {
        $sialbum = Sub_Img_Album::find($id);
        $salbums = Sub_Album::all();
        if (is_null($sialbum)) {
            return redirect('/admin/sub/imgClick/'.$sialbum->s_id);
        } else {
            $tital = "Update Data";
            $url = url('/sub/img/dataWith/update')."/".$id;

            $data = compact('salbums', 'sialbum', 'url', 'tital');
            return view('/adminpanel/sub-img-add-data')->with($data);
        }
    }

    public function subDataUpdate($id, Request $request) {
        $img = time() . '-' . $request->sI_title . '.jpg';
        $request->sI_link->move(public_path('images/SubSub'), $img);
        $pathImg = '/images/SubSub/' . $img;
        $sialbum = Sub_Img_Album::find($id);
        $sialbum->sI_title = $request['sI_title'];
        $sialbum->s_id = $request['s_id'];
        $sialbum->sI_link = $pathImg;
        $sialbum->save();

        return redirect('/admin/sub/img');
    }

    public function subDataWithUpdate($id, Request $request) {
        $img = time() . '-' . $request->sI_title . '.jpg';
        $request->sI_link->move(public_path('images/SubSub'), $img);
        $pathImg = '/images/SubSub/' . $img;
        $sialbum = Sub_Img_Album::find($id);
        $sialbum->sI_title = $request['sI_title'];
        $sialbum->s_id = $request['s_id'];
        $sialbum->sI_link = $pathImg;
        $sialbum->save();

        return redirect('/admin/sub/imgClick/'.$sialbum->s_id);
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
