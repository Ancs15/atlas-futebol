<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\EquipeController;
use App\Http\Controllers\Site\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/equipe', [EquipeController::class, 'equipe'])->name('equipe');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/dashboard', [AdminController::class, 'admin'])->name('admin');