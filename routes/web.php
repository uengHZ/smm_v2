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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\MtController::class, 'index'])->name('mt');
Route::get('/mt-data', [App\Http\Controllers\MtController::class, 'get_data'])->name('get_mt');
Route::get('/mt-add', [App\Http\Controllers\MtController::class, 'add'])->name('add_mt');
Route::get('/mt-add-data', [App\Http\Controllers\MtController::class, 'get_add'])->name('get_add_mt');
Route::get('/{id}/details-karyawan', [App\Http\Controllers\MtController::class, 'get_add_karyawan_details'])->name('get_add_karyawan_details');
Route::get('/{id}/details-barang', [App\Http\Controllers\MtController::class, 'get_add_barang_details'])->name('get_add_barang_details');
Route::post('/save', [App\Http\Controllers\MtController::class, 'save'])->name('mt-save');

Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('karyawan');
Route::get('/karyawan-data', [App\Http\Controllers\KaryawanController::class, 'get_data'])->name('get_karyawan');
    