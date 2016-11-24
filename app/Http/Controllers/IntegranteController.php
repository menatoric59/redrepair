<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Integrante;
class IntegranteController extends Controller
{
    public function index(){
    	
        $integrantes = Integrante::all();
        return view('integrantes.index',compact('integrantes'));	
    }
    public function mapa(){
    	return view ('integrantes.mapa');
    }
    public function json(){
    	$integrantes = Integrante::selectRaw('
			estado,estados.nombre,count(*) as cantidad
    	')
    	->join('estados','estados.clave','integrantes.estado')
    	->groupBy(['estado','estados.nombre'])
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
        ->get()
        ->toArray();

        $integrantes = array_values($integrantes);
        //dd($integrantes);
        return $integrantes;
    }
    public function jsonTipoAdscripcion(){
        $integrantes = Integrante::selectRaw('
            integrantes.adscripcion,count(*) as cantidad
        ')
        ->groupBy(['integrantes.adscripcion'])
        ->get()
        ->toArray();

        $integrantes = array_values($integrantes);
        return $integrantes;
    }

    public function nueva(){
        return view('integrantes.nueva');
    }
    public function guardar(Request $request){
        dd($request->all());
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

        $integrante->fill($request->all());
        $integrante->save();

        \Alert::success('Se ha actualizado el perfil de la integrante');


        return redirect()->route('integrantes.lista');
    }
}
