<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Professores;

Class ProfessoresController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaProfessores = Professores::orderbyDesc('id_professores')->get();

        return view('admin.professores.index', compact('listaProfessores', 'LogoAtiva'));

    }

}