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
    return view('Landing_Page');
});
Route::get('/Landing_Page', function () {
    return view('Landing_Page');
});
Route::get('/accounts', function () {
    return view('accounts');
});
Route::get('/Users', function () {
    return view('Users');
});
