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

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/booking', 'BookingController@index')->name('booking');

Route::get('/booking/tambah', 'BookingController@tambah');

Route::post('/booking/store', 'BookingController@store');

Route::get('/booking/edit/{id}', 'BookingController@edit');

Route::post('/booking/update/{id}', 'BookingController@update');

Route::get('/booking/delete/{id}', 'BookingController@delete');