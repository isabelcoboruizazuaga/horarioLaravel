<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\HoraController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*Asignaturas*/ 
Route::get('/asignaturas', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');;

Route::get('/asignaturas/crear', [AsignaturaController::class, 'create']);
Route::post('/asignaturas/crear',  [AsignaturaController::class, 'store']);

Route::get('/asignaturas/ver/{id}', [AsignaturaController::class, 'show']);

Route::get('/asignaturas/editar/{id}', [AsignaturaController::class, 'edit']);
Route::put('/asignaturas/editar/{id}',  [AsignaturaController::class, 'update']);

Route::get('/asignaturas/eliminar/{id}',  [AsignaturaController::class, 'destroy']);


/*Horario*/ 
Route::get('/horario', [HoraController::class, 'index'])->middleware(['auth', 'verified'])->name('horario');


/*Horas*/ 
Route::get('/horas', [HoraController::class, 'indexLista'])->middleware(['auth', 'verified'])->name('horas');

Route::get('/horas/crear', [HoraController::class, 'create']);
Route::post('/horas/crear',  [HoraController::class, 'store']);


Route::get('/horas/editar/{{$pk}}', [HoraController::class, 'edit']);
Route::put('/horas/editar/{{$pk}}',  [HoraController::class, 'update']);


require __DIR__.'/auth.php';
