<?php

use App\User;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/profile', function () {
    $user = new User;
    $profile = $user->getProfile();
    return view('pages.profile', compact('profile'));
});

Route::get('/setting', function () {
    return view('pages.setting');
});

Route::get('/books', 'BookController@index');
Route::get('/books/create', 'BookController@create');
Route::get('/books/success', 'BookController@success');
Route::post('/books/store', 'BookController@store')->name('books.store');
