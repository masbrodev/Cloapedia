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

// Route::get('/', function () {
//     return view('pages.home');
// });

Route::get('/single.html', function () {
    return view('pages.detail');
});

Route::get('/c', function () {
    return view('pages.contoh');
});

Route::get('/index.html', 'BeritaController@index');
Route::get('/', 'BeritaController@index');
Route::get('/berita/{path}', 'BeritaController@showBerita');
