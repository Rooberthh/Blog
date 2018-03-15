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

// Post Routes
Route::get('/home', 'PostController@index');

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/posts/{post}/edit', 'PostController@edit');

Route::patch('/posts/{post}/edit', 'PostController@update');

Route::delete('/posts/{post}', 'PostController@destroy');

Route::get('/posts/tags/{tag}', 'TagController@index');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');


//TAGS

Route::get('/tags/create', 'TagController@create');

Route::post('/tags', 'TagController@store');


 //Register and Login Routes
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');


Route::get('/login', 'SessionController@create');

Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');


//User Routes

Route::get('/users', 'userController@show');

Route::get('/users/{user_id}', 'ProfileController@show');

Route::get('/users/{user_id}/edit', 'ProfileController@edit');

Route::patch('/users/{user_id}/update', 'ProfileController@update');

Route::get('/users/{user_id}/posts', 'ProfileController@showPosts');

Route::post('/search', 'SearchController@index');