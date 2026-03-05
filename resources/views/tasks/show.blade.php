@extends('layouts.app')

@section('title', 'Tasca')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif
    <p>Completada: {{ $task->completed ? 'Sí' : 'No' }}</p>
    <p>Creada: {{ $task->created_at }}</p>
@endsection