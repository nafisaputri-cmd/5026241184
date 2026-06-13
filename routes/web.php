<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\pegawaiDBController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LampuController;
use App\Http\Controllers\NilaikuliahController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\SiswaController;


// GENERAL
Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

// DOSEN
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);

// PEGAWAI DB — route spesifik HARUS di atas {nama}
Route::get('/pegawai', [pegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [pegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [pegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [pegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [pegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [pegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [pegawaiDBController::class, 'cari']);

// Route wildcard {nama} HARUS paling bawah agar tidak menimpa route di atas
Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//Route CRUD lampu
Route::get('/lampu', [LampuController::class, 'index'])->name('lampu.index');
Route::get('/lampu/tambah', [LampuController::class, 'create'])->name('lampu.create');
Route::post('/lampu/simpan', [LampuController::class, 'store'])->name('lampu.store');
Route::get('/lampu/edit/{id}', [LampuController::class, 'edit'])->name('lampu.edit');
Route::put('/lampu/update/{id}', [LampuController::class, 'update'])->name('lampu.update');
Route::delete('/lampu/hapus/{id}', [LampuController::class, 'destroy'])->name('lampu.destroy');

//Route CRUD nilaikuliah
Route::get('/nilaikuliah', [NilaikuliahController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaikuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaikuliahController::class, 'store']);

//Route CRUD keranjang
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang/simpan', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/hapus/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');

//Route CRUD Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


// BLOG
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// PERTEMUAN / LATIHAN
Route::get('/nrp', function () { return view('5026241184'); });
Route::get('/menu', function () { return view('menu'); });
Route::get('/master', function () { return view('master'); });

Route::get('/pertemuan1-intro', function () { return view('pertemuan1-intro'); });
Route::get('/pertemuan2-news', function () { return view('pertemuan2-news'); });
Route::get('/pertemuan3-responsive', function () { return view('pertemuan3-responsive'); });
Route::get('/pertemuan3-nyamnyam', function () { return view('pertemuan3-nyamnyam'); });
Route::get('/pertemuan4-5026241184', function () { return view('pertemuan4-5026241184'); });
Route::get('/pertemuan5-dell', function () { return view('pertemuan5-dell'); });
Route::get('/pertemuan5-simply', function () { return view('pertemuan5-simply'); });
