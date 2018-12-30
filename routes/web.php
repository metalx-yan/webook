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

// Route::get('/pdf/file', 'BookController@redir')->name('redir');

Route::get('/pdf/docs/', 'BookController@pdf')->name('pdf');

Route::get('/', function () {

	$category = App\Category::all();

    return view('welcome')->with('category', $category);
})->middleware('auth');

Route::get('/ajax-subcat', function() {
	$cat_id = Illuminate\Support\Facades\Input::get('cat_id');

    $subcategories = App\SubCategory::where('category_id', $cat_id)->get();

    return Response::json($subcategories);

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
