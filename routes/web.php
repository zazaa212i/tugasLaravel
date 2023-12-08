<?php

use App\Http\Controllers\penjualanController;
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

Route::put('/penjualan/{id}', [penjualanController::class, 'update'])->name('penjualan.update'); {
    return view('welcome');
};


// Route::resource('penjualan',penjualanController::class);
// Route::resource('penjualan', [penjualanController::class, 'index']->name('penjualan.index'));
Route::get('/penjualan',[penjualanController::class,'index'])->name('penjualan.index');
Route::get('/penjualan/create',[penjualanController::class,'create'])->name('penjualan.create');
Route::post('/penjualan/store',[penjualanController::class,'store'])->name('penjualan.store');

Route::get('/penjualan/edit/{id}',[penjualanController::class,'edit']);
Route::put('/penjualan/{id}', [penjualanController::class, 'update'])->name('penjualan.update');


