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
        'campo',
    ];

    protected function fotosIntegrantes(){
        $archivos=[];
        $directorio='assets/sobre-la-red/directorio/' . $this->id . '/';
        if ( !$dir = @dir($directorio) ){
            return $archivos;
        }
        while(($archivo = $dir->read()) !== false) {
            // Obviamos los archivos ocultos
            if($archivo[0] == ".") continue;
            if(is_dir($directorio . $archivo)) {
                $archivos[] = array(
                    "nombre" => $directorio . $archivo . "/",
                );
            } else if (is_readable($directorio . $archivo)) {
                $archivos[] = array(
                    "nombre" => '/'.$directorio . $archivo,
                );
            }
        }
        $dir->close();

        return $archivos;
    }

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
