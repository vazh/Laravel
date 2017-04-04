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


Route::get('files/{fileId}', 'FileServerController@serve')->name('files');
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('login', function () {
    return view('login');
})->name('login');
Route::get('report/{id}', function () {
    return view('report');
})->name('report');
Route::get('test', 'TestController@test')->name('test');
Route::get('logout', function () {
    return 'GOODBYE';
})->name('logout');
