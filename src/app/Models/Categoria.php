<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {
    protected $table = 'tbl_categoria';
    protected $primaryKey = 'id_categoria';

    public $timestamps = false;

    protected $casts = [
        'horario_inicio_categoria' => 'datetime',
        'horario_fim_categoria' => 'datetime',
    ];

    protected $fillable = [
        'nome_categoria',
        'faixa_etaria_categoria',
        'descricao_foco_categoria',
        'horario_inicio_categoria',
        'horario_fim_categoria',
        'link_saibamais_categoria',
        'status_categoria',
    ];

    public function CategoriaTurma() {
        return $this->hasMany(Turma::class, 'id_categoria', 'id_categoria');
    }
}