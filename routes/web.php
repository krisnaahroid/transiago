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

Route::get('/', 'PageController@getHome')->name('home');
//
// Route::get('/blog', 'PageController@getBlog')->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');
Route::get('/blog', 'PageController@getBlog')->name('blog.index');
Route::get('/blog/category/{category_id}', 'PageController@getKategori')->name('blog.category');
Route::resource('post', 'PostController');
Route::post('post', 'PostController@store')->name('post.store.create');
// Route::resource('blog', 'BlogController');
Route::get('/blog/{slug}', ['as' => 'blog.single', 'uses' => 'PageController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::resource('category', 'CategoryController');
Route::resource('tag', 'TagController', ['except' => 'create']);
Route::post('post/service', 'SerController@send')->name('post.service.post');
Route::get('/service/{slug}', 'PageController@getService')->name('show.service')->where('slug', '[\w\d\-\_]+');
