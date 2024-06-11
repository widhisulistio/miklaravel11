<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.template');
});
//route untuk memanggil data pasien
// Route::get('/pasien', function () {
//     //return view('pasien.data');
//     return view('pasien.data2');
// });
// //route untuk memanggil pemeriksaan pasien
// Route::get('/pemeriksaan', function () {
//     //return view('pasien.pemeriksaan');
//     return view('pasien.pemeriksaan2');
// });
//Route::get('/pasien',[PasienController::class,'index'])->name('pasien');

Route::get('/pasien',[PasienController::class,'index'])->name('pasien');
Route::get('/buku/create',[PasienController::class,'create'])->name('pasien.create');
Route::post('/pasien',[PasienController::class,'store'])->name('pasien.store');
Route::get('/pasien/edit/{id}',[PasienController::class,'edit'])->name('pasien.edit');
Route::put('/pasien/update/{id}',[PasienController::class,'update'])->name('pasien.update');
Route::delete('/pasien/destroy/{id}',[PasienController::class,'destroy'])->name('pasien.destroy');

