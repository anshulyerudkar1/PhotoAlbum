<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main_Album;
use App\Models\User;
use Session;

class MainAlbumController extends Controller
{
    public function index(Request $request) {
        if(Session::has('loginEmail')) {
            $sessionData = Session::has('loginEmail');
        } else {
            return redirect('/login')->with('fail', 'You are not Loged In.');
        }
        $search = $request['search'] ?? "";
        if ($search != "") {
            $malbums = Main_Album::where('m_title','like',"%$search%")->get();
        }
        else {
            $malbums = Main_Album::all();
        }


        $data = compact('malbums', 'sessionData', 'search');
        return view('/adminpanel/index')->with($data);
    }

    public function mainDataAdd() {
        $url = url('/main/store/data');
        $tital = "Add Data";
        $data = compact('url', 'tital');
        return view('adminpanel/main-add-data')->with($data);
    }

    public function store(Request $request) {
        $img = time() . '-' . $request->m_title . '.jpg';
        $request->m_link->move(public_path('images/Main'), $img);
        $pathImg = 'images/Main/' . $img;
        $malbum = new Main_Album;
        $malbum->m_title = $request['m_title'];
        $malbum->m_link = $pathImg;
        $malbum->save();

        return redirect('/admin');
    }

    public function mainDataDelete($id) {
        $malbum = Main_Album::find($id);
        if (!is_null($malbum)) {
            $malbum->delete();
        }
        return redirect()->back();
    }

    public function mainDataEdit($id) {
        $malbum = Main_Album::find($id);
        if (is_null($malbum)) {
            return redirect('/admin');
        } else {
            $tital = "Update Data";
            $url = url('/main/data/update')."/".$id;

            $data = compact('malbum', 'url', 'tital');
            return view('/adminpanel/main-add-data')->with($data);
        }
    }

    public function mainDataUpdate($id, Request $request) {
        $img = time() . '-' . $request->m_title . '.jpg';
        $request->m_link->move(public_path('images/Main'), $img);
        $pathImg = 'images/Main/' . $img;
        $malbum = Main_Album::find($id);
        $malbum->m_title = $request['m_title'];
        $malbum->m_link = $pathImg;
        $malbum->save();

        return redirect('/admin');
    }
}
