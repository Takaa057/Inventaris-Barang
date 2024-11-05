<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LokasiController;
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
    return view('admin.blank.index');
});

Route::resource('lokasi', LokasiController::class);

Route::resource('barang', BarangController::class);

Route::resource('details', DetailController::class);

Route::post('/details/{barang}', [DetailController::class, 'store'])->name('details.store');
// Route::put('/details/{barang}/{detail}', [DetailController::class, 'storeOrUpdate'])->name('details.update');
