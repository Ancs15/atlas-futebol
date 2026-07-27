<?php

// NOMEIA O ARQUIVO
namespace App\Http\Controllers\Site;
//  CHAMA O ARQUIVO CONTROLLER
use App\Http\Controllers\Controller;
// CHAMA O ARQUIVO BANNER
use App\Models\Banner;

// CRIA A CLASSE HOME CONTROLLER
class HomeController extends Controller {

    //CHAMA A PÁGINA PRINCIPAL
    public function home() {

        // CHAMA O ARQUIVO BANNER
        $listaBanners = Banner::where('status_banner', 'ATIVO')->get();

        // RETORNA A PÁGINA HOME COM A LISTA DE BANNERS
        return view('site.home.home', compact('listaBanners'));
    }

}