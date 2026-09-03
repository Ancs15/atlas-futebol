<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Parceiros;

Class ParceirosController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaParceiros = Parceiros::orderbyDesc('id_parceiros')->get();

        return view('admin.parceiros.index', compact('listaParceiros', 'LogoAtiva'));

    }

}