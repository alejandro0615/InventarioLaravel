<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('proveedores', App\Http\Controllers\ProveedorController::class);