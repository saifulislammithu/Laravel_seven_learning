<?php

//use GuzzleHttp\Psr7\Request;

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/todos','TodoController@index');
Route::get('/todos/create','TodoController@create');
Route::get('/todos/edit','TodoController@edit');
Route::post('/todos/create','TodoController@store');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user','UserController@index');

Auth::Routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/profile','UserController@upload_profile_image');
