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
Route::get('index','TintucController@index')->name('list');
Route::get('list','TintucController@list')->name('list');
Route::get('add','TintucController@create');
Route::post('add','TintucController@store');
Route::get('delete/{id}','TintucController@destroy')->name('destroy');
Route::get('edit/{id}','TintucController@edit')->name('edit');
Route::post('edit/{id}','TintucController@update')->name('update');

