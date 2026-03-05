@extends('layouts.app')

@section('title', '404 - Pàgina')

@section('content')
    <h1>404 - Pàgina no trobada</h1>
    <p>La pàgina que estàs buscant no existeix.</p>
    <a href="{{ route('home') }}">Torna a l'inici</a>
@endsection