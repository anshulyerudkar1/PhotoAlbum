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

class MainImgAlbumController extends Controller
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
        $url = url('/main/img/store/data');
        $tital = "Add Data";
        $data = compact('malbums1', 'url', 'tital', 'temp1');
        return view('/adminpanel/main-img-add-data')->with($data);
    }

    public function mainDataWithAdd($id) {
        $temp1 = "Refferance Id";
        $malbums = Main_Album::find($id);
        $url = url('/main/img/storeWith/data');
        $tital = "Add Data";
        $data = compact('malbums', 'url', 'tital', 'temp1');
        return view('/adminpanel/main-img-add-data')->with($data);
    }

    public function store(Request $request) {
        $img = time() . '-' . $request->mI_title . '.jpg';
        $request->mI_link->move(public_path('images/Main'), $img);
        $pathImg = '/images/Main/' . $img;
        $mialbum = new Main__Img_Album;
        $mialbum->mI_title = $request['mI_title'];
        $mialbum->m_id = $request['m_id'];
        $mialbum->mI_link = $pathImg;;
        $mialbum->save();

        return redirect('/admin/main/img');
    }

    public function storeWith(Request $request) {
        $img = time() . '-' . $request->mI_title . '.jpg';
        $request->mI_link->move(public_path('images/Main'), $img);
        $pathImg = '/images/Main/' . $img;
        $mialbum = new Main__Img_Album;
        $mialbum->mI_title = $request['mI_title'];
        $mialbum->m_id = $request['m_id'];
        $mialbum->mI_link = $pathImg;;
        $mialbum->save();

        return redirect('/admin/mainClick/img/'.$mialbum->m_id);
    }

    public function mainDataDelete($id) {
        $mialbum = Main__Img_Album::find($id);
        $filename = $mialbum->mI_link;
        if (!is_null($mialbum)) {
            $mialbum->delete();
            File::delete(public_path($filename));
        }
        return redirect()->back();
    }

    public function mainDataClickDelete($id) {
        $mialbum = Main__Img_Album::find($id);
        $filename = $mialbum->mI_link;
        if (!is_null($mialbum)) {
            $mialbum->delete();
            File::delete(public_path($filename));
        }
        return redirect()->back();
    }

    public function mainDataEdit($id) {
        $mialbum = Main__Img_Album::find($id);
        $malbums = Main_Album::all();
        if (is_null($mialbum)) {
            return redirect('/admin/main/img');
        } else {
            $tital = "Update Data";
            $url = url('/main/img/data/update')."/".$id;

            $data = compact('malbums', 'mialbum', 'url', 'tital');
            return view('/adminpanel/main-img-add-data')->with($data);
        }
    }

    public function mainDataClickEdit($id) {
        $mialbum = Main__Img_Album::find($id);
        $malbums = Main_Album::all();
        if (is_null($mialbum)) {
            return redirect('/admin/mainClick/img/'.$mialbum->m_id);
        } else {
            $tital = "Update Data";
            $url = url('/main/img/dataClick/update')."/".$id;

            $data = compact('malbums', 'mialbum', 'url', 'tital');
            return view('/adminpanel/main-img-add-data')->with($data);
        }
    }

    public function mainDataUpdate($id, Request $request) {
        $img = time() . '-' . $request->mI_title . '.jpg';
        $request->mI_link->move(public_path('images/Main'), $img);
        $pathImg = '/images/Main/' . $img;
        $mialbum = Main__Img_Album::find($id);
        $mialbum->mI_title = $request['mI_title'];
        $mialbum->m_id = $request['m_id'];
        $mialbum->mI_link = $pathImg;;
        $mialbum->save();

        return redirect('/admin/main/img');
    }

    public function mainImgDataClickUpdate($id, Request $request) {
        $img = time() . '-' . $request->mI_title . '.jpg';
        $request->mI_link->move(public_path('images/Main'), $img);
        $pathImg = '/images/Main/' . $img;
        $mialbum = Main__Img_Album::find($id);
        $mialbum->mI_title = $request['mI_title'];
        $mialbum->m_id = $request['m_id'];
        $mialbum->mI_link = $pathImg;;
        $mialbum->save();

        return redirect('/admin/mainClick/img/'.$mialbum->m_id);
    }

    public function mainImgClick($id) {
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
