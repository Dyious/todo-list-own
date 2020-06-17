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

Route::group(['prefix' => '/'], function () {
    Route::get('', function () {
        return view('page.homepage');
    })->name('homepage');

    Route::group(['prefix' => 'register'], function () {
        Route::get('/', function () {
            return view('page.register');
        })->name('register.show');
        Route::post('/create', 'AuthController@register')->name('register.create');
    });

    Route::group(['prefix' => 'login'], function () {
        Route::get('/', function () {
            return view('page.login');
        })->name('login.show');
        Route::post('/login', 'AuthController@login')->name('login');
        Route::get('/logout', 'AuthController@logout')->name('logout');
    });
    Route::get('/list', 'ListController@show')->name('todoList.show');
});


Route::group(['prefix' => 'list', 'middleware' => 'auth'], function () {
    Route::post('/create', 'ListController@store')->name('list.create');
    Route::patch('/update', 'ListController@update')->name('list.update');
    Route::patch('/update/finish', 'ListController@updateFinish')->name('list.update.finish');
    Route::delete('/delete', 'ListController@destroy')->name('list.delete');
});