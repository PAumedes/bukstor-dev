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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::middleware('auth')->group(function() {
    Route::resource('/authors', 'AuthorController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/books', 'BookController');
});

Route::get('/books/search', 'LiveSearch@index');