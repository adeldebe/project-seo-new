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
Route::group(['middleware' => 'auth'],function(){
	Route::get('/','BlogController@index');
	Route::get('/isi/{slug}', 'BlogController@isi_article')->name('isi');
	Route::get('/cari', 'BlogController@cari')->name('cari');

	// article
	Route::get('/article', 'ArticleController@index');
	Route::get('/article/create','ArticleController@create');
	Route::post('/article', 'ArticleController@store');
	Route::get('/article/{id}/edit', 'ArticleController@edit');
	Route::patch('/article/{id}', 'ArticleController@update');
	Route::get('/article/{id}/delete', 'ArticleController@delete');
	Route::get('/article/{id}', 'ArticleController@insertData')->name('inserData');
	Route::get('/statistic', 'StatisticController@statistic');

	// Profile
	Route::get('/user', 'UserController@show');
	Route::get('/user', 'UserController@index');
	Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
	Route::post('/user/update/{id}', 'UserController@update')->name('user.update');

	// DLL
	Route::get('/socmed', 'SocmedController@socmed');
	Route::get('/sharingbuttons', 'SocmedController@sharingbuttons');

	// komentar
	Route::get('/comments/tampil_hapus', 'CommentsController@tampil_hapus')->name('tampil_hapus');
	Route::get('/comments/restore/{id}', 'CommentsController@restore')->name('restore');
	Route::get('/comments/kill/{id}', 'CommentsController@kill')->name('kill');
	Route::get('/comments/{id}/delete', 'CommentsController@destroy');
	Route::get('/comments', 'CommentsController@index');
	Route::post('/comment', 'ArticleController@store_comment')->name('store_comment');

	// Kategori dan Tags
	Route::resource('/category', 'CategoryController');
	Route::resource('/tag', 'TagController');
});

