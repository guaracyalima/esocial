<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeStatus extends Model
{
    protected $fillable = [
        'description',
        'observations'
    ];
};
