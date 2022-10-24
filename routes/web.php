<?php

use App\Http\Controllers\Auth\PerfilController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\PreguntaController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/preguntas/refreshpunto', [App\Http\Controllers\HomeController::class, 'refresh'])->name('refresh');


Route::get('/preguntas', [App\Http\Controllers\PreguntaController::class, 'index'])->name('index')->middleware('auth');
Route::get('/preguntas/{id}', [App\Http\Controllers\PreguntaController::class, 'update'])->name('update')->middleware('auth');
Route::put('/preguntas', [App\Http\Controllers\PreguntaController::class, 'store'])->name('store')->middleware('auth');


Route::get('/perfil', [PerfilController::class, 'editPerfil'])->name('editPerfil')->middleware('auth');
Route::post('perfil/{id}', [PerfilController::class, 'updatePerfil'])->name('updatePerfil')->middleware('auth');