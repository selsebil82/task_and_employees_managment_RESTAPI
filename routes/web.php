<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeController;


Auth::routes();
Route::get('/login', function () {
    // cette page ne sera accessible que si l'utilisateur est authentifié
})->middleware('auth');



Route::post('/authenticate', function () {
    $credentials = request(['email', 'password']);

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
})->name('authenticate');

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to('/');
});




Route::get('/taskinter', function () {
    return view('taskinter');
});
Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');
Route::get('/show', function () {
    return view('show');
})->name('show');


Route::get('/createemp', function () {
    return view('createemp');
})->name('createemp');

Route::get('/editemp', function () {
    return view('editemp');
})->name('editemp');

Route::get('/showemp', function () {
    return view('showemp');
})->name('showemp');



/*Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the task manager API']);
});*/
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name('tasks.show');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');


Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');

Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
