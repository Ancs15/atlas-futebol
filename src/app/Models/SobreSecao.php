<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class SobreSecao extends Model {

    protected $table = 'tbl_sobre_secao';
    protected $primaryKey = 'id_sobre_secao';

    public $timestamps = false;

    protected $fillable = [
        'titulo_sobre_secao',
        'paragrafo1_sobre_secao',
        'paragrafo2_sobre_secao',
        'texto_destaque_sobre_secao',
        'paragrafo3_sobre_secao',
        'texto_botao_sobre_secao',
        'link_botao_sobre_secao',
        'img_principal_sobre_secao',
        'img_fundo_sobre_secao',
        'status_sobre_secao',
    ];

}