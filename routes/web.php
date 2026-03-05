<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $hola = "Hola, ";
    $mon = "món!";
    return view('welcome', compact('hola', 'mon'));
})->name('home');
Route::get(
    '/pelicula/{titol?}/{data?}', 
    function (
        $titol = "No has posat cap títol", 
        $data = null
    ) {
    if ($data === null) {
        $data = date('d/m/y');
    }
    return view('pelicula', compact('titol', 'data'));
})->where([
    'titol' => '[a-zA-Z ]+',
    'data'   => '[0-9]{4}'
])->name('pelicula');

// Rutes amb Restricció global
Route::get(
    '/codi-postal/{codi_postal}', 
    function($codi_postal) {
        return "Ruta 1 - Codi postal: " . $codi_postal;
    });