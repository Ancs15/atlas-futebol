<?php

// NOMEIA O ARQUIVO
namespace App\Http\Controllers\Site;
//  CHAMA O ARQUIVO CONTROLLER
use App\Http\Controllers\Controller;
// CHAMA O ARQUIVO BANNER
use App\Models\Banner;
// CHAMA O ARQUIVO CATEGORIA
use App\Models\Categoria;

// CRIA A CLASSE HOME CONTROLLER
class HomeController extends Controller {

    //CHAMA A PÁGINA PRINCIPAL
    public function home() {

        // CHAMA O ARQUIVO BANNER
        $listaBanners = Banner::where('status_banner', 'ATIVO')->get();

        // CHAMA O ARQUIVO CATEGORIA
        $listaCategorias = Categoria::where('status_categoria', 'ATIVO')->get();

        // Verifica se a lista de categorias está funcionando
        // dd($listaCategorias);

        // RETORNA A PÁGINA HOME COM A LISTA DE BANNERS E CATEGORIAS
        return view('site.home.home', compact('listaBanners', 'listaCategorias'));
    }

}