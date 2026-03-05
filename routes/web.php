<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $hola = "Hola, ";
    $mon = "món!";
    return view('welcome', compact('hola', 'mon'));
});
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
]);