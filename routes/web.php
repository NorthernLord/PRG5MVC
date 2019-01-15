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

Route::post('posts/updateCheckbox{id}', ['as' => 'posts.updateCheckbox', 'uses' => 'PostsController@updateCheckbox']);

Route::resource('posts', 'PostsController');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/posts', 'PostsController@index');

Auth::routes();

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');
