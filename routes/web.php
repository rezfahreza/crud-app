<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('stoks', StokController::class);