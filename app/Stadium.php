<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $fillable = ['name', 'capacity', 'city'];
}
