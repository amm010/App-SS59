<?php

use App\Http\Controllers\MerkController;
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
});
    