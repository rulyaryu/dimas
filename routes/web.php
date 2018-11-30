<?php

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
    return view('master');
});

Route::get('/main', function () {
    return view('main', ['title' => 'Main']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/info', function () {
    return view('info', ['title' => 'Info']);
});