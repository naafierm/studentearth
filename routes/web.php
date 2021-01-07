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
})->name('dashboard');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/sampah', function () {
    return view('sampah');
})->name('sampah');

Route::get('/hutan', function () {
    return view('hutan');
})->name('hutan');

Route::get('/air', function () {
    return view('air');
})->name('air');

Route::get('/donasi', function () {
    return view('donasi');
})->name('donasi');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/syarat', function () {
    return view('syarat');
})->name('syarat');

Route::get('/kebijakan', function () {
    return view('kebijakan');
})->name('kebijakan');

Route::get('/index', function () {
    return view('index');
})->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
