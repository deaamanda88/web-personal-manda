<?php

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
Route::get('/personalweb', function () {
    return view('personalweb');
});
Route::get('/webmanda', function () {
    return view('webmanda');
});

Route::get('/file', function () {
    return view('file');
});


