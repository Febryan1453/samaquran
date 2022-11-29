<?php

use App\Http\Controllers\AlquranController;
use App\Http\Controllers\SamaQuranController;
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

// Route::controller(AlquranController::class)->group(function(){
//     Route::get('/', 'index')->name('quran.index');
//     Route::get('{nama_surah}/{nomor_surah}', 'detail')->name('quran.detail');
//     Route::get('/', 'index2')->name('quran.index2');
//     Route::get('{nama_surah}/{nomor_surah}', 'detail2')->name('quran.detail2');
// });

Route::controller(SamaQuranController::class)->group(function(){
    Route::get('/', 'allSurah')->name('samaquran.all');
    Route::get('/surah/{nomor}', 'detailSurah')->name('samaquran.detail');
});
