<?php

namespace App\Http\Controllers;
use App\Models\RekomendasiMakanan;

class RekomendasiMakananController extends Controller {
    //menampilkan seluruh data
    function index(){
        $data['list_rekomendasimakanan'] = RekomendasiMakanan::all();
        return view('rekomendasimakanan.index', $data );
    }
    //menampilkan form tambah data
    function create(){
        return view('rekomendasimakanan.create');

    }
    //menyimpan data inputan dari tambah data
    function store(){
        $rekomendasimakanan = new RekomendasiMakanan;
        $rekomendasimakanan->judul = request('judul');
        $rekomendasimakanan->deskripsi = request('deskripsi');
        $rekomendasimakanan->save();

        $rekomendasimakanan->handleUploadFoto();


        return redirect('admin/rekomendasimakanan')->with('success', 'Data Berhasil Ditambahkan');
    }
    //menampilkan salah sastu data
    function show(RekomendasiMakanan $rekomendasimakanan){
        $data['rekomendasimakanan'] = $rekomendasimakanan;
        return view('rekomendasimakanan.show', $data);
    }
    // menampilkan form edit
    function edit(RekomendasiMakanan $rekomendasimakanan){
        $data['rekomendasimakanan'] = $rekomendasimakanan;
        return view('rekomendasimakanan.edit', $data);
    }
    // memproses update an data 
    function update(RekomendasiMakanan $rekomendasimakanan){
        $rekomendasimakanan->judul = request('judul');
        $rekomendasimakanan->deskripsi = request('deskripsi');
        $rekomendasimakanan->save();

        $rekomendasimakanan->handleUpdateFoto();


        return redirect('admin/rekomendasimakanan')->with('success', 'Data Berhasil Diedit');
    }
    // menghapus data
    function destroy(RekomendasiMakanan $rekomendasimakanan){
        $rekomendasimakanan->handleDeleteFoto();
        $rekomendasimakanan->delete();

        return redirect('admin/rekomendasimakanan')->with('danger', 'Data Berhasil Dihapus');

    }
}