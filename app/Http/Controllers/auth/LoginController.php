<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    function index(){
        return view('pages.auth.login');
    }

    // menamproses login
    function login(Request $request){

        // validasi user
        $validateLogin = $request ->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // proses login, cek didatabase apakah sesuai dengan yang ada
        if(Auth::attempt($validateLogin)){
            return redirect()->to('/merk');
        } else {
            return redirect()->back();
        }

        // redirect
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidated();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }
}
