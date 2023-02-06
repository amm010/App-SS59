<?php

use App\Http\Controllers\MerkController;
use App\Http\Controllers\DataBarangController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('layouts.master');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){
    //manajemen merk
    Route::get('/Merk', [MerkController::class, 'index']);
    Route::get('/Merk/form', [MerkController::class, 'create']);
    Route::post('/Merk', [MerkController::class, 'store']);
    Route::get('/Merk/edit/{id}', [MerkController::class, 'edit']);
    Route::put('/Merk/{id}', [MerkController::class, 'update']);
    Route::delete('/Merk/{id}', [MerkController::class, 'destroy']);

    //manajemen data barang
    Route::get('/DataBarang', [DataBarangController::class, 'index']);
    Route::get('/DataBarang/form', [DataBarangController::class, 'create']);
    Route::post('/DataBarang', [DataBarangController::class, 'store']);
    Route::get('/DataBarang/edit/{id}', [DataBarangController::class, 'edit']);
    Route::put('/DataBarang/{id}', [DataBarangController::class, 'update']);
    Route::delete('/DataBarang/{id}', [DataBarangController::class, 'destroy']);
});
    