<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;


class Entrada extends Model
{
    protected $table='entradas';
    protected $fillable=[
        'nombre',
        'padre',
        'slug',
        'descripcion_html',
        'tipo',
        'subtipo',
        'visible_publico',
        'liga_ver_mas',
        'texto_ver_mas',
        'inicio_evento',
        'fin_evento',
        'inicio_visible',
        'fin_visible'
    ];

    public function guardaImagen($foto){
        $archivo = 'assets/entradas/' . $this->attributes['id'] . '.jpg';
        //dd($foto);
        if ( $foto != null ){
            //dd($foto);
            //Image::
            $img = Image::make($foto);
            $img->resize(400 , null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            if ( !is_dir('assets/entradas/')){
                mkdir('assets/entradas/');
            }
            $img->save($archivo);
        }
    }
    public function getEstatusAttribute(){
        return  $this->attributes['inicio'] <= date('Y-m-d') && $this->attributes['fin'] >= date('Y-m-d') ? 'success' : 'danger';
    }
    public function getImagenAttribute(){
        $imagen='assets/entradas/' . $this->attributes['id'] . '.jpg';
        //dd($imagen);
        return file_exists($imagen) ? $imagen  .'?'. date('Y-m-d h:s') : "http://henaresaldia.com/wp-content/uploads/2016/10/user-clipart-dagobert83_female_user_icon.png";
    }
    function getTextoVerMasAttribute(){
        return $this->attributes['texto_ver_mas'] ? $this->attributes['texto_ver_mas'] : 'Ver mas' ;
    }
}
