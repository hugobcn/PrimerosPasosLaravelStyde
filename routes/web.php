<?php

use Illuminate\Support\Facades\Route;

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
    return view('notes');
});

// /notas
Route::get('notas', function () {
    return view('notes');
});

Route::get('notas/crear', function () {
    return 'aqui podrmso ver formulario notas';
});

Route::get('notas/editar', function () {
    return 'aqui podrmso ver formulario notas'.$_GET['id'];
});

Route::get('notas/{id}/editar', function ($id) {
    return 'Aquí podremos editar la nota: '.$id;
});

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos los detalles de la nota: '.$id;
});
//solo numerio  de solo esta ruta
/*
Route::get('notas/{id}/editar', function ($id) {
    return 'Aquí podremos editar la nota: '.$id;
})->where('id', '[0-9]+');   // o ->where('id', '\d+')
 */