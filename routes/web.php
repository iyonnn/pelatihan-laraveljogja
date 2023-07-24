<?php

use Illuminate\Support\Facades\Route;
use App\Models\Divisi;

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
    return view('welcome');
});

Route::get('/latihan',function(){
    return view('latihan');
});

Route::get('/daftar',function(){
   $data['kode'] = 'A81';
   $data['lokasi'] = 'Madiun';
   $data['divisi'] = Divisi::all();
   return view('daftar',$data);
});

Route::get('/form',function(){
    
    return view('divisi.form');
 });

 Route::get('/destroy',function(){
    
    return view('divisi.destroy');
 });