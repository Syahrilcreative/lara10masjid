<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Auth;
use Alert;
class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function loginnya(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('home');
        }else{
            Alert::toast('Username atau password salah', 'error');
            return redirect()->back();
        };
    }
}
