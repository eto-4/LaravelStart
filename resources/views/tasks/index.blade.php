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
            <h2><a href="">{{ $task->title }}</a></h2>
        </div>
    @empty
        <p>No hi ha tasques.</p>
    @endforelse

</body>
</html>