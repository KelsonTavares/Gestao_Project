<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectoController;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Project;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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


Auth::routes();
Route::get('/home', [AdminController::class, 'home']);
Route::resource('ies', AdminController::class);

Route::get('/login', function () {
    return view('tamplates.login');
})->name('login');

Route::get('/', function () {
    return view('tamplates.blank');
})->name('blank');

Route::get('/home', function () {
    $projecto = Project::all();
    return view('tamplates.home', ['projecto'=>$projecto]);
})->name('home');

// Route::get('/project-details', function () {
//     return view('tamplates.project-details');
// })->name('project-details');

// Route::get('/tasks-details', function () {
//     return view('tamplates.tasks-details');
// })->name('tasks-details');

// Route::get('/team-details', function () {
//     return view('tamplates.team-details');
// })->name('team-details');


Route::get('/projecto-form', function () {
    $user = User::all();
    $tenant = Tenant::all();
    return view('forms.form-project', ['user'=>$user, 'tenant'=>$tenant]);
})->name('novo-projecto');

Route::get('/projecto-form/create', [projectoController::class, 'create'])->name('novo-projecto');
Route::post('/', [projectoController::class, 'store'])->name('project-store');
Route::get('projecto/{id}/edit', [projectoController::class, 'edit'])->name('form-edit');
Route::put('projecto/{id}', [projectoController::class, 'update'])->name('projecto-update');
Route::delete('projecto/{id}/deletar', [projectoController::class, 'destroy'])->name('projecto-delete');

Route::get('/reset-password', function () {
    return view('tamplates.change-password');
})->name('password');


// Route::get('/registrar', function () {
//     return view('vendor.adminlte.auth.register');
// })->name('register');

// Route::get('/locatorio', function () {
//     return view('tamplates.locatorio');
// })->name('locatorio');

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Auth::routes();
