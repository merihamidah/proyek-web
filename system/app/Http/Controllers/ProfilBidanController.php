<?php

namespace App\Http\Controllers;
use App\Models\ProfilBidan;

class ProfilBidanController extends Controller {
    //menampilkan seluruh data
    function index(){
        $data['list_profilbidan'] = ProfilBidan::all();
        return view('profilbidan.index', $data );
    }
    //menampilkan form tambah data
    function create(){
        return view('profilbidan.create');

    }
    //menyimpan data inputan dari tambah data
    function store(){
        $profilbidan = new ProfilBidan;
        $profilbidan->nama = request('nama');
        $profilbidan->tempat_lahir = request('tempat_lahir');
        $profilbidan->tanggal_lahir = request('tanggal_lahir');
        $profilbidan->alamat = request('alamat');
        $profilbidan->no_telepon = request('no_telepon');
        $profilbidan->save();

        return redirect('admin/profilbidan')->with('success', 'Data Berhasil Ditambahkan');
    }
    //menampilkan salah sastu data
    function show(ProfilBidan $profilbidan){
        $data['profilbidan'] = $profilbidan;
        return view('profilbidan.show', $data);
    }
    // menampilkan form edit
    function edit(ProfilBidan $profilbidan){
        $data['profilbidan'] = $profilbidan;
        return view('profilbidan.edit', $data);
    }
    // memproses update an data 
    function update(ProfilBidan $profilbidan){
        $profilbidan->nama = request('nama');
        $profilbidan->tempat_lahir = request('tempat_lahir');
        $profilbidan->tanggal_lahir = request('tanggal_lahir');
        $profilbidan->alamat = request('alamat');
        $profilbidan->no_telepon = request('no_telepon');
        $profilbidan->save();

        return redirect('admin/profilbidan')->with('success', 'Data Berhasil Diedit');
    }
    // menghapus data
    function destroy(ProfilBidan $profilbidan){
        $profilbidan->delete();

        return redirect('admin/profilbidan')->with('danger', 'Data Berhasil Dihapus');

    }
}