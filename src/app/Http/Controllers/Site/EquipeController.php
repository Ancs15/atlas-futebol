<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Professores;

Class EquipeController extends Controller {

    public function equipe() {

        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();

        $listaEquipe = Professores::where('status_professores', 'ATIVO')->inrandomOrder()->get();
        // dd($listaEquipe);
    
        return view('site.equipe.equipe', compact('LogoAtiva', 'listaEquipe'));

    }

}