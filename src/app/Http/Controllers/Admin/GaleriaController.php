<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Galeria;

Class GaleriaController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaGaleria = Galeria::orderbyDesc('id_galeria')->get();

        return view('admin.galeria.index', compact('listaGaleria', 'LogoAtiva'));

    }

}