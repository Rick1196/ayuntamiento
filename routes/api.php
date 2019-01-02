<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getPosts', 'PostsController@getPosts');

Route::get('/get-posts/{filtro}', 'PostsController@getPosts')->name('get.posts');
Route::get('/get-tv', 'PostsController@getPosts')->name('get.tv');
Route::get('/get-conv', 'PostsController@getPosts')->name('get.conv');
Route::put('/des-post', 'PostsController@desactivar')->name('des-post');
Route::put('/act-post', 'PostsController@activar')->name('act-post');
Route::get('/secciones', 'PostsController@getSecciones')->name('secciones');

Route::delete('/deletePost/{id}', 'PostsController@delete')->name('deletePost');