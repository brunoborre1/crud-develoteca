<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/empleados', function () {
    return view('empleados.index');
});

Route::get('/empleados/create', function () {
    return view('empleados.create');
});
