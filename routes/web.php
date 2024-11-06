<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\KasMasukController;
use App\Http\Controllers\KasKeluarController;
use App\Http\Controllers\welcomeController;

Route::get('login',[LoginController::class,'index'])->name('login');
Route::get('loginnya',[LoginController::class,'index'])->name('loginnya.index');
Route::post('loginnya',[LoginController::class,'loginnya'])->name('loginnya.store');
Route::group(['middleware' => 'auth'], function () {
    Route::get('home',[HomeController::class,'index'])->name('home');
    Route::resource('acara', AcaraController::class);
    Route::resource('kaskeluar', KasKeluarController::class);
    Route::resource('kasmasuk', KasMasukController::class);
    Route::resource('pengurus', PengurusController::class);
});
Route::get('/',[WelcomeController::class,'index']);
Route::get('artikel',[WelcomeController::class,'artikel'])->name('artikel');
Route::get('viewdetail/{id}',[WelcomeController::class,'viewdetail'])->name('viewdetail');

// Route::get('/', function () {
//     return view('welcome');
// });
