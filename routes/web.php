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
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'pages'],function (){

 Route::get('show','CrudController@show');
 Route::get('blakn','CrudController@blakn');
 Route::get('register','CrudController@register');
 Route::get('buttons','CrudController@buttons');
 Route::get('cards','CrudController@cards');
 Route::get('charts','CrudController@charts');
 Route::get('forgot-password','CrudController@password');
 Route::get('index','CrudController@index');
 Route::get('login','LoginController@login')->middleware('Login');
 Route::get('tables','CrudController@tables');
 Route::get('utilities-animation','CrudController@animation');
 Route::get('utilities-border','CrudController@border');
 Route::get('utilities-color','CrudController@color');
 Route::get('utilities-other.','CrudController@other.');

 });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
