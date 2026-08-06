<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Professores extends Model {

    protected $table = 'tbl_professores';
    protected $primaryKey = 'id_professores';

    public $timestamps = false;

    protected $fillable = [
        'id_usuario',
        'nome_professores',
        'cpf_professores',
        'telefone_professores',
        'email_professores',
        'foto_professores',
        'tipo_professores',
        'status_professores',
    ];

    public function ProfessoresUsuario() {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id_usuario');
    }

}