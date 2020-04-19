<?php

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

Route::get('/', 'MoviesController@index')->name('home');



Route::get('/contact', 'PagesController@getContact')-> name('contact');

Route::get('/Movies', 'PagesController@getMovies')-> name('movies');

Route::get('/series', 'PagesController@getSeries')->name('series');

Route::get('/cartoons', 'PagesController@getCartoons')->name('cartoons');

Route::get('contact/messages', 'ContactController@getMessages')->name('get-messages');


Route::post('contact/submit',
    'ContactController@submit') -> name('contact-form-submit');


Auth::routes();

Route::get('/home', 'MoviesController@index')->name('home');

Route::get('/movie', 'MoviesController@index')->name('movie');



Route::prefix('admin')->group(function (){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
});


Route::get('/movies/{movie}', 'MoviesController@show')->name('movies.show');
