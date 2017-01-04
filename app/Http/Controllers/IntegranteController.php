<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Integrante;
use Intervention\Image\Facades\Image;

class IntegranteController extends Controller
{
    public function index(){
    	
        $integrantes = Integrante::all();
        return view('integrantes.index',compact('integrantes'));	
    }
    public function mapa(){
    	return view ('integrantes.mapa');
    }
    public function jsonMapa(){
        $integrantes = Integrante::selectRaw('
			estado,count(*) as cantidad
    	')
            ->join('estados','estados.clave','integrantes.estado')
            ->groupBy(['estado'])
            ->orderBy('cantidad')
            ->get()
            ->toArray();

        $integrantes = array_values($integrantes);
        //dd($integrantes);
        return $integrantes;
    }
    public function jsonEstados(){

    }
    public function json(){
    	$integrantes = Integrante::selectRaw('
			estado,estados.nombre,count(*) as cantidad
    	')
    	->join('estados','estados.clave','integrantes.estado')
    	->groupBy(['estado','estados.nombre'])
        ->orderBy('cantidad')
    	->get()
    	->toArray();

    	$integrantes = array_values($integrantes);
    	//dd($integrantes);
    	return $integrantes;
    }
    public function jsonTipoIntegrante(){
        $integrantes = Integrante::selectRaw('
            integrantes.participacion,count(*) as cantidad
        ')
        ->groupBy(['integrantes.participacion'])
        ->orderBy('cantidad')
        ->get()
        ->toArray();

        $integrantes = array_values($integrantes);
        //dd($integrantes);
        return $integrantes;
    }
    public function jsonTipoAdscripcion(){
        $integrantes = Integrante::selectRaw('
            integrantes.institucion as adscripcion,count(*) as cantidad
        ')
        ->groupBy(['integrantes.institucion'])
        ->orderBy('cantidad')
        ->get()
        ->toArray();

        $integrantes = array_values($integrantes);
        return $integrantes;
    }

    public function nueva(){
        return view('integrantes.nueva');
    }
    public function guardar(Request $request){
        $integrante = new Integrante();
        $integrante->fill($request->all());
        $integrante->save();
        $integrante->actualizarFoto($request->file('foto'));
        return redirect()->route('integrante.perfil',$integrante->id);
    }

    public function editar($id){
        $integrante = Integrante::findOrFail($id);
        return view('integrantes.editar',compact('integrante'));
    }
     public function perfil($id){
        $integrante = Integrante::findOrFail($id);
        return view('integrantes.perfil',compact('integrante'));
    }
    public function actualizar(Request $request,$id){
        $integrante = Integrante::findOrFail($id);
        $integrante->actualizarFoto($request->file('foto'));
        $integrante->fill($request->all());
        $integrante->save();
        \Alert::success('Se ha actualizado el perfil de ' . $integrante->nombre);
        return redirect()->route('integrante.perfil',$id);
    }
}
