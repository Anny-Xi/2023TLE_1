<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'tourCreate'])->name('create');
Route::post('/store', [App\Http\Controllers\HomeController::class, 'tourStore'])->name('store');
Route::get('/{id}/live',[App\Http\Controllers\arrowController::class, 'livePage'])->name('liveView');
Route::get('/{id}/waiting',[App\Http\Controllers\ViewerController::class, 'waitingPage'])->name('waiting');
