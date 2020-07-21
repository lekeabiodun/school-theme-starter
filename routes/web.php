<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@index')->name('home');
Route::get('/home', 'SiteController@index');
Route::get('/about', 'SiteController@about')->name('about');
Route::get('/contact', 'SiteController@contact')->name('contact');
Route::post('/contact', 'SiteController@contactUs')->name('contactUs');
Route::post('/contact', 'SiteController@contactUs');
Route::get('/events', 'SiteController@events')->name('events');
