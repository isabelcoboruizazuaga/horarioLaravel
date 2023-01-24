<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;

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

Route::get('/asignaturas', [AsignaturaController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');;

Route::get('/asignaturas/crear', [AsignaturaController::class, 'create']);
Route::post('/asignaturas/crear',  [AsignaturaController::class, 'store']);

Route::get('/asignaturas/ver/{id}', [AsignaturaController::class, 'show']);

Route::get('/asignaturas/editar/{id}', [AsignaturaController::class, 'edit']);
Route::put('/asignaturas/editar/{id}',  [AsignaturaController::class, 'update']);

Route::get('/asignaturas/eliminar/{id}',  [AsignaturaController::class, 'destroy']);


require __DIR__.'/auth.php';
