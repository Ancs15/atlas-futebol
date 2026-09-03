<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Aluno extends Model {

    protected $table = 'tbl_aluno';
    protected $primaryKey = 'id_aluno';

    public $timestamps = false;

    protected $fillable = [
        'id_turma',
        'id_responsavel',
        'nome_aluno',
        'data_nascimento_aluno',
        'sexo_aluno',
        'foto_aluno',
        'status_aluno',
    ];

    public function AlunoTurma() {
        return $this->belongsTo(Turma::class, 'id_turma', 'id_turma');
    }

    public function AlunoResponsavel() {
        return $this->belongsTo(Responsavel::class, 'id_responsavel', 'id_responsavel');
    }

    public function AlunoSolicitar() {
        return $this->hasOne(SolicitarMatricula::class, 'id_aluno', 'id_aluno');
    }

}