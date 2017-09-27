<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected  $fillable = [
        'employeer_id',
        'address',
        'number',
        'neighborhood',
        'state_id',
        'city',
        'cep'
    ];
}
