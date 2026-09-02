<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Turma extends Model {

    protected $table = 'tbl_turma';
    protected $primaryKey = 'id_turma';
    
    public $timestamps = false;

    protected $fillable = [
        'id_categoria',
        'nome_turma',
        'horario_turma',
        'limite_alunos_turma',
        'status_turma',
    ];

    public function TurmaCategoria() {
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }

    public function TurmaAluno() {
        return $this->hasMany(Aluno::class, 'id_turma', 'id_turma');
    }

}