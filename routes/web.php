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

Route::get('/index', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/insert', function () {
    return view('insert');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/select', function () {
    return view('select');
});

Route::get('/update', function () {
    return view('update');
});