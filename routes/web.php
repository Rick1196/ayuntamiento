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
Route::view('/login','auth.login');
Route::get('/registro', 'Auth\RegisterController@index')->name('registro');
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');
Route::get('image-get', 'ImageUploadController@getImages')->name('image.get');
Route::post('publicacion-up', 'PostsController@createPost')->name('publicacion.up');
Route::get('/posts', 'PostsController@index')->name('posts');
Route::get('/admin-posts', 'PostsController@admin')->name('admin.posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
