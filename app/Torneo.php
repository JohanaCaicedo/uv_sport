<?php

namespace uv_sport;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $fillable = [
        'fecha', 'nombre'
    ];
}
