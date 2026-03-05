<!DOCTYPE html>
    <html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>Pàgina de pelicules!</h1>
        <h1> {{ $titol }} </h1>
        <h2> {{ $data }} </h2>
    </body>
</html>

@extends('layouts.app')

@section('title', 'Películes')

@section('content')
    <h1>Pàgina de pelicules!</h1>
    <h1> {{ $titol }} </h1>
    <h2> {{ $data }} </h2>
@endsection