<?php

use App\Http\Controllers\AnggotaEkslControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkskulControllers;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('eksl', EkskulControllers::class);
Route::resource('angt', AnggotaEkslControllers::class);