<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Depoimentos extends Model {

    protected $table = 'tbl_depoimentos';
    protected $primaryKey = 'id_depoimentos';

    public $timestamps = true;
    const CREATED_AT = 'data_criacao_depoimentos';
    const UPDATE_AT = 'data_atualizacao_depoimentos';

    protected $fillable = [
        'id_cliente',
        'relacao_autor_depoimentos',
        'titulo_depoimentos',
        'texto_depoimentos',
        'foto_depoimentos',
        'status_depoimentos',
    ];

    public function DepoResponsavel() {
        return $this->belongsTo(Responsavel::class, 'id_responsavel', 'id_cliente');
    }    

}