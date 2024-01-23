<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main_Album;
use App\Models\Sub_Album;
use App\Models\Main__Img_Album;
use App\Models\Main_Video_Album;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Session;

class SubAlbumController extends Controller
{
    public function index() {
        if(Session::has('loginEmail')) {
            $sessionData = Session::has('loginEmail');
        } else {
            return redirect('/login')->with('fail', 'You are not Loged In.');
        }
        $temp = "";
        $salbums = Sub_Album::all();
        $mialbums = Main__Img_Album::all();
        $mvalbums = Main_Video_Album::all();
        $data = compact('salbums', 'mialbums', 'mvalbums', 'temp');
        return view('/adminpanel/sub-album')->with($data);
    }

    public function subDataAdd() {
        $temp1 = "No Refferance Id";
        $malbums1 = Main_Album::all();
        $url = url('/sub/store/data');
        $tital = "Add Data";
        $data = compact('malbums1', 'url', 'tital', 'temp1');
        return view('/adminpanel/sub-add-data')->with($data);
    }

    public function subDataAddWith($id) {
        $temp1 = "Refferance Id";
        $malbums = Main_Album::find($id);
        $url = url('/sub/storeWith/data');
        $tital = "Add Data";
        $data = compact('malbums', 'url', 'tital', 'temp1');
        return view('/adminpanel/sub-add-data')->with($data);
    }

    public function store(Request $request) {
        $img = time() . '-' . $request->s_title . '.jpg';
        $request->s_link->move(public_path('images/Sub'), $img);
        $pathImg = '/images/Sub/' . $img;
        $salbum = new Sub_Album;
        $salbum->s_title = $request['s_title'];
        $salbum->m_id = $request['m_id'];
        $salbum->s_link = $pathImg;
        $salbum->save();

        return redirect('/admin/sub');
    }

    public function storeWith(Request $request) {
        $img = time() . '-' . $request->s_title . '.jpg';
        $request->s_link->move(public_path('images/Sub'), $img);
        $pathImg = '/images/Sub/' . $img;
        $salbum = new Sub_Album;
        $salbum->s_title = $request['s_title'];
        $id = $salbum->m_id = $request['m_id'];
        $salbum->s_link = $pathImg;
        $salbum->save();

        return redirect('/admin/sub/subClick/'.$id);
    }

    public function subDataDelete($id) {
        $salbum = Sub_Album::find($id);
        $filename = $salbum->s_link;
        if (!is_null($salbum)) {
            $salbum->delete();
            File::delete(public_path($filename));
        }
        return redirect()->back();
    }

    public function subDataClickDelete($id) {
        $salbum = Sub_Album::find($id);
        $filename = $salbum->s_link;
        if (!is_null($salbum)) {
            $salbum->delete();
            File::delete(public_path($filename));
        }
        return redirect()->back();
    }

    public function subDataEdit($id) {
        $salbum = Sub_Album::find($id);
        $malbums = Main_Album::all();
        if (is_null($salbum)) {
            return redirect('/admin/sub');
        } else {
            $tital = "Update Data";
            $url = url('/sub/data/update')."/".$id;

            $data = compact('malbums', 'salbum', 'url', 'tital');
            return view('/adminpanel/sub-add-data')->with($data);
        }
    }

    public function subDataClickEdit($id) {
        $salbum = Sub_Album::find($id);
        $malbums = Main_Album::all();
        if (is_null($salbum)) {
            return redirect('/admin/sub/subClick/'.$id);
        } else {
            $tital = "Update Data";
            $url = url('/sub/dataClick/update')."/".$id;

            $data = compact('malbums', 'salbum', 'url', 'tital');
            return view('/adminpanel/sub-add-data')->with($data);
        }
    }

    public function subDataUpdate($id, Request $request) {
        $img = time() . '-' . $request->s_title . '.jpg';
        $request->s_link->move(public_path('images/Sub'), $img);
        $pathImg = '/images/Sub/' . $img;
        $salbum = Sub_Album::find($id);
        $salbum->s_title = $request['s_title'];
        $salbum->m_id = $request['m_id'];
        $salbum->s_link = $pathImg;
        $salbum->save();

        return redirect('/admin/sub');
    }

    public function subDataClickUpdate($id, Request $request) {
        $img = time() . '-' . $request->s_title . '.jpg';
        $request->s_link->move(public_path('images/Sub'), $img);
        $pathImg = '/images/Sub/' . $img;
        $salbum = Sub_Album::find($id);
        $salbum->s_title = $request['s_title'];
        $salbum->m_id = $request['m_id'];
        $salbum->s_link = $pathImg;
        $salbum->save();

        return redirect('/admin/sub/subClick/'.$salbum->m_id);
    }

    public function subClick($id) {
        if(Session::has('loginEmail')) {
            $sessionData = Session::has('loginEmail');
        } else {
            return redirect('/login')->with('fail', 'You are not Loged In.');
        }
        $temp = "Sub Images Data";
        $salbums = DB::select("select * from sub_album where m_id='$id'");
        $mialbums = DB::select("select * from main__img_album where m_id='$id'");
        $mvalbums = DB::select("select * from main_video_album where m_id='$id'");
        $data = compact('salbums', 'mialbums', 'mvalbums', 'temp', 'id');
        return view('adminpanel/sub-album')->with($data);
    }
}
