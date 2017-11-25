<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Styde\Html\Facades\Alert;

class Reunion extends Model
{
    protected $table = 'reuniones';
    protected $fillable =[
        'titulo',
        'descripcion',
        'lugar',
        'galeria_instagram',
        'inicio',
        'fin'
    ];

    public function guardaImagen($foto){
        $archivo = 'assets/reuniones/' . $this->attributes['id'] . '.jpg';
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

    function guardarPDF($file,$tipo){
        if ($file){
            $nombre = '/assets/reuniones/' . $tipo . '/' . $this->attributes['id'] . '.pdf';
            Storage::disk('public')->put($nombre,\File::get($file) );
        }


    }

    public function getImagenAttribute(){
        return '/assets/reuniones/' . $this->attributes['id'] . '.jpg?' . date('Y-m-d h:s');
    }
    function getInicioTextoAttribute(){
        return $this->fechaTexto($this->attributes['inicio']);
    }
    function getFinTextoAttribute(){
        return $this->fechaTexto($this->attributes['fin']);
    }
    function archivo($tipo){
        $archivo = 'assets/reuniones/' . $tipo . 's/' . $this->attributes['id'] . '.pdf';
        if (\File::exists($archivo)){
            return $archivo . '?' . date('Y-m-d h:s');
        }
        return '#modalSinDocumento';
    }
    protected function fechaTexto($fechaTexto){
        $datosFecha = explode('-',$fechaTexto) ;
        $miFecha= gmmktime(12,0,0,$datosFecha[1],$datosFecha[2],$datosFecha[0]);
        $diasTexto = ["domingo","lunes","martes","miercoles","jueves","viernes","sábado"];
        $mesesTexto= ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
        return $diasTexto[date('w',$miFecha)]." ".date('d',$miFecha)." de ". $mesesTexto[date('n',$miFecha)-1] . " de " . $datosFecha[0] ;
    }

}
