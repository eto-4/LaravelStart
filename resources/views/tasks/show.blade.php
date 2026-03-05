<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>{{ $task->title }}</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif
    <p>Completada: {{ $task->completed ? 'Sí' : 'No' }}</p>
    <p>Creada: {{ $task->created_at }}</p>
</body>
</html>