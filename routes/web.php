<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostindexController;
use Illuminate\Support\Facades\Route;




Route::get('', [PostindexController::class,'index'])->name('welcome');
Route::get('post/{post}', [PostController::class,'show'])->name('post.show');
Route::get('postint/{post}', [PostindexController::class,'show'])->name('postint.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [PostController::class,'index'])->name('dashboard');


