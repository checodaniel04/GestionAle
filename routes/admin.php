<?php

use App\Http\Controllers\Admin\GestionesController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NoticiasController;
use App\Http\Controllers\Admin\NoticiasInternasController;
use App\Http\Controllers\Admin\PersonasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class, 'index'])->middleware('can:admin.index')->name('admin.index');
Route::resource('usuarios',UsuariosController::class)->names('admin.usuarios');
Route::resource('user',UserController::class)->names('admin.user');
Route::resource('noticias',NoticiasController::class)->names('admin.noticias');
Route::resource('noticiasinternas',NoticiasInternasController::class)->names('admin.noticiasinternas');
Route::resource('personas',PersonasController::class)->names('admin.personas');
Route::resource('gestiones',GestionesController::class)->names('admin.gestiones');
Route::resource('noticiasints',NoticiasInternasController::class)->names('admin.noticiasints');
Route::resource('gestions',GestionesController::class)->names('admin.gestions');
Route::resource('roles', RoleController::class)->names('admin.roles');



