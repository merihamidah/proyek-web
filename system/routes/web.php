<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/informatika', function(){
    return view("informatika");
});

Route::get('/sipil', function(){
    return view("sipil");
});
Route::get('beranda', function(){
    return view('template.base');
});
Route::get('artikel', function(){
    return view('artikel');
});
Route::get('rekomendasimakanan', function(){
    return view('rekomendasimakanan');
});
Route::get('profilbidan', function(){
    return view('profilbidan');
});