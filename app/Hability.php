<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hability extends Model
{
    protected $fillable = [
        'employeer_id',
        'category_of_hability',
        'date_issue',
        'expedition_org',
        'state_id',
        'expire_date',
        'firisty_hability_date'
    ];
}
