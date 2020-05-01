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

// トップページ
Route::get('/', function () {
    return view('index');
});

// 認証関係のルーティング
Auth::routes();

// ログインが必要なグループ
Route::middleware('auth', 'throttle:60,1')->group(function () {
    // ログイン後のトップページ
    Route::get('/home', 'UserController@index')->name('home');

    // User関連の処理グループ
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/list', 'UserController@list')->name('list');
        Route::get('/{id}', 'UserController@index')->name('home');
        Route::get('/{id}/following', 'UserController@following')->name('following');
        Route::get('/{id}/followers', 'UserController@followers')->name('followers');
        Route::get('/{followed_id}/follow', 'UserController@follow')->name('follow');
        Route::get('/{unfollowed_id}/unfollow', 'UserController@unfollow')->name('unfollow');
        Route::put('/{id}/update', 'UserController@update')->name('update');
    });

    // Micropost関連の処理グループ
    Route::prefix('micropost')->name('micropost.')->group(function () {
        Route::post('/create', 'MicropostController@create')->name('create');
        Route::put('/{micropost_id}/update', 'MicropostController@update')->name('update');
        Route::delete('/{micropost_id}/delete', 'MicropostController@delete')->name('delete');
    });
});
