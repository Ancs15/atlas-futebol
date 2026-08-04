<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Logo extends Model {

    protected $table = 'tbl_logo';
    protected $primaryKey = 'id_logo';

    public $timestamps = false;

    protected $fillable = [
        'nome_logo',
        'link_logo',
        'status_logo',
    ];

}