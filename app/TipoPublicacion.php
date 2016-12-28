<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPublicacion extends Model
{
    protected $table = 'tipo_publicacion';
    protected $fillable = [
        'nombre'
    ];
}
