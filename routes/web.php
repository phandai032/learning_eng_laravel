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
    return 'home';
});
Route::get('/demo', function () {
    return 'dai';
});
Route::get('/demo/demo1', function () {
    return 'demo1';
});
Route::any('submit/{a}&{b}', function ($a,$b) {
    return $a.': '.$b;
});
Route::get('/controller/{a}/{b}', 'Homecontroller@show' );
Route::get('/hello', 'Homecontroller@hello' );