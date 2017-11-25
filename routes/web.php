<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('reemplazar', function () {
    ///return Reemplazar::buscarReemplazar();
    $f_origen = 'C:/Users/Bloo/xampp/htdocs/buscarReemplazar/app/f_origen/en.json';
    $f_destino = 'C:/Users/Bloo/xampp/htdocs/buscarReemplazar/app/f_destino/en.json';
    return Reemplazar::buscarReemplazar($f_origen,$f_destino);
});
