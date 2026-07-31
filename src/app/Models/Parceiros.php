<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parceiros extends Model{

    protected $table = 'tbl_parceiros';
    protected $primaryKey = 'id_parceiros';

    public $timestamps = true;
    const CREATED_AT = 'data_criacao_parceiros';
    const UPDATE_AT = 'data_atualizacao_parceiros';

    public $fillable = [
        'nome_parceiros',
        'logo_parceiros',
        'link_site_parceiros',
        'status_parceiros',
    ];

}