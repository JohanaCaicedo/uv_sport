<?php

namespace uv_sport;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];
}
