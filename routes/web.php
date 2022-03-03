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
    $array_link_header = config('header-links');
    $array_fumetti = config('comics');
    return view('app',['link'=>$array_link_header],['fumetti'=>$array_fumetti]);
});