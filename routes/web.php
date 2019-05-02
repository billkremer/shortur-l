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

Route::get('/', function () {
    // return view('auth.login'); // opens app with login page
    return view('auth.register'); // opens app to registration page
});

Route::get('/logout', function () {
    // return redirect('/');
    return redirect('/login'); // sends logout specifically to login
});

Route::get('/t/{shorturl}', 'UrlController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::post('/newUrl', 'HomeController@create')->name('newUrl');

Route::any('/{x}', function () {
	return redirect('/home'); // if someone tries something else it redirects to /home.  if not authenticated, Laravel sends to /login.
}); 
