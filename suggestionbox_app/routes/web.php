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

Route::prefix('suggestions')->group(function () {
    Route::get('/', 'SuggestionController@index')->name('suggestions.index');
    Route::get('/create', 'SuggestionController@create')->name('suggestions.create');
    Route::post('/store', 'SuggestionController@store')->name('suggestions.store');
    Route::get('/{id}/edit', 'SuggestionController@edit')->name('suggestions.edit');
    Route::put('/{id}/update', 'SuggestionController@update')->name('suggestions.update');
    Route::delete('/{id}/delete', 'SuggestionController@delete')->name('suggestions.delete');
    Route::post('/upvote', 'SuggestionController@upvote')->name('suggestions.upvote');
    Route::delete('/{id}/downvote', 'SuggestionController@downVote')->name('suggestions.downvote');
});
