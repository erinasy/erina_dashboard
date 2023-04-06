<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TypeKamarController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\ReservasiController;
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
    return view('welcome');
});
Route::get('/dashboard',[HomeController::class,'dashboard']);
Route::get('/profile',[ProfilController::class,'profile']);

Route::resource('customers', CustomersController::class);
Route::resource('kamar', KamarController::class);
Route::resource('typeKamar', TypeKamarController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('reservasi', ReservasiController::class);