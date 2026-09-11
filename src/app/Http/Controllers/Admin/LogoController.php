<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;

Class LogoController extends Controller {

    public function index() {

        $listaLogos = Logo::orderbyDesc('id_logo')
                                           ->get();

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        return view('admin.logo.index', compact('LogoAtiva', 'listaLogos'));

    }

}