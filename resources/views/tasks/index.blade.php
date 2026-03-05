@extends('layouts.app')

@section('title', 'Llista de tasques')

@section('content')
    <h1>Llista de tasques</h1>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', $task->id) }}">{{ $task->title }}</a>
        </div>
    @empty
        <p>No hi ha tasques.</p>
    @endforelse
@endsection