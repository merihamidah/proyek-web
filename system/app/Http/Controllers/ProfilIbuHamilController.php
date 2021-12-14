<?php

namespace App\Http\Controllers;
use App\Models\ProfilIbuHamil;

class ProfilIbuHamilController extends Controller {
    //menampilkan seluruh data
    function index(){
        $data['list_profilibuhamil'] = ProfilIbuHamil::all();
        return view('profilibuhamil.index', $data );
    }
    //menampilkan form tambah data
    function create(){
        return view('profilibuhamil.create');

    }
    //menyimpan data inputan dari tambah data
    function store(){
        $profilibuhamil = new ProfilIbuHamil;
        $profilibuhamil->nama = request('nama');
        $profilibuhamil->tempat_lahir = request('tempat_lahir');
        $profilibuhamil->tanggal_lahir = request('tanggal_lahir');
        $profilibuhamil->alamat = request('alamat');
        $profilibuhamil->no_telepon = request('no_telepon');
        $profilibuhamil->save();

        return redirect('bidan/profilibuhamil')->with('success', 'Data Berhasil Ditambahkan');
    }
    //menampilkan salah sastu data
    function show(ProfilIbuHamil $profilibuhamil){
        $data['profilibuhamil'] = $profilibuhamil;
        return view('profilibuhamil.show', $data);
    }
    // menampilkan form edit
    function edit(ProfilIbuHamil $profilibuhamil){
        $data['profilibuhamil'] = $profilibuhamil;
        return view('profilibuhamil.edit', $data);
    }
    // memproses update an data 
    function update(ProfilIbuHamil $profilibuhamil){
        $profilibuhamil->nama = request('nama');
        $profilibuhamil->tempat_lahir = request('tempat_lahir');
        $profilibuhamil->tanggal_lahir = request('tanggal_lahir');
        $profilibuhamil->alamat = request('alamat');
        $profilibuhamil->no_telepon = request('no_telepon');
        $profilibuhamil->save();

        return redirect('bidan/profilibuhamil')->with('success', 'Data Berhasil Diedit');
    }
    // menghapus data
    function destroy(ProfilIbuHamil $profilibuhamil){
        $profilibuhamil->delete();

        return redirect('bidan/profilibuhamil')->with('danger', 'Data Berhasil Dihapus');

    }
}