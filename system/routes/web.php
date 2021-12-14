<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilBidanController;
use App\Http\Controllers\RekomendasiMakananController;
use App\Http\Controllers\ProfilIbuHamilController;
use App\Http\Controllers\RekamMedisController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function () {
    return view('template.base');
});
//profilsaya
Route::get('profil_saya', [UserController::class, 'showProfilsaya']);
Route::get('profilsaya', [UserController::class, 'showProfil']);
Route::get('editprofilsaya', [HomeController::class, 'showEditProfil']);


//Route::get('beranda/{status}', [HomeController::class, 'showBeranda']);

//Auth
Route::get('login',[AuthController::class, 'showLogin'])->name('login');
Route::post('login',[AuthController::class, 'loginProcess']);
Route::get('logout',[AuthController::class, 'logout']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('beranda', [HomeController::class, 'showBeranda']);

//artikel
    Route::resource('artikel', ArtikelController::class);

//user
    Route::resource('user', UserController::class);
//rekomendasimakanan
    Route::resource('rekomendasimakanan', RekomendasiMakananController::class);
//profilbidan
    Route::resource('profilbidan', ProfilBidanController::class);

   
});
Route::prefix('bidan')->middleware('auth')->group(function(){
    Route::get('berandabidan', [HomeController::class, 'showBerandaBidan']);
    Route::get('konsultasi', [HomeController::class, 'showKonsultasi']);
    
//profilibuhamil
    Route::resource('profilibuhamil', ProfilIbuHamilController::class);

//rekammedisibuhamil
    Route::resource('rekammedis', RekamMedisController::class);
    Route::get('rekammedisibu', [RekamMedisController::class, 'showRekamMedisIbu']);


    
});

