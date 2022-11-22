<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppController;
use App\Http\Controllers\MessageController;
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

Auth::routes();
Auth::routes();

Route::get('/', [AppController::class, 'index'])->middleware('auth');

Route::get('/messages', [MessageController::class, 'index'])->middleware('auth');

Route::post('/messages', [MessageController::class, 'store'])->middleware('auth');

Route::get('/{any}', [AppController::class, 'index'])->where('any', '.*')->middleware('auth'); // catch all routes or else it will return 404 with Vue router in history mode

Route::get('/home', [HomeController::class, 'index'])->name('home');
