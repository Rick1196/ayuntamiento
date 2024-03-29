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

Route::get('/cabildo','PersonasController@index')->name('app.cabildo');
Route::get('/prensa','NoticiasController@index')->name('app.prensa');
Route::view('/contacto','app.contacto')->name('app.contacto');
Route::get('/toluca','SitiosController@index');
Route::view('/transparencia_ipomex','app.transparencia')->name('app.transparencia');
Route::view('/transparencia_docs_publicos','app.docs_publicos')->name('app.docs_publicos');
Route::view('/transparencia_licitaciones','app.licitaciones')->name('app.licitaciones');
Route::view('/paseo_dominical','app.provs.carrera')->name('app.provs.carrera');
Route::view('/cartilla_militar','app.provs.cartilla')->name('app.provs.cartilla');
Route::view('/predial','app.provs.predial')->name('app.provs.predial');

Route::view('/dependencias','app.dependencias')->name('app.dependencias');
Route::get('/documentos_publicos','docs@publicos');
Route::view('/transparencia_activa','app.transparencia_activa')->name('tranparencia_activa');

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
    Route::post('docs_pub','docs@store');
    Route::get('docs_pub','docs@create');
    Route::view('/admNoticias','.users.admNoticias')->name('admin.noticias');
    Route::view('/admCabildo','.users.admCabildo')->name('admin.cabildo');
    Route::view('/admSitios','.users.admSitios')->name('admin.sitios');
});