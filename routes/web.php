<?php

use App\Http\Controllers\QuestionProcessing;
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
    return view('welcome');
});
Route::get('/landing_page', function () {
    return view('colaboracion');
});
//................................................................................
//Pruebas Inicio
// Eliminar al finalizar
//................................................................................
Route::resource('questionProcessing', QuestionProcessing::class);
Route::get('/resultado', function () {
    return view('questionTest.indexResultados');
});
//................................................................................
//Pruebas Fin
//................................................................................
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
