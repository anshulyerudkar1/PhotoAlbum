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

class MainVideoAlbumController extends Controller
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

    public function mainDataAdd() {
        $temp1 = "No Refferance Id";
        $malbums1 = Main_Album::all();
        $url = url('/main/vid/store/data');
        $tital = "Add Data";
        $data = compact('malbums1', 'url', 'tital', 'temp1');
        return view('/adminpanel/main-video-add-data')->with($data);
    }

    public function mainDataWithAdd($id) {
        $temp1 = "Refferance Id";
        $malbums = Main_Album::find($id);
        $url = url('/main/vid/storeWith/data');
        $tital = "Add Data";
        $data = compact('malbums', 'url', 'tital', 'temp1');
        return view('/adminpanel/main-video-add-data')->with($data);
    }

    public function store(Request $request) {
        $mvalbum = new Main_Video_Album;
        $mvalbum->mV_title = $request['mV_title'];
        $mvalbum->m_id = $request['m_id'];
        $mvalbum->mV_link = $request['mV_link'];
        $mvalbum->save();

        return redirect('/admin/main/vid');
    }

    public function storeWith(Request $request) {
        $mvalbum = new Main_Video_Album;
        $mvalbum->mV_title = $request['mV_title'];
        $mvalbum->m_id = $request['m_id'];
        $mvalbum->mV_link = $request['mV_link'];
        $mvalbum->save();

        return redirect('/admin/main/vidWith/'.$mvalbum->m_id);
    }

    public function mainDataDelete($id) {
        $mvalbum = Main_Video_Album::find($id);
        if (!is_null($mvalbum)) {
            $mvalbum->delete();
        }
        return redirect()->back();
    }

    public function mainDataClickDelete($id) {
        $mvalbum = Main_Video_Album::find($id);
        if (!is_null($mvalbum)) {
            $mvalbum->delete();
        }
        return redirect()->back();
    }

    public function mainDataEdit($id) {
        $mvalbum = Main_Video_Album::find($id);
        $malbums = Main_Album::all();
        if (is_null($mvalbum)) {
            return redirect('/admin/main/vid');
        } else {
            $tital = "Update Data";
            $url = url('/main/vid/data/update')."/".$id;

            $data = compact('malbums', 'mvalbum', 'url', 'tital');
            return view('/adminpanel/main-video-add-data')->with($data);
        }
    }

    public function mainDataClickEdit($id) {
        $mvalbum = Main_Video_Album::find($id);
        $malbums = Main_Album::all();
        if (is_null($mvalbum)) {
            return redirect('/admin/main/vidWith/'.$mvalbum->m_id);
        } else {
            $tital = "Update Data";
            $url = url('/main/vid/dataClick/update')."/".$id;

            $data = compact('malbums', 'mvalbum', 'url', 'tital');
            return view('/adminpanel/main-video-add-data')->with($data);
        }
    }

    public function mainDataUpdate($id, Request $request) {
        $mvalbum = Main_Video_Album::find($id);
        $mvalbum->mV_title = $request['mV_title'];
        $mvalbum->m_id = $request['m_id'];
        $mvalbum->mV_link = $request['mV_link'];
        $mvalbum->save();

        return redirect('/admin/main/vid');
    }

    public function mainDataClickUpdate($id, Request $request) {
        $mvalbum = Main_Video_Album::find($id);
        $mvalbum->mV_title = $request['mV_title'];
        $mvalbum->m_id = $request['m_id'];
        $mvalbum->mV_link = $request['mV_link'];
        $mvalbum->save();

        return redirect('/admin/main/vidWith/'.$mvalbum->m_id);
    }

    public function mainVideoClick($id) {
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
