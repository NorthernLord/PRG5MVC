<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\RegisterController;

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

// Pages Routes
Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/portfolio', 'PagesController@portfolio');

// Posts Routes
Route::get('/posts', 'PostsController@index');
Route::resource('posts', 'PostsController');
Route::post('posts/updateCheckbox{id}', ['as' => 'posts.updateCheckbox', 'uses' => 'PostsController@updateCheckbox']);

// Dashboard Routes
Route::get('/dashboard', 'DashboardController@index');

// Categories Routes
Route::resource('categories', 'CategoryController', ['except' => ['create']]);
Route::get('/category/{category}', [
    'uses' => 'PostsController@category',
    'as' => 'category'
]);

// Authentication Routes
Auth::routes([
    'register' => true,
    'verify' => false
]);
