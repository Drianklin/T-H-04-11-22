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


Route::get('/historia', function  () {
    return view('historia');
});

Route::get('/armas-ninja', function  () {
    return view('armas-ninja');
});

Route::get('/samurais', function  () {
    return view('samurais');
});
