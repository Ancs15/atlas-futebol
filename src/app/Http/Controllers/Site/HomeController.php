<?php

// NOMEIA O ARQUIVO
namespace App\Http\Controllers\Site;
//  CHAMA O ARQUIVO CONTROLLER
use App\Http\Controllers\Controller;
//CHAMA O ARQUIVO LOGO
use App\Models\Logo;
// CHAMA O ARQUIVO BANNER
use App\Models\Banner;
// CHAMA O ARQUIVO CATEGORIA
use App\Models\Categoria;
use App\Models\Depoimentos;
use App\Models\Galeria;
use App\Models\Parceiros;
use App\Models\Professores;

// CRIA A CLASSE HOME CONTROLLER
class HomeController extends Controller {

    //CHAMA A PÁGINA PRINCIPAL
    public function home() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        // dd($LogoAtiva);

        // CHAMA O ARQUIVO BANNER
        $listaBanners = Banner::where('status_banner', 'ATIVO')->inRandomOrder()->get();

        // CHAMA O ARQUIVO CATEGORIA
        $listaCategorias = Categoria::where('status_categoria', 'ATIVO')->get();

        // Verifica se a lista de categorias está funcionando
        // dd($listaCategorias);

        $listaParceiros = Parceiros::where('status_parceiros', 'ATIVO')->orderBy('nome_parceiros', 'ASC')->get();
        // dd($listaParceiros);

        $listaGaleria = Galeria::where('status_galeria', 'ATIVO')->orderBy('titulo_galeria', 'ASC')->get();
        // dd($listaGaleria);

        $listaEquipe = Professores::where('status_professores', 'ATIVO')->inrandomOrder()->get();
        //dd($listaEquipe);

        $listaDepo = Depoimentos::with('DepoResponsavel')
                        ->where('status_depoimentos', 'APROVADO')
                        ->inRandomOrder()
                        ->get();

        // dd($listaDepo->toArray());

        // RETORNA A PÁGINA HOME COM A LISTA DE BANNERS E CATEGORIAS
        return view('site.home.home', compact('LogoAtiva', 'listaBanners', 'listaCategorias', 'listaGaleria', 'listaParceiros', 'listaEquipe', 'listaDepo'));
    }

}