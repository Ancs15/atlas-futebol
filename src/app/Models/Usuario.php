<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Usuario extends Model{

    protected $table = 'tbl_usuario';
    protected $primaryKey = 'id_usuario';

    public $timestamps = true;
    const CREATED_AT = 'data_criacao_usuario';
    const UPDATE_AT = 'data_atualizacao_usuario';

    protected $fillable = [
        'nome_usuario',
        'email_usuario',
        'senha_usuario',
        'tipo_usuario',
        'status_usuario',
    ];

    //Um Login pertence a uma Pessoa

    public function UsuarioResponsavel(){
        return $this->hasOne(Responsavel::class, 'id_usuario', 'id_usuario');
    }
}