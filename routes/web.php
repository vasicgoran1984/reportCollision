<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/getCity', 'App\Http\Controllers\CityController@index');
Route::get('startPost', 'App\Http\Controllers\AgreementController@index');
Route::get('startReport', 'App\Http\Controllers\PrequalificationController@index');
Route::get('information', 'App\Http\Controllers\InformationController@index')->name('information');
Route::get('toPrequalification', 'App\Http\Controllers\PrequalificationController@index')->name('backPrequalification');
Route::get('drivers', 'App\Http\Controllers\DriversController@index');
