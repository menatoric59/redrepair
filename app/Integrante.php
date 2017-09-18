<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Integrante extends Model
{
    protected $table = 'integrantes';
    protected $fillable =[
    	'nombre',
    	'institucion',
        'dependencia',
    	'pais',
    	'estado',
    	'disciplina',
    	'sni',
    	'participacion',
    	'detalle',
        'estatus',
        'correo',
    ];

    public function getImagenPerfilAttribute(){
        $archivo = 'assets/sobre-la-red/directorio/' . $this->attributes['id'] . '.jpg';
        $avatar = 'assets/sobre-la-red/directorio/avatar.jpg';
        return file_exists($archivo) ? $archivo : $avatar;
    }
    public function actualizarFoto($foto){
        if ($foto){
            $img = Image::make($foto);
            $img->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save('assets/sobre-la-red/directorio/' . $this->attributes['id'] . '.jpg');
        }
    }
}
