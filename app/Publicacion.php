<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Publicacion extends Model
{
    protected $table = 'publicaciones';
    protected $fillable = [
    	'titulo',
        'tipo_publicacion',
        'publicado_en',
        'anio',
        'ciudad',
        'editorial',
        'paginas',
        'isbn',
        'issn',
        'url',
        'sinopsis_html'
    ];

    public function tipo(){
        return $this->hasOne('App\TipoPublicacion','id','tipo_publicacion');
    }

    public function getImagenAttribute(){
        $archivo = 'assets/biblioteca/publicaciones/' . $this->attributes['id'] . '.jpg';
        $avatar = 'assets/biblioteca/publicaciones/imagen.png';
        return file_exists($archivo) ? $archivo : $avatar;
    }
    public function getImagenIndiceAttribute(){
        $archivo = 'assets/biblioteca/publicaciones/' . $this->attributes['id'] . '.jpg';
        $avatar = 'assets/biblioteca/publicaciones/indice.jpg';
        return file_exists($archivo) ? $archivo : $avatar;
    }
    public function actualizarImagen($imagen){
        if ($imagen){
            $img = Image::make($imagen);
            $img->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save('assets/biblioteca/publicaciones/' . $this->attributes['id'] . '.jpg');
        }
    }
    public function actualizarImagenIndice($indice){
        if ($indice){
            $img = Image::make($indice);
            $img->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save('assets/biblioteca/publicaciones/' . $this->attributes['id'] . '.jpg');
        }
    }
    
}
