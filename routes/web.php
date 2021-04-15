<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::get('/register','Auth\LoginController@register');
Route::post('/register','Auth\LoginController@postregister')->name('register');
Route::get('/login','Auth\LoginController@login')->name('login');
Route::post('/postlogin','Auth\LoginController@postlogin');
Route::get('/logout','Auth\LoginController@logout');

// Route::get('/email/verify', function () {
//     return view('auth.verify-email');
// })->middleware('auth')->name('verification.notice');

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/');
// })->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/','BlogController@index');
Route::get('/isi/{slug}', 'BlogController@isi_article')->name('isi');
Route::post('/insertData', 'BlogController@insertData')->name('insertData');

Route::get('/article', 'ArticleController@index');
Route::get('/article/create','ArticleController@create');
Route::post('/article', 'ArticleController@store');
Route::get('/article/{id}/edit', 'ArticleController@edit');
Route::patch('/article/{id}', 'ArticleController@update');
Route::get('/article/{id}/delete', 'ArticleController@delete');
Route::get('/user', 'UserController@show');
Route::get('/user', 'UserController@index');
Route::get('/socmed', 'SocmedController@socmed');
Route::get('/sharingbuttons', 'SocmedController@sharingbuttons');
Route::get('/comments', 'CommentsController@index');

Route::resource('/category', 'CategoryController');
Route::resource('/tag', 'TagController');



