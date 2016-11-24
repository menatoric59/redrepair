<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    protected $table = 'integrantes';
    protected $fillable =[
    	'nombre',
    	'adscripcion',
    	'pais',
    	'estado',
    	'disciplina',
    	'sni',
    	'participacion',
    	'detalle',
        'correo',
    ];

    public function getImagenPerfilAttribute(){
        $archivo = 'assets/sobre-la-red/directorio/' .
            strtolower(str_replace(' ', '-',$this->attributes['nombre'])) . 
            '.jpg';
        $avatar = 'assets/sobre-la-red/directorio/avatar.jpg';
        return file_exists($archivo) ? $archivo : $avatar;
    }
}
