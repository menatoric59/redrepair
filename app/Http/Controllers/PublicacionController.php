<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publicacion;
class PublicacionController extends Controller
{
    public function index(){
    	$rutaImagenes = 'assets/biblioteca/publicaciones/';
    	$publicaciones = Publicacion::all();
    	return view('publicaciones.index',compact('publicaciones','rutaImagenes'));
    }
    public function nueva(){
    	return view('publicaciones.nueva');
    }
    public function guardar(Request $request){
    	$this->validate($request,
    		[
	    		'titulo'=>'required',
	        	'tipo_publicacion'=>'required',
	        	'publicado_en'=>'required',
	        	'anio'=>'required',
	        	'ciudad'=>'required',
    		]
    	);
    	$publicacion = new Publicacion();
    	$publicacion->fill($request->all());
    	$publicacion->save();
    	\Alert::success('Se ha creado la publicación ' . $publicacion->titulo);
    	return redirect()->route('publicacion.lista');

    }
    public function editar($id){
    	dd('Tratando de editar ' . $id);
    }
}
