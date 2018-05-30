<?php

namespace uv_sport;

use Illuminate\Database\Eloquent\Model;

class Torneo_Equipo extends Model
{
    protected $fillable = [
        'torneo', 'equipos'
    ];
}
