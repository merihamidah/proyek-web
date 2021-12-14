<?php

namespace App\Http\Controllers\API;

use App\Models\Artikel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtikelResource extends Controller
{
    public function index()
    {
        return Artikel::all();
    }

 
    public function show($id)
    {
        $artikel = Artikel::find($id);
        if($artikel) {
            return collect([
                'status' => 200,
                'data' => $artikel
            ]);
        }
        return collect([
            'respon' => 500,
            'message' => "Artikel Tidak Ditemukan"
        ]);
    }
}
