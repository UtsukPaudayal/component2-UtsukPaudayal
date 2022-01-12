<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\cd_controller;
use App\Http\Controllers\game_controller;
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
Route::get('/book',[BookController::class, 'index']); 
Route::post('/book',[BookController::class,'store']);

Route::get('/cd',[cd_controller::class, 'index']); 
Route::post('/cd',[cd_controller::class,'store']);

Route::get('/game',[game_controller::class, 'index']); 
Route::post('/game',[game_controller::class,'store']);

Route::get('/book/{book:id}/bookeditform',[BookController::class,'edit']);
Route::get('/cd/{cd:id}/cdeditform',[cd_controller::class,'edit']);
Route::get('/game/{game:id}/gameeditform',[game_controller::class,'edit']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
