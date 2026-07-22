<?php

// NOMEIA O ARQUIVO
namespace App\Http\Controllers\Site;
//  CHAMA O ARQUIVO CONTROLLER
use App\Http\Controllers\Controller;

// CRIA A CLASSE HOME CONTROLLER
class HomeController extends Controller {

    //CHAMA A PÁGINA PRINCIPAL
    public function home() {
        return view('site.home.home');
    }

}