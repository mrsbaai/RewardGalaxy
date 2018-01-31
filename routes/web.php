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



Auth::routes();


Route::get('/', 'pagesController@home')->name('home');
Route::get('/home', 'pagesController@home')->name('home');
Route::get('/adworkmedia', 'userController@adworkmedia');

Route::get('/hop/{code}', 'userController@refer');

Route::get('/contact', 'pagesController@contact')->name('contact');

Route::post('/contact', 'contactController@send');

Route::get('/tos', 'pagesController@tos')->name('tos');

Route::get('/test', 'pagesController@test');


Route::get('/coins', 'pagesController@coins')->name('coins');
Route::get('/support', 'pagesController@contact')->name('support');
Route::get('/rewards', 'pagesController@rewards')->name('rewards');
Route::get('/account', 'pagesController@account')->name('account');
Route::post('/account', 'userController@updateInfo');
Route::get('/win/{tag}', 'pagesController@win')->name('win');
Route::get('/admin', 'pagesController@admin')->name('admin');