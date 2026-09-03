<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Categoria;

Class CategoriaController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaCategoria = Categoria::orderbyDesc('id_categoria')->get();

        return view('admin.categoria.index', compact('listaCategoria', 'LogoAtiva'));

    }

}