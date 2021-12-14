<?php

namespace App\Http\Controllers;
use App\Models\RekamMedis;

class RekamMedisController extends Controller {
    //menampilkan seluruh data
    function index(){
        $data['list_rekammedis'] = RekamMedis::all();
        return view('rekammedis.index', $data );
    }
    function showRekamMedisIbu(){
        return view('rekammedis.indexibu' );
    }
    //menampilkan form tambah data
    function create(){
        return view('rekammedis.create');

    }
    //menyimpan data inputan dari tambah data
    function store(){
        $rekammedis = new RekamMedis;
        $rekammedis->berat_badan_ibu = request('berat_badan_ibu');
        $rekammedis->tekanan_darah_ibu = request('tekanan_darah_ibu');
        $rekammedis->berat_janin = request('berat_janin');
        $rekammedis->panjang_janin = request('panjang_janin');
        $rekammedis->detak_jantung_janin = request('detak_jantung_janin');
        $rekammedis->tinggi_fundus = request('tinggi_fundus');
        $rekammedis->lila = request('lila');
        $rekammedis->catatan = request('catatan');
        $rekammedis->kunjungan_ke = request('kunjungan_ke');
        $rekammedis->tanggal_pemeriksaan = request('tanggal_pemeriksaan');
        $rekammedis->tanggal_kembali = request('tanggal_kembali');
       
        $rekammedis->save();

        return redirect('bidan/rekammedis')->with('success', 'Data Berhasil Ditambahkan');
    }
    //menampilkan salah sastu data
    function show(RekamMedis $rekammedis){
        $data['rekammedis'] = $rekammedis;
        return view('rekammedis.show', $data);
    }
    // menampilkan form edit
    function edit(RekamMedis $rekammedis){
        $data['rekammedis'] = $rekammedis;
        return view('rekammedis.edit', $data);
    }
    // memproses update an data 
    function update(RekamMedis $rekammedis){
        $rekammedis->berat_badan_ibu = request('berat_badan_ibu');
        $rekammedis->tekanan_darah_ibu = request('tekanan_darah_ibu');
        $rekammedis->berat_janin = request('berat_janin');
        $rekammedis->panjang_janin = request('panjang_janin');
        $rekammedis->detak_jantung_janin = request('detak_jantung_janin');
        $rekammedis->tinggi_fundus = request('tinggi_fundus');
        $rekammedis->lila = request('lila');
        $rekammedis->catatan = request('catatan');
        $rekammedis->kunjungan_ke = request('kunjungan_ke');
        $rekammedis->tanggal_pemeriksaan = request('tanggal_pemeriksaan');
        $rekammedis->tanggal_kembali = request('tanggal_kembali');
        
        $rekammedis->save();

        return redirect('bidan/rekammedis')->with('success', 'Data Berhasil Diedit');
    }
    // menghapus data
    function destroy(RekamMedis $rekammedis){
        $rekammedis->delete();

        return redirect('bidan/rekammedis')->with('danger', 'Data Berhasil Dihapus');

    }
}