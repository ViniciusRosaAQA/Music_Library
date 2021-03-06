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
Route::get('/editartist', 'ArtistController@editview')->name('editartist');
Route::get('/editalbum', 'AlbumController@editview')->name('editalbum');
Route::get('/deleteartist', 'ArtistController@deleteview')->name('deleteartist');
Route::get('/deletealbum', 'AlbumController@deleteview')->name('deletealbum');

//Route manage

Route::get('/manage', 'AdminController@index')->name('manage');
Route::get('/viewuser', 'AdminController@viewuser')->name('viewuser');
Route::post('/useract', 'AdminController@useraction')->name('useraction');
Route::post('/userupdateinfo', 'AdminController@updateuser')->name('updateuseraction');




//Route register

Route::post('registerband' , 'ArtistController@store')->name('artistregisteraction');
Route::post('registeralbum', 'AlbumController@store')->name('albumregisteraction');

//Route edit

Route::post('editartistupdate', 'ArtistController@editupdate')->name('artisteditaction');
Route::post('editalbumupdate', 'AlbumController@editupdate')->name('albumeditaction');

//Route delete

Route::post('deleteartistp', 'ArtistController@deleteartist')->name('deleteartistaction');
Route::post('deletealbump', 'AlbumController@deletealbum')->name('deletealbumaction');

//Route view

Route::post('/viewinfoartist', 'ArtistController@artistinfo')->name('viewinfoartist');
Route::post('/viewinfoalbum','AlbumController@albuminfo')->name('viewinfoalbum');