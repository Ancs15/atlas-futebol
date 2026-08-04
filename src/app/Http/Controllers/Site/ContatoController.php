<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

Class ContatoController extends Controller {

    public function contato() {

        return view('site.contato.contato');

    }

}