<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $hola = "Hola, ";
    $mon = "món!";
    return view('welcome', compact('hola', 'mon'));
});
Route::get('/pelicula', function() {
    return view('pelicula');
});
