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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/korepetycje', 'HomeController@korepetycje')->name('korepetycje');
Route::get('/kurs-maturalny', 'HomeController@kursMaturalny')->name('kurs-maturalny');
Route::get('/matematyka-dla-studentow', 'HomeController@matematyka')->name('matematyka');
Route::get('/opinie', 'HomeController@opinie')->name('opinie');
Route::get('/cennik', 'HomeController@cennik')->name('cennik');
Route::get('/kontakt', 'HomeController@kontakt')->name('kontakt');
Route::post('/send', 'HomeController@send');
