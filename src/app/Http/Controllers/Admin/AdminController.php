<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Logo;
use App\Models\Turma;

Class AdminController extends Controller {

    public function admin() {
        
        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $contarAlunos = Aluno::where('status_aluno', 'ATIVO')->count();
        $contarTurmas = Turma::where('status_turma', 'ATIVO')->count();
        //ESPAÇO PARA CONTAR MATRÍCULA
        //ESPAÇO PARA CONTAR PARTIDAS

        return view('admin.dashboard', compact('LogoAtiva', 'contarAlunos', 'contarTurmas'));

    }

}