<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naturalness extends Model
{
    protected $fillable = [
        'employeer_id',
        'naturalized',
        'naturalized_date',
        'rne',
        'expedition_date_rne',
        'emmiter_org_rne',
        'brazilian_married',
        'brazilian_son',
        'condition_classification'
    ];
}
