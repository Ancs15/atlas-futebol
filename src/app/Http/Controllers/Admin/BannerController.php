<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Banner;

Class BannerController extends Controller {

    public function index() {

        //CHAMA O ARQUIVO LOGO
        $LogoAtiva = Logo::where('status_logo', 'ATIVO')->first();
        //dd($LogoAtiva);

        $listaBanner = Banner::orderbyDesc('id_banner')->get();

        return view('admin.banner.index', compact('listaBanner', 'LogoAtiva'));

    }

}