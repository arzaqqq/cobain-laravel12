<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

 Route::resource('mahasiswa',MahasiswaController::class);

 Route::resource('kelas', KelasController::class);

// Menampilkan Daftar Mahasiswa
// Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
// Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
// Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
// Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
// Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
// Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
// Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');



Route::get('/product', [ProdukController::class, 'index'])->name('product.index');

Route::get('/barang',[BarangController::class,'index'])->name('barang.index');

Route::get('/dosen',[DosenController::class, 'index'])->name('dosen.index');
