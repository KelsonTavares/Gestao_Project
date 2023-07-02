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
    return view('tamplates.base-layoute');
})->name('home');

Route::get('/progest', function () {
    return view('tamplates.base-layoute');
});

Route::get('/projecto-form', function () {
    return view('forms.projects-form');
})->name('novo-projecto');
