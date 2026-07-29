<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {
    protected $table = 'tbl_categoria';
    protected $primaryKey = 'id_categoria';

    public $timestamps = false;

    protected $fillable = [
        'nome_categoria',
        'faixa_etaria_categoria',
        'descricao_foco_categoria',
        'horario_inicio_categoria',
        'horario_fim_categoria',
        'link_saibamais_categoria',
        'status_categoria',
    ];
}