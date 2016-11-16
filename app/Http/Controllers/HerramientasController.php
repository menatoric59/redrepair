<?php

namespace App\Http\Controllers;
use App\Estado;
use App\Integrante;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Alert;
class HerramientasController extends Controller
{
    public function importarEstados(){
    	Alert::danger('Este procedimiento eliminara por completo el catálogo de Estados');
    	return view('herramientas.importar_estados');
    }
    public function cargarEstados(Request $request){
    	
    	$this->validate($request,[
    		'estados'=>'required|mimes:xls,xlsx,csv',
    	]);
    	$archivo = $request->file('estados');
        $estados = Excel::selectSheetsByIndex(0)->load($archivo)->toArray();
        $borrar = Estado::where('id','>', 0)->delete();
        foreach ($estados as $estado) 
        {
            $nuevoEstado = new Estado;
            $nuevoEstado->clave = $estado['clave'];
            $nuevoEstado->nombre = $estado['nombre'];
            $nuevoEstado->save();
        }
        Alert::success('Han sido importados con exito los Estados');
        return redirect()->back();
    }

    public function importarIntegrantes(){
    	Alert::danger('Este procedimiento eliminara por completo el catálogo de Integrantes');
    	return view('herramientas.importar_integrantes');
    }
    public function cargarIntegrantes(Request $request){
    	//dd('Cargando integrantes');
    	$this->validate($request,[
    		'integrantes'=>'required|mimes:xls,xlsx,csv',
    	]);
    	$archivo = $request->file('integrantes');
        $integrantes = Excel::selectSheetsByIndex(0)->load($archivo)->toArray();
        //dd($integrantes);
        $borrar = Integrante::where('id','>', 0)->delete();
        foreach ($integrantes as $integrante) 
        {
            $nuevoIntegrante = new Integrante;
            $nuevoIntegrante->orden = $integrante['orden'];
            $nuevoIntegrante->nombre = $integrante['nombre'];
            $nuevoIntegrante->adscripcion = $integrante['adscripcion'];
            $nuevoIntegrante->pais = $integrante['nacionalidad'];
            $nuevoIntegrante->estado = $integrante['estado'];
            $nuevoIntegrante->disciplina = $integrante['disciplina'];
            $nuevoIntegrante->sni = $integrante['sni'];
            $nuevoIntegrante->participacion	 = $integrante['participacion'];
           

            $nuevoIntegrante->save();
        }
        Alert::success('Han sido importados con exito los Integrantes');
        return redirect()->back();
    }
}
