<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends Controller {
    //menampilkan seluruh data
    function index(){
        $data['list_artikel'] = Artikel::all();
        return view('artikel.index', $data );
    }
    //menampilkan form tambah data
    function create(){
        return view('artikel.create');

    }
    //menyimpan data inputan dari tambah data
    function store(){
        $artikel = new Artikel;
        $artikel->judul = request('judul');
        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        $artikel->handleUploadFoto();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');
    }
    //menampilkan salah sastu data
    function show(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.show', $data);
    }
    // menampilkan form edit
    function edit(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.edit', $data);
    }
    // memproses update an data 
    function update(Artikel $artikel){
        $artikel->judul = request('judul');
        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        $artikel->handleUpdateFoto();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Diedit');
    }
    // menghapus data
    function destroy(Artikel $artikel){
        $artikel->handleDeleteFoto();
        $artikel->delete();

        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');

    }
}