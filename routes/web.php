<?php

// Tasca 1 (Primers passos)
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

// Tasca 2 (Plantilles Blade)
class Task
{
  public function __construct(
    public int $id,
    public string $title,
    public string $description,
    public ?string $long_description,
    public bool $completed,
    public string $created_at,
    public string $updated_at
  ) {
  }
}

$tasks = [
  new Task(
    1,
    'Buy groceries',
    'Task 1 description',
    'Task 1 long description',
    false,
    '2023-03-01 12:00:00',
    '2023-03-01 12:00:00'
  ),
  new Task(
    2,
    'Sell old stuff',
    'Task 2 description',
    null,
    false,
    '2023-03-02 12:00:00',
    '2023-03-02 12:00:00'
  ),
  new Task(
    3,
    'Learn programming',
    'Task 3 description',
    'Task 3 long description',
    true,
    '2023-03-03 12:00:00',
    '2023-03-03 12:00:00'
  ),
  new Task(
    4,
    'Take dogs for a walk',
    'Task 4 description',
    null,
    false,
    '2023-03-04 12:00:00',
    '2023-03-04 12:00:00'
  ),
];

Route::get(
    '/tasks', 
    function() use ($tasks) {
    return view('tasks.index', ['tasks' => $tasks]);
})->name('tasks.index');

Route::get(
    '/tasks/{id}',
    function ($id) use ($tasks) {
        $task = collect($tasks)->firstWhere('id', $id);

        if (!$tasks) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return view('tasks.show', ['task' => $task]);
    })->name('tasks.show');