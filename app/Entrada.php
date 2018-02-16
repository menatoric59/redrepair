<?php

namespace App;

use Carbon\Carbon;
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
        'columnas',
        'subtipo',
        'visible_publico',
        'liga_ver_mas',
        'texto_ver_mas',
        'inicio_evento',
        'fin_evento',
        'inicio_visible',
        'fin_visible'
    ];

    function guardaImagen($foto){
        $archivo = 'assets/entradas/' . $this->attributes['id'] . '/' . date('Y_m_d_h_i_s') . '.jpg';
        //dd($foto);
        if ( $foto != null ){
            //dd($archivo);
            //Image::
            $img = Image::make($foto);
            $img->resize(800 , null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
            if ( !is_dir('assets/entradas/' . $this->attributes['id'] . '/')){
                mkdir('assets/entradas/' . $this->attributes['id'] . '/');
            }
            $img->save($archivo);
        }
    }
    function imagenes(){
        $archivos=[];
        $directorio='assets/entradas/' . $this->id . '/';
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
    function getEstatusAttribute(){
        return  $this->attributes['inicio'] <= date('Y-m-d') && $this->attributes['fin'] >= date('Y-m-d') ? 'success' : 'danger';
    }
    function getImagenAttribute(){
        $imagen='assets/entradas/' . $this->attributes['id'] . '.jpg';
        //dd($imagen);
        return file_exists($imagen) ? $imagen  .'?'. date('Y-m-d h:s') : "https://www.webnode.com/blog/wp-content/uploads/2016/10/Blog-intro.jpg";
    }
    function getTextoVerMasAttribute(){
        return $this->attributes['texto_ver_mas'] ? $this->attributes['texto_ver_mas'] : 'Ver mas' ;
    }

    function getFechaEntradaAttribute(){
        $inicio=new \DateTime($this->attributes['inicio_evento']);
        $fin=new \DateTime($this->attributes['fin_evento']);
        $inicio=date_format($inicio,'d-m-Y');
        $fin=date_format($fin,'d-m-Y');
        return $inicio==$fin ? $inicio : 'Del '.$inicio.' al '.$fin;
    }
    protected function ultimas($tipo){
        //dd(getdate());
        return Entrada::where('tipo',$tipo)
            ->whereDate('inicio_visible','<=',Carbon::now()->format('Y-m-d'))
            ->whereDate('fin_visible','>=',Carbon::now()->format('Y-m-d'))
            ->orderBy('padre','desc')
            ->orderBy('inicio_evento')
            ->get();
        //->where('inicio_visible','<=',getdate())

    }
}
