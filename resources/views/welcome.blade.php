@extends('layouts.app')

@section('title', 'Home')

@section('content')
        <!-- Cos de la pàgina -->
        <h1>Laravel</h1>
        <h2>tasca 1</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <!-- Variables renderitzades -->
        <h3>{{ $hola }}{{ $mon }}</h3>
@endsection