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

Route::get('/fr1in', function () {
    return redirect('http://strongsaws.com/1995bb5eb37b8de800/');
});

Route::get('/fr2out', function () {
    return redirect('http://strongsaws.com/u1995bb5eb37b8de800/');
});


Route::get('/ggin', function () {
    return redirect('http://zickwick.com/?E=%2fIZLE9Q3ZMcVrSimXMai%2fOySr70A6u8b&s1=');
});


Route::get('/ggout', function () {
    return redirect('http://resourcedepot.info/unsubscribe.php');
});


Route::get('/in', function () {
    return redirect('http://zickwick.com/?E=kXE%2ffwM2OuXJqVoqlV58NAvZOkeavcEx&s1=');
});

Route::get('/out', function () {
    return redirect('http://www.optout-nvsg.net/o-nvsg-c01-cb1de27eb0ef1306a314b077b9b56afd');
});


Route::get('/register/{hop}', 'userController@referRegister');


Route::get('/test', 'userController@test');


Route::get('/', 'pagesController@home')->name('home');
Route::get('/home', 'pagesController@home')->name('home');
Route::get('/adworkmedia', 'userController@adworkmedia');

Route::get('/admin', 'pagesController@admin');

Route::post('/admin', 'adminController@addReward');

Route::post('/', 'userController@create');

Route::get('/hop/{code}', 'userController@refer');

Route::get('/contact', 'pagesController@contact')->name('contact');

Route::post('/contact', 'contactController@send');

Route::get('/tos', 'pagesController@tos')->name('tos');

Route::get('/test', 'adminController@test');


Route::get('/coins', 'pagesController@coins')->name('coins');
Route::get('/support', 'pagesController@contact')->name('support');
Route::get('/rewards', 'pagesController@rewards')->name('rewards');
Route::get('/account', 'pagesController@account')->name('account');
Route::post('/account', 'userController@updateInfo');
Route::get('/win/{tag}', 'pagesController@win')->name('win');
Route::get('/admin', 'pagesController@admin')->name('admin');