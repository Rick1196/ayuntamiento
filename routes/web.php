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

Route::get('/','PostsController@inicio')->name('welcome');

Route::view('/cabildo','app.cabildo');
Route::get('/prensa','NoticiasController@index')->name('app.prensa');
Route::view('/contacto','app.contacto');
Route::view('/toluca','app.toluca');
Route::view('/transparencia','app.transparencia')->name('app.transparencia');
Route::view('/dependencias','app.dependencias')->name('app.dependencias');

Route::view('/tramites-servicios','app.tramites')->name('tramites.servicios');
Route::view('/gestion-municipal','app.gestiones')->name('gestion.municipal');
Route::view('/login','auth.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/registro', 'Auth\RegisterController@index')->name('registro');
    Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
    Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
    Route::get('image-get', 'ImageUploadController@getImages')->name('image.get');
    Route::post('publicacion-up', 'PostsController@createPost')->name('publicacion.up');
    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('/admin-posts', 'PostsController@admin')->name('admin.posts');
    Route::get('/administracion', 'UsersController@admin')->name('administracion');
    Route::get('file','FileController@create');
    Route::post('file','FileController@store');
    Route::view('/admNoticias','.users.admNoticias')->name('admin.noticias');
});