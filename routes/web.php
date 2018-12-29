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

Route::view('/cabildo','app.cabildo');
Route::view('/prensa','app.prensa');
Route::view('/contacto','app.contacto');
Route::view('/toluca','app.toluca');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
