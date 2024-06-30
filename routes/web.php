<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\nom_controller;

Route::get('/', function () {
    return view('page/index');
});


Route::get('/', [nom_controller::class, 'index']);
Route::post('/insert_nom', [nom_controller::class, 'save']);