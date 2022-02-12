<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\escuela;
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
Route::get('/array', function () {
    return view('08_array');
});


//Rutas para mostrar alumos
Route::get('/alumnos',[escuela::class,"lista"])->name('lista');
Route::get('/alumnos/detalle/{id}', [escuela::class,"detalle"])->name('detalle');

//Rutas para crear alumnos
Route::get('/alumnos/alta',[escuela::class,"alta"])->name('alta');

Route::post('/alumnos/store',[escuela::class,"store"])->name('store');

//Rutas para eliminar y editar
Route::get('/alumnos/editar/{id}', [escuela::class,"editar"])->name('editar');
Route::get('/show', [escuela::class,"show"])->name('mostrar');

Route::put('/alumnos/editaxd/{id}', [escuela::class,"salvar"])->name('salvar');


Route::delete('/alumnos/eliminar/{id}', [escuela::class,"eliminar"])->name('eliminar');


