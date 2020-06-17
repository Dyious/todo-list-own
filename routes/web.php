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
    });
    Route::get('/list', 'ListController@show')->name('todoList.show');
});


Route::group(['prefix' => 'list', 'middleware' => 'auth'], function () {

    Route::post('/create', 'ListController@store')->name('login.create');
    Route::patch('/update', 'ListController@update')->name('login.update');
    Route::delete('/delete', 'ListController@destroy')->name('login.delete');
});