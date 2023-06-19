<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\UnsurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PakController;
use App\Http\Controllers\JenisGuruController;
use App\Http\Controllers\PakUnsurController;


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {

    Route::resource('pangkat', PangkatController::class)->middleware('role:admin');
    Route::resource('jabatan', JabatanController::class)->middleware('role:admin');
    Route::resource('unsur', UnsurController::class)->middleware('role:admin');
    Route::resource('jenisGuru', JenisGuruController::class)->middleware('role:admin');
    Route::resource('tendik', TendikController::class)->middleware('role:admin');

    Route::get('/pak', [Pakcontroller::class, 'index'])->name('pak.index');
    Route::get('/pak/create', [Pakcontroller::class, 'create'])->name('pak.create');
    Route::get('/pak/create/biodata', [Pakcontroller::class, 'biodata'])->name('pak.biodata');
    Route::post('/pak/biodata', [Pakcontroller::class, 'biodataStore'])->name('pak.biodata.store');
    Route::get('/pak/create/{pakid}/unsur/{parentid}', [Pakcontroller::class, 'unsurCreate'])->name('pak.unsur.create');
    Route::get('/pak/{pakid}/confirm', [Pakcontroller::class, 'confirm'])->name('pak.confirm');
    Route::post('/pak/{id}/unsur/{parentid}', [PakUnsurController::class, 'store'])->name('pak.unsur.store');
    Route::put('/pak/{id}/unsur/{parentid}/pakunsur/{pakunsurid}', [PakUnsurController::class, 'update'])->name('pak.unsur.update');
    Route::delete('/pak/{id}/unsur/{parentid}/pakunsur/{pakunsurid}', [PakUnsurController::class, 'destroy'])->name('pak.unsur.destroy');
    Route::get('/pak/last/create', [Pakcontroller::class, 'last'])->name('pak.last.create');
    Route::post('/pak/last/', [Pakcontroller::class, 'lastStore'])->name('pak.last.store');
});