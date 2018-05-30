<?php

namespace uv_sport;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable = [
        'fecha', 'torneo', 'equipo_local','equipo_visitante','marcador_local_visitante'
    ];
}
