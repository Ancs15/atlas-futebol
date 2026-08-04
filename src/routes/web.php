<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');