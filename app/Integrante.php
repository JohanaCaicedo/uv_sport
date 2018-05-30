<?php

namespace uv_sport;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    protected $fillable = [
        'codigo', 'plan', 'nombre','apellido'
    ];

    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}
