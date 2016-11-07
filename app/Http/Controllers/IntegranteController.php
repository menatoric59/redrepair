<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class IntegranteController extends Controller
{
    public function index(){
    	$archivo = 'storage/app/directorio.xlsx';
        $filas = Excel::load($archivo)->get();
        return view('integrantes.index',compact('filas'));	
    }
    public function mapa(){
    	return view ('integrantes.mapa');
    }
    
}
