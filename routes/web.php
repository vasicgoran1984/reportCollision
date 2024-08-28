<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/getCity', 'App\Http\Controllers\CityController@index');
Route::post('startPost', 'App\Http\Controllers\AgreementController@index');

