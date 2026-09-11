<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Depoimentos;

Class DepoController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaDepo = Depoimentos::with('DepoResponsavel')
                          ->orderbyDesc('id_depoimentos')
                                                  ->get();

        //dd($listaDepo->toArray());

        return view('admin.depoimentos.index', compact('listaDepo', 'LogoAtiva'));

    }

}