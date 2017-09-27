<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctps extends Model
{
    protected $fillable = [
        'employeer_id',
        'number',
        'series',
        'letter',
        'state_id',
        'date_issue',
        'date_vality',
        'integration_program',
        'pis_pasep'
    ];
}
