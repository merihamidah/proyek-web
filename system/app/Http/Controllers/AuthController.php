<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller{
    function showLogin(){
        return view('login');
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password'=> request('password')])){
            $user = Auth::user();
            if($user->level == 1) return redirect('admin/beranda')->with('success', 'Login Berhasil');
            if($user->level == 0) return redirect('bidan/berandabidan')->with('success', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Silakan Cek Email dan Password Anda');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

    function registration(){

    }

    function forgotPassword(){

    }
}