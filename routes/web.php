<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\HorasController;
use App\Http\Controllers\HorarioController;

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


Route::get('/dashboard', [HorarioController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/asignaturas', [AsignaturasController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');
Route::get('/asignaturas/crear', [AsignaturasController::class, 'create'])->middleware(['auth', 'verified'])->name('asignaturas.create');
Route::post('/asignaturas/crear', [AsignaturasController::class, 'store'])->middleware(['auth', 'verified'])->name('asignaturas.store');
Route::get('/asignaturas/editar/{codAs}', [AsignaturasController::class, 'edit'])->middleware(['auth', 'verified'])->name('asignaturas.edit');
Route::put('/asignaturas/editar/{codAs}', [AsignaturasController::class, 'update'])->middleware(['auth', 'verified'])->name('asignaturas.update');
Route::get('/asignaturas/ver/{codAs}', [AsignaturasController::class, 'show'])->middleware(['auth', 'verified'])->name('asignaturas.show');
Route::get('/asignaturas/delete/{codAs}', [AsignaturasController::class, 'destroy'])->middleware(['auth', 'verified'])->name('asignaturas.destroy');

Route::get("/horas", [HorasController::class, 'index'])->middleware(['auth', 'verified'])->name('horas');
Route::get("/horas/crear", [HorasController::class, 'create'])->middleware(['auth', 'verified'])->name('horas.create');
Route::post("/horas/crear", [HorasController::class, 'store'])->middleware(['auth', 'verified'])->name('horas.store');
Route::get("/horas/ver/{diaH}/{horaH}", [HorasController::class, 'show'])->middleware(['auth', 'verified'])->name('horas.show');
Route::get("/horas/editar/{diaH}/{horaH}", [HorasController::class, 'edit'])->middleware(['auth', 'verified'])->name('horas.edit');
Route::put("/horas/editar/{diaH}/{horaH}", [HorasController::class, 'update'])->middleware(['auth', 'verified'])->name('horas.update');
Route::get("/horas/delete/{diaH}/{horaH}", [HorasController::class, 'destroy'])->middleware(['auth', 'verified'])->name('horas.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

require __DIR__.'/auth.php';
