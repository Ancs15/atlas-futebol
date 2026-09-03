<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class SolicitarMatricula extends Model {

    protected $table = 'tbl_solicitacao_matricula';
    protected $primaryKey = 'id_solicitacao_matricula';

    public $timestamps = false;

    protected $fillable = [
        'id_aluno',
        'id_responsavel',
        'status_solicitacao_matricula',
    ];

    public function SolicitarAluno() {
        return $this->belongsTo(Aluno::class, 'id_aluno', 'id_aluno');
    }

    public function SolicitarResponsavel() {
        return $this->belongsTo(Responsavel::class, 'id_responsavel', 'id_responsavel');
    }
}