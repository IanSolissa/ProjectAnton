<?php

use App\Http\Controllers\BeritaadminController;
use App\Http\Controllers\BeritapageController;
use App\Http\Controllers\JadwaladminController;
use App\Http\Controllers\JadwalpageController;
use App\Http\Controllers\LandingpageAdminController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginAdminpageController;
use App\Http\Controllers\SaranpageController;
use App\Http\Controllers\TimadminController;
use App\Http\Controllers\TimpageController;
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
Route::resource('/', LandingpageController::class);
Route::resource('/tim', TimpageController::class);
Route::resource('/berita', BeritapageController::class);
Route::resource('/jadwal', JadwalpageController::class);
Route::resource('/saran', SaranpageController::class);
Route::prefix('/dashboard')->group(function(){
    Route::resource('/', LoginAdminpageController::class);
    Route::resource('/landingpage', LandingpageAdminController::class);
    Route::resource('/berita', BeritaadminController::class);
    Route::resource('/jadwal', JadwaladminController::class);
    Route::resource('/tim', TimadminController::class);

});

require __DIR__.'/auth.php';