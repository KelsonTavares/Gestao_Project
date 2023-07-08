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
    return view('tamplates.home');
})->name('home');

Route::get('/projecto-form', function () {
    return view('forms.form-project');
})->name('novo-projecto');


Route::get('/login', function () {
    return view('tamplates.login');
})->name('login');

Route::get('/reset-password', function () {
    return view('tamplates.change-password');
})->name('password');

Route::get('/registrar', function () {
    return view('tamplates.register');
})->name('register');