<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/ruta1', [App\Http\Controllers\ruta1Controller::class, 'ruta1'])->name('ruta1');
Route::get('/ruta2', [App\Http\Controllers\ruta2Controller::class, 'ruta2'])->name('ruta2');
Route::get('/ruta3', [App\Http\Controllers\ruta3Controller::class, 'ruta3'])->name('ruta3');
Route::get('/ruta4', [App\Http\Controllers\ruta4Controller::class, 'ruta4'])->name('ruta4');
Route::get('/ruta5', [App\Http\Controllers\ruta5Controller::class, 'ruta5'])->name('ruta5');