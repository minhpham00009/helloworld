<?php

use PhamDucMinh11111111\HelloWorld\Http\Controllers\HelloWorldController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'PhamDucMinh11111111\HelloWorld\Http\Controllers'], function () {
   Route::get('hello-world', [HelloWorldController::class, 'index']);
});
