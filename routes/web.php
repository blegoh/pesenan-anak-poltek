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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/question/data','Admin\QuestionController@anyData')
    ->name('question.data');
Route::resource('/admin/question','Admin\QuestionController');

Route::get('/admin/page/data','Admin\PageController@anyData')
    ->name('page.data');
Route::resource('/admin/page','Admin\PageController');


Route::get('app','AppController@index');
Route::get('res','AppController@result');

Route::get('/page/{slug}','PageController@show');