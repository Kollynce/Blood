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

Route::get('/help/faq', function () {
    return view('help.faq');
});

Route::get('/users/donors', function () {
    return view('users.donors');
});

Route::get('/help/support', function () {
    return view('help.support');
});

Route::resource('support','SupportController');
Route::resource('donor','DonorController');
Route::get('/home', 'HomeController@index')->name('home');
