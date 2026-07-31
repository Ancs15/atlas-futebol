<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model {
    protected $table = 'tbl_banner';
    protected $primaryKey = 'id_banner';

    public $timestamps = false;

    protected $fillable = [
        'titulo_banner',
        'subtitulo_banner',
        'nome_img_banner',
        'link_banner',
        'texto_botao1_banner',
        'link_botao1_banner',
        'texto_botao2_banner',
        'link_botao2_banner',
        'status_banner',
    ];
}