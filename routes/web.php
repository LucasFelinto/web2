<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/user', 'App\Http\Controllers\UserController');
Route::resource('/movie', 'App\Http\Controllers\MovieController')->middleware('auth');
Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home.index')->middleware('auth');

// Route::get('/login', 'App\Http\Controllers\AuthController@showFormLogin')->name('login');
// Route::post('/login/do', 'App\Http\Controllers\AuthController@login')->name('login.do');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
