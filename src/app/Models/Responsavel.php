<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Responsavel extends Model{

    protected $table = 'tbl_responsavel';
    protected $primaryKey = 'id_responsavel';

    public $timestamps = true;
    const CREATED_AT = 'data_criacao_responsavel';
    const UPDATE_AT = 'data_atualizacao_responsavel';

    protected $fillable = [
        'id_usuario',
        'nome_responsavel',
        'cpf_responsavel',
        'telefone_responsavel',
        'email_responsavel',
        'foto_responsavel',
        'status_responsavel',
    ];

    public function ResponsavelUsuario() {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

    public function ResponsavelDepo() {
        return $this->hasMany(Depoimentos::class, 'id_cliente', 'id_responsavel');
    }

    public function ResponsavelAluno() {
        return $this->hasMany(Aluno::class, 'id_responsavel', 'id_responsavel');
    }

    public function ResponsavelSolicitar() {
        return $this->hasMany(SolicitarMatricula::class, 'id_responsavel', 'id_responsavel');
    }

}