<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function () {
    return ('welcome');
});

Route::get('/productos', function () {
    return ('pagina de productos');
});
Route::get('productos/{prod}', function ($prod) {
    return ("pagina de $prod");
});
Route::get('productos/pantalon', function () {
    return ('pagina de pantalon');
});
Route::get('productos/buzo', function () {
    return ('pagina de buzo');
});
