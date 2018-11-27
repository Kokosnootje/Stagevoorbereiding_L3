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
Route::group(['middleware' => ['auth']], function () {
    Route::resource('houses', 'HouseController');

    // Points views
    Route::get('points/{house}', 'PointController@add')->name('points.add');
    Route::post('points/{house}', 'PointController@store')->name('points.store');
    Route::get('score', 'PointController@index')->name('points.index');

    Route::group(['middleware' => ['role:admin']], function() {
        Route::resource('logbook', 'LogbookController');
        Route::resource('users', 'UserController');
    });
});


// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');
