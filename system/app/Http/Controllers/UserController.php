<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller {
    //menampilkan seluruh data
    function index(){
        $data['list_user'] = User::all();
        return view('user.index', $data );
    }
    //menampilkan form tambah data
    function create(){
        return view('user.create');

    }
    //menyimpan data inputan dari tambah data
    function store(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->level = request('level');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Ditambahkan');
    }
    //menampilkan salah satu data
    function show(User $user){
        $data['user'] = $user;
        return view('user.show', $data);
    }
    // menampilkan form edit
    function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    // memproses update an data 
    function update(User $user){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->level = request('level');
        if(request('password')) $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user')->with('success', 'Data Berhasil Diedit');
    }
    // menghapus data
    function destroy(User $user){
        $user->delete();

        return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');

    }
    function showProfil(User $user){
        $data['user'] = $user;
        return view('profilsaya', $data);
    } 
    function showProfilsaya(User $user){
        $data['user'] = $user;
        return view('profil_saya', $data);
    } 
}