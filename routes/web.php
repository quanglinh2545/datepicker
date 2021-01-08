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
Route::resource('/events','App\Http\Controllers\EventController');
Route::get('/addeventurl','App\Http\Controllers\EventController@display');
Route::post('store',[
	'as' =>'store',
	'uses' => 'App\Http\Controllers\EventController@store'
]);
Route::get('/displaydata','App\Http\Controllers\EventController@show');
Route::get('/deleteevent','App\Http\Controllers\EventController@show');
Route::get('destroy/{id}','App\Http\Controllers\EventController@destroy')->name('destroy');
Route::get('/home','App\Http\Controllers\EventController@index')->name('back');

