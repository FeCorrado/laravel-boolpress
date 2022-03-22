
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Auth::routes();


Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');
//Route::get('/posts', 'Admin\PostController@index')->name('post.index');

// Route::get('/post', 'Admin\PostController@index')->name('admin.posts.index');
// Route::get('/create', 'Admin\PostController@create')->name('admin.post.create');
// Route::post('/store', 'Admin\PostController@store')->name('admin.post.store');
// Route::get('/show', 'Admin\PostController@show')->name('admin.post.show');

//Route::resource("posts", "Admin\PostController")

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/posts', 'PostController');
});



Route::get("{any?}", function () {
    return view("home");
})->where("any", ".*");
