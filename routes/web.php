<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang-administrasi-bisnis', function(){
    return view('tentang-administrasi-bisnis');
});

Route::get('/tentang-visi-misi-tujuan', function (){
    return view('tentang-visi-misi-tujuan');
});

Route::get('/tentang-struktur-organisasi', function(){
    return view('tentang-struktur-organisasi');
});

Route::get('/tentang-fasilitas', function(){ 
    return view('tentang-fasilitas');
});