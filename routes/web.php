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
});

Route::resource('dashboard','Cdashboard');

Route::resource('informasi','Cinformasi');

Route::resource('diagram','Cdiagram');

Route::get('/login', 'Clogin@login');
Route::post('/loginPost', 'Clogin@loginPost');
Route::get('/logout', 'Clogin@logout');	

Route::resource('admin','Clogin');
Route::get('/inputadmin','Clogin@create');
