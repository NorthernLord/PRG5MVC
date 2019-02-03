<?php

use App\Http\Controllers\PostsController;

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

// Route::get('/users/{id}/{name}', function($id, $name) {
//     return 'This is user '.$id.'-'.$name;
// });

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/portfolio', 'PagesController@portfolio');

Route::get('/posts', 'PostsController@index');
Route::resource('posts', 'PostsController');
Route::post('posts/updateCheckbox{id}', ['as' => 'posts.updateCheckbox', 'uses' => 'PostsController@updateCheckbox']);

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();