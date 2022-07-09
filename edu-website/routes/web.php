<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CursoController;

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

Route::post('/registro', [RegistroController::class, 'store']);

Route::get('/cursos', [CursoController::class, 'index']);

Route::get('/curso/{id}', [CursoController::class, 'show']);

Route::post('/cadastro', [CursoController::class, 'store']);

Route::delete('/curso/{curso}', [CursoController::class, 'destroy']);

Route::get('/matriz', [CursoController::class, 'relatorio']);

Route::get('/confirma', function () {
    return view('confirma');
});

Route::get('/painel', function () {
    return view('painel');
});

Route::get('/inscritos', function () {
    return view('inscritos');
});

Route::get('/login', function () {
    return view('login');
});
