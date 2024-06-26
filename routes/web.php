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

//新規登録
Route::get('signup','Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup','Auth\RegisterController@register')->name('signup.post');

//トップページの投稿表示
Route::get('/', 'PostsController@index');

//ログイン機能
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');

//ログアウト機能
Route::get('logout','Auth\LoginController@logout')->name('logout');

//ユーザー
Route::prefix('users')->group(function (){
    Route::get('{id}','UsersController@show')->name('user.show');
});
