<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Aviso extends Model
{
    protected $fillable = [
        'tipo',
        'descripcion',
        'liga',
        'texto_liga',
        'inicio',
        'fin'
    ];
    public function guardaImagen($foto){
        $archivo = 'assets/avisos/' . $this->attributes['id'] . '.jpg';
        //dd($foto);
        if ( $foto != null ){
            //dd($foto);
            $img = Image::make($foto);
            $img->resize(267 , null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            $img->save($archivo);
        }
    }
    public function getEstatusAttribute(){
        return  $this->attributes['inicio'] <= date('Y-m-d') && $this->attributes['fin'] >= date('Y-m-d') ? 'success' : 'danger';
    }
    public function getImagenAttribute(){
        return 'assets/avisos/' . $this->attributes['id'] . '.jpg?' . date('Y-m-d h:s');
    }
}
