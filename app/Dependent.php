<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependent extends Model
{
    protected $fillable = [
        'employeer_id',
        'name',
        'birth',
        'cpf',
        'kinship',
        'sexo'
    ];
}
