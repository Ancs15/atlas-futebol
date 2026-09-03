<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Aluno;

Class AlunoController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaAlunos = Aluno::with('AlunoTurma')->with('AlunoResponsavel')
                                                 ->orderbyDesc('id_turma')
                                                 ->orderbyDesc('id_aluno')
                                                                   ->get();

        return view('admin.aluno.index', compact('listaAlunos', 'listaAlunos', 'LogoAtiva'));

    }

}