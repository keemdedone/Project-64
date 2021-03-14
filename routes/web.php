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
Route::get('/homepage/create', function () {
    return view('select-create-review');
})->name('select-create-review');

Route::get('/game', [GameController::class,'list'])->name('game-list');
Route::get('/game/create', [GameController::class, 'createForm'])->name('game-create-form'); 
Route::post('/game/create', [GameController::class, 'create'])->name('game-create');
Route::get('/game/{game}', [GameController::class,'show'])->name('game-view');
Route::get('/game/{game}/update', [GameController::class, 'updateForm'])->name('game-update-form');
Route::post('/game/{game}/update', [GameController::class, 'update'])->name('game-update');


Route::get('/manga', [MangaController::class,'list'])->name('manga-list');
Route::get('/manga/create', [MangaController::class, 'createForm'])->name('manga-create-form'); 
Route::post('/manga/create', [MangaController::class, 'create'])->name('manga-create');
Route::get('/manga/{manga}', [MangaController::class,'show'])->name('manga-view');