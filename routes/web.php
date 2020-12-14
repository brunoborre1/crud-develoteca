<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::resource('empleados', 'EmpleadosController')->middleware('auth');
Auth::routes(['register'=>false,'reset'=>false]);//desactivo que se puedan registrar usuarios y recuperar contraseñas

Route::get('/home', 'HomeController@index')->name('home');
