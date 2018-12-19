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

Route::resource('books', 'BookController')->middleware('auth');

// Route::get('/books/invoice', function () {
//     return view('books.pdf');
// });

Route::get('/pdf/file', 'BookController@redir')->name('redir');

Route::get('/pdf/docs/', 'BookController@pdf')->name('pdf');

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
