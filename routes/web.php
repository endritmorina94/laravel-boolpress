<?php

use Illuminate\Support\Facades\Route;
use App\Post;

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

//Homepage
Route::get('/', 'HomeController@index')->name('home');

//Category page
Route::get('/category/{slug}', 'CategoryController@show')->name('category-page');

//Gestione della visualizzazione pubblica dei post
Route::get('/blog', 'PostController@index')->name('blog');
Route::get('/blog/{slug}', 'PostController@show')->name('blog-post');

//Route per la view con Vue
Route::get('/api-vue', 'PostController@vuePosts')->name('vue-posts');

//Gestione delle pagine tag
Route::get('/tag/{slug}', 'TagController@show')->name('tag-page');

//Admin routes
Route::prefix('admin')
    ->namespace('Admin')
    ->name('admin.')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
        Route::get('/category/', 'CategoryController@index')->name('category-page');

        Route::resource('/posts', 'PostController');
});
