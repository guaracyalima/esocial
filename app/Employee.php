<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected  $fillable = [
        'name',
        'middle_name',
        'last_name',
        'complete_name',
        'rg',
        'expedition_date_rg',
        'uf_rg',
        'org_rg',
        'father',
        'mother',
        'birth',
        'birth_parents',
        'birth_state',
        'birth_city',
        'civil_state',
        'sex',
        'cpf_own',
        'cpf',
        'schooling',
        'color'
    ];
}
