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

<<<<<<< HEAD

Route::resource('users', 'UserController');

Route::get('user', function () {
    $user = \App\User::all();
    return view('user.index',compact('user'));
})->name('user.publicIndex');
=======
Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', 'UserController');
    Route::resource('houses', 'HouseController');
});
>>>>>>> 324a54641982521dc7c814ef71775064ae309929

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');