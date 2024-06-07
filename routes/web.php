<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;


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
Route::prefix('/')->name("auth.")->group(function(){
    Route::get('/', [authcontroller::class, 'index'])->name('login');
    Route::get('/registration', [authcontroller::class, 'registration'])->name('registration');
    Route::post('/registration', [authcontroller::class, 'create']);
});


