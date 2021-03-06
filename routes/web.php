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
    return view('home.index');
});

Auth::routes();

Route::resources([
    'costs'   => 'CostController',
    'sellers' => 'SellerController'
]);

Route::get('home', 'HomeController@index')->name('home');
Route::get('profile', 'UserController@profile')->name('profile');
Route::get('news', 'HomeController@news')->name('news');
Route::get('about', 'HomeController@about')->name('about');
Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('schedules', 'HomeController@schedule')->name('schedule');
