<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\RekomendasiMakanan;
use App\Models\RekamMedis;
use App\Models\ProfilBidan;
use App\Models\ProfilIbuHamil;
use App\Models\User;

class HomeController extends Controller{
   function showBeranda(){
       return view('beranda');
    }
   function showBerandaBidan(){
        return view('berandabidan');
    }
 
    function showKonsultasi(){
        return view('konsultasi');
    }
    function showEditProfil(){
        return view('editprofilsaya');
    }
    





}