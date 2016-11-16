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
    	dd($integrantes);
    	return $integrantes;
    }
}
