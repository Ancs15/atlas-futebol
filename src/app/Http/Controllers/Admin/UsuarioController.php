<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Usuario;

Class UsuarioController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaUsuario = Usuario::where('status_usuario', 'ATIVO')->get();
        //dd($listaUsuario);

        return view('admin.usuario.index', compact('listaUsuario', 'LogoAtiva'));

    }

}