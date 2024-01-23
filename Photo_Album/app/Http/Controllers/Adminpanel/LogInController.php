<?php

namespace App\Http\Controllers\Adminpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class LogInController extends Controller
{
    public function index() {
        $users = User::all();
        $data = compact('users');
        return view('/adminpanel/login');
    }

    public function login(Request $request) {
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            if(User::where('password', '=', $request->password)) {
                $request->session()->put('loginEmail', $user->email);
                return redirect('/admin',);
            } else {
                return back()->with('fail', 'Password not matches.');
            }
        }
        else {
            return back()->with('fail', 'This email is not registerd.');
        }
    }
    public function logOut() {
        if(Session::has('loginEmail')) {
            Session::pull('loginEmail');
            return redirect('/login');
        }
    }
}
