<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/chat', 'App\Http\Controllers\HomeController@chat')->name('chat');
    Route::get('/reward', 'App\Http\Controllers\HomeController@reward')->name('reward');
    Route::get('/task', 'App\Http\Controllers\HomeController@task')->name('task');

    Route::get('manager', ['as' => 'department.manager', 'uses' => 'App\Http\Controllers\UserController@manager']);
    Route::get('designer', ['as' => 'department.designer', 'uses' => 'App\Http\Controllers\UserController@designer']);
    Route::get('developer', ['as' => 'department.developer', 'uses' => 'App\Http\Controllers\UserController@developer']);

    //Route::get('department/manager', 'App\Http\Controllers\UserController@manager')->name('manager');
    //Route::get('department/designer', 'App\Http\Controllers\UserController@designer')->name('designer');
    //Route::get('department/developer', 'App\Http\Controllers\UserController@developer')->name('developer');

});
