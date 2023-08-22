<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
//home
Route::get('/', 'Homecontroller@showIndex' );
Route::get('/home', 'Homecontroller@showIndex' );
Route::get('/index', 'Homecontroller@showIndex' );
//home
//login
Route::get('/login', 'Homecontroller@showLogin' );
//register
Route::get('/register', 'Homecontroller@showRegister' );
Route::get('/index', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});