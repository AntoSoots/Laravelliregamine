<?php

use Illuminate\Support\Facades\Route;

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
Route::get('users', 'Auth\RegisterController@index');

Route::get('edit-records','HomeUpdateController@index');
Route::get('edit/{id}', 'HomeUpdateController@show');
Route::post('edit/{id}','HomeUpdateController@edit')->name('edit');
Route::post('delete/{id}','HomeUpdateController@delete')->name('delete');
