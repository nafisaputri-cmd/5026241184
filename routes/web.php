<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);



Route::get('menu', function () {
    return view('menu');
});

Route::get('pertemuan1-intro', function () {
    return view('pertemuan1-intro');
});

Route::get('pertemuan2-news', function () {
    return view('pertemuan2-news');
});

Route::get('pertemuan3-responsive', function () {
    return view('pertemuan3-responsive');
});

Route::get('pertemuan3-nyamnyam', function () {
    return view('pertemuan3-nyamnyam');
});

Route::get('pertemuan4-5026241184', function () {
    return view('pertemuan4-5026241184');
});

Route::get('pertemuan5-dell', function () {
    return view('pertemuan5-dell');
});

Route::get('pertemuan5-simply', function () {
    return view('pertemuan5-simply');
});
