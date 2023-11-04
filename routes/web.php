<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DirectorioController;

use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio', [DirectorioController::class, 'index'])->name('directorio.inicio');

Route::get('/directorio/crear', [DirectorioController::class, 'create'])->name('directorio.crear');

Route::get('/directorio/buscar', [DirectorioController::class, 'buscar'])->name('directorio.buscar');

Route::get('/directorio/contactos/{codigo}', [DirectorioController::class, 'verContactos'])->name('directorio.contactos');

Route::get('/directorio/eliminar', [DirectorioController::class, 'eliminar'])->name('directorio.eliminar');

Route::post('/directorio/guardar', [DirectorioController::class, 'store'])->name('directorio.store');