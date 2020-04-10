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

Route::get('/', 'HomeController@index')->name('home');

Route::get('language/{locale}', function ($locale = 'id') {
    if (! in_array($locale, ['en', 'id'])) {
        abort(400);
    }
    
    cookie('language', $locale);

    return redirect()->route('home')->with('language', $locale)->cookie('language', $locale, 60);;
});