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
    return view('home');
});

Auth::routes();

//Route acess

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/artistview', 'ArtistController@index')->name('artistview');
Route::get('/albumview', 'AlbumController@index')->name('albumview');
Route::get('/albumregister', 'AlbumController@register')->name('albumregister');
Route::get('/artistregister', 'ArtistController@register')->name('artistregister');

//Route register

Route::post('registerband' , 'ArtistController@store')->name('artistregisteraction');
Route::post('registeralbum', 'AlbumController@store')->name('albumregisteraction');
