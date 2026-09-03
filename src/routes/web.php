<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlunoController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\GaleriaController;
use App\Http\Controllers\Admin\ParceirosController;
use App\Http\Controllers\Admin\ProfessoresController;
use App\Http\Controllers\Admin\UsuarioController;
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
Route::get('/admin/usuarios', [UsuarioController::class, 'index'])->name('admin.usuario.index');
Route::get('/admin/professores', [ProfessoresController::class, 'index'])->name('admin.professores.index');
Route::get('/admin/banner', [BannerController::class, 'index'])->name('admin.banner.index');
Route::get('/admin/categoria', [CategoriaController::class, 'index'])->name('admin.categoria.index');
Route::get('/admin/galeria', [GaleriaController::class, 'index'])->name('admin.galeria.index');
Route::get('/admin/parceiros', [ParceirosController::class, 'index'])->name('admin.parceiros.index');
Route::get('/admin/alunos', [AlunoController::class, 'index'])->name('admin.aluno.index');