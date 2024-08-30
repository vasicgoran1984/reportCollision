<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getCity', 'App\Http\Controllers\CityController@index');
Route::get('startPost', 'App\Http\Controllers\AgreementController@index');
Route::get('startReport', 'App\Http\Controllers\PrequalificationController@index')->name('startReport');
Route::get('information', 'App\Http\Controllers\InformationController@index');

