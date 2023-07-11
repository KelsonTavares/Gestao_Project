<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectoController;
use App\Http\Controllers\taskController;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Project;
use App\Models\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('tamplates.login');
})->name('login');

Route::get('/blank', function () {
    return view('tamplates.blank');
})->name('blank');

Route::get('/home', function () {
    $projecto = Project::all();
    $task = Task::all();
    #$projectTeam = ProjectTeam::all();
    return view('tamplates.home', compact('projecto', 'task',));
})->name('home');

Route::get('/project-details', function () {
    return view('tamplates.project-details');
})->name('project-details');

Route::get('/tasks-details', function () {
    return view('tamplates.tasks-details');
})->name('tasks-details');

Route::get('/team-details', function () {
    return view('tamplates.team-details');
})->name('team-details');

Route::get('/projecto-form', function () {
    $user = User::all();
    $tenant = Tenant::all();
    $projecto = Project::all();
    $task = Task::all();
    return view('forms.form-project', compact('user', 'tenant', 'projecto', 'task'));
})->name('novo-projecto');

Route::get('/projecto-form/create', [projectoController::class, 'create'])->name('novo-projecto');
Route::post('/', [projectoController::class, 'store'])->name('project-store');
Route::get('projecto/{id}/edit', [projectoController::class, 'edit'])->name('form-edit');
Route::put('projecto/{id}', [projectoController::class, 'update'])->name('projecto-update');
Route::delete('projecto/{id}/deletar', [projectoController::class, 'destroy'])->name('projecto-delete');

Route::get('/projecto-form/create', [taskController::class, 'create'])->name('nova-task');
Route::post('/store', [taskController::class, 'store'])->name('task-store');
Route::get('task/{id}/edit', [taskController::class, 'edit'])->name('task-edit');
Route::put('task/{id}', [taskController::class, 'update'])->name('task-update');
Route::delete('task/{id}/deletar', [taskController::class, 'destroy'])->name('task-delete');

Route::get('/reset-password', function () {
    return view('tamplates.change-password');
})->name('password');

Route::get('/registrar', function () {
    return view('tamplates.register');
})->name('register');

Route::get('/locatorio', function () {
    return view('tamplates.locatorio');
})->name('locatorio');
