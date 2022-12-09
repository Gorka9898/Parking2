<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorCoches;

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
    return view('inicio');
});

Route::post('/', [controladorCoches::class, 'store'])->name('anadir_coche');


Route::get('/', [controladorCoches::class, 'index'])->name('mostrar_coche');


Route::delete('/lista/{id}', [controladorCoches::class, 'delete'])->name('borrar_coche');


Route::get('/crear', [controladorCoches::class, 'crear_coches_formulario'])->name('Nuevo_coche');

Route::get('/lista', [controladorCoches::class, 'lista'])->name('Lista_coches');

Route::get('/buscador', [controladorCoches::class, 'mostrar_formulario'])->name('Mostrar_formulario_buscar');

Route::post('/buscador', [controladorCoches::class, 'buscador'])->name('Buscar_coche');

Route::get('/asignar', [controladorCoches::class, 'asignar_usuario'])->name('Asignar_usuario');

Route::post('/valUser', [controladorCoches::class, 'validar_usuario'])->name('validar_usuario');

Route::get('/devUser', [controladorCoches::class, 'devolver_usuario'])->name('devolver_usuario');


Route::get('/asignar2', [controladorCoches::class, 'asignar'])->name('Asignar');

Route::get('/valAsign', [controladorCoches::class, 'validar_asignacion'])->name('Validar_asignacion');





Route::post('/asignar2/crear', [controladorCoches::class, 'coche_y_usuario'])->name('Coche_y_usuario');







