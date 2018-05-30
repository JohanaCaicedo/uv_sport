<?php

namespace uv_sport;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'nombre', 'fecha', 'deporte', 'integrante_id'
    ];
  
public function integrante(){
    return $this->hasMany(Integrante::class);
}



}
