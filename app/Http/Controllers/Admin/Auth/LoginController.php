<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('agent.auth.login');
    }

    public function login(Request $request){
        if(Auth::attempt(['email'=> $request->email, 'password' => $request->password])){
            toastr()->success('Hoşgeldiniz Sevgili '.Auth::user()->name);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.login')->withErrors('Email adresi veya şifre hatalı');
    }

    public function logout(){
        Auth::logout();
        // dd(Auth::check());
        return redirect()->route('admin.login');
    }

}
