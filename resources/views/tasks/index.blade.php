<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
</head>
<body>
    <h1>Llista de tasques</h1>

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', $task->id) }}"><h2>{{ $task->title }}</h2></a>
        </div>
    @empty
        <p>No hi ha tasques.</p>
    @endforelse

</body>
</html>