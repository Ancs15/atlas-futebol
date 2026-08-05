<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Logo;
Class ContatoController extends Controller {

    public function contato() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        // dd($LogoAtiva);

        return view('site.contato.contato', compact('LogoAtiva'));

    }

}