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
    return view('auth/login');
});

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
//ruta de acceso a el crud de proyectos de grados
Route::resource('proyectos',App\Http\Controllers\ProyectoController::class)->middleware('auth');
Route::resource('sustentacions',App\Http\Controllers\SustentacionController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
