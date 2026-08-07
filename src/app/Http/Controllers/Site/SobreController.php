<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Professores;
use App\Models\Parceiros;

Class SobreController extends Controller {
    public function sobre()
    {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        // dd($LogoAtiva);

        $listaEquipe = Professores::where('status_professores', 'ATIVO')->get();
        // dd($listaEquipe);

        $listaParceiros = Parceiros::where('status_parceiros', 'ATIVO')->orderBy('nome_parceiros', 'ASC')->get();
        //dd($listaParceiros);        

        return view('site.sobre.sobre', compact('listaParceiros', 'LogoAtiva', 'listaEquipe'));
    }
}