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
    return view('welcome');
});
/*Route::get('/video', function () {
    return view('video');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/picture', 'PictureController@index')->name('picture');
Route::get('/video', 'VideoController@index')->name('video');
