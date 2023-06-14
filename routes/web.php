<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\UnsurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PakController;
use App\Http\Controllers\JenisGuruController;


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::resource('pangkat', PangkatController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::get('/pak', [Pakcontroller::class, 'index'])->name('pak.index');
    Route::get('/pak/create', [Pakcontroller::class, 'create'])->name('pak.create');
    Route::get('/pak/last/create', [Pakcontroller::class, 'last'])->name('pak.last.create');
    Route::post('/pak/last/', [Pakcontroller::class, 'lastStore'])->name('pak.last.store');
    Route::resource('unsur', UnsurController::class);
    Route::resource('jenisGuru', JenisGuruController::class);
});