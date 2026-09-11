<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Turma;

Class TurmaController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaTurma = Turma::with('TurmaCategoria')
                          ->orderbyDesc('id_turma')
                                            ->get();

        //dd($listaTurma->toArray());

        return view('admin.turma.index', compact('LogoAtiva', 'listaTurma'));

    }

}