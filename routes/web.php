<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MangaController;

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
    return view('homepage');
});

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('/game', [GameController::class,'list'])->name('game-list');
Route::get('/game/{game}', [GameController::class,'show'])->name('game-view');

Route::get('/manga', [MangaController::class,'list'])->name('manga-list');
Route::get('/manga/{manga}', [MangaController::class,'show'])->name('manga-view');